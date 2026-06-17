<?php
/**
 * GBR Electrical Services, LLC — Contact Form Processor
 * Uses PHPMailer + Spaceship SMTP. Credentials stored in .env
 *
 * PHPMailer setup:
 *   1. Download from https://github.com/PHPMailer/PHPMailer/releases
 *   2. Extract and rename the folder to  PHPMailer/  in this directory
 *   3. Required files: PHPMailer/src/PHPMailer.php
 *                      PHPMailer/src/SMTP.php
 *                      PHPMailer/src/Exception.php
 */

/* ── Prevent direct GET access ── */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}


/* ================================================================
   HELPERS
   ================================================================ */

function clean(string $value): string
{
    return htmlspecialchars(strip_tags(trim($value)), ENT_QUOTES, 'UTF-8');
}

function redirect_with(string $status, string $message = ''): void
{
    $url = 'contact.php?status=' . urlencode($status)
         . ($message ? '&message=' . urlencode($message) : '');
    header('Location: ' . $url);
    exit;
}

/* Parse .env file — simple key=value, ignores comments and blank lines */
function load_env(string $path): void
{
    if (!file_exists($path)) return;
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#')) continue;
        [$key, $val] = array_map('trim', explode('=', $line, 2));
        if ($key !== '') putenv("$key=$val");
    }
}

load_env(__DIR__ . '/.env');


/* ================================================================
   SPAM / HONEYPOT CHECK
   ================================================================ */

if (!empty($_POST['website'])) {
    redirect_with('success', 'Thank you! We will be in touch shortly.');
}


/* ================================================================
   RATE LIMIT (session-based)
   ================================================================ */

session_start();

$now = time();
if (isset($_SESSION['last_contact_submit']) && ($now - $_SESSION['last_contact_submit']) < 60) {
    redirect_with('error', 'Please wait a moment before submitting again.');
}
$_SESSION['last_contact_submit'] = $now;


/* ================================================================
   INPUT VALIDATION
   ================================================================ */

$errors = [];

$name    = clean($_POST['name']    ?? '');
$phone   = clean($_POST['phone']   ?? '');
$email   = clean($_POST['email']   ?? '');
$message = clean($_POST['message'] ?? '');
$service = clean($_POST['service'] ?? '');
$address = clean($_POST['address'] ?? '');
$source  = clean($_POST['source']  ?? '');

if (strlen($name) < 2)
    $errors[] = 'Please enter your full name.';

if (!preg_match('/[\d\s\-\(\)\+\.]{7,20}/', $phone))
    $errors[] = 'Please enter a valid phone number.';

if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL))
    $errors[] = 'Please enter a valid email address.';

if (strlen($message) < 10)
    $errors[] = 'Please enter a message with at least 10 characters.';

if (!empty($errors)) {
    redirect_with('error', implode(' ', $errors));
}


/* ================================================================
   SEO / MARKETING SOLICITATION FILTER
   These are real people, not bots — keyword-match their pitch and
   silently drop it (logged for review) instead of emailing it out.
   The sender still sees a normal success message.
   ================================================================ */

$solicitation_phrases = [
    'seo services', 'seo agency', 'seo company', 'seo audit', 'seo strategy',
    'seo expert', 'seo specialist', 'improve your seo', 'your seo', 'for seo',
    'search engine optimization', 'backlink', 'guest post', 'link building',
    'digital marketing agency', 'marketing agency', 'social media marketing',
    'social media management', 'ppc campaign', 'google ads management',
    'increase your website traffic', 'increase organic traffic', 'organic traffic',
    'boost your ranking', 'rank higher on google', 'rank on page 1',
    'rank on the first page', 'page one of google', 'first page of google',
    'website ranking', 'google ranking', 'web design services',
    'website development services', 'content marketing', 'email marketing services',
    'lead generation services', 'outrank your competitors', 'organic search ranking',
    'free seo audit', 'improve your google ranking', 'website redesign services',
];

$haystack = strtolower($name . ' ' . $message);
$is_solicitation = false;
foreach ($solicitation_phrases as $phrase) {
    if (str_contains($haystack, $phrase)) {
        $is_solicitation = true;
        break;
    }
}

if ($is_solicitation) {
    $log_entry = date('Y-m-d H:i:s') . ' | ' . $name . ' | ' . $phone . ' | ' . $email
               . ' | FILTERED (solicitation): ' . substr($message, 0, 200) . "\n";
    @file_put_contents(__DIR__ . '/spam_log.txt', $log_entry, FILE_APPEND | LOCK_EX);

    redirect_with(
        'success',
        'Thank you, ' . $name . '! Your message has been sent. We\'ll be in touch within one business day.'
    );
}


/* ================================================================
   LOAD PHPMAILER
   ================================================================ */

$phpmailer_path = __DIR__ . '/PHPMailer/src/PHPMailer.php';

if (!file_exists($phpmailer_path)) {
    /* PHPMailer not yet uploaded — log and inform */
    $log_entry = date('Y-m-d H:i:s') . ' | ' . $name . ' | ' . $phone . ' | ' . $email . ' | ' . $service . "\n";
    @file_put_contents(__DIR__ . '/contact_log.txt', $log_entry, FILE_APPEND | LOCK_EX);
    redirect_with('error', 'Mail system not configured yet. Please call us at 717-467-1712.');
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';


/* ================================================================
   BUILD HTML EMAIL BODY
   ================================================================ */

$submitted = date('F j, Y \a\t g:i A T');
$reply_to  = $email ?: getenv('MAIL_TO');

$html_body = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"></head>
<body style="margin:0;padding:0;background:#f4f4f4;font-family:Arial,sans-serif;">
<table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f4f4;padding:30px 0;">
<tr><td align="center">
<table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:8px;overflow:hidden;box-shadow:0 2px 12px rgba(0,0,0,.08);">

  <!-- Header -->
  <tr>
    <td style="background:#1F1F1F;padding:24px 32px;border-bottom:4px solid #FC0D15;">
      <img src="https://lightsonpa.com/assets/images/logo.png" alt="GBR Electrical Services, LLC" width="160" style="display:block;max-width:160px;">
    </td>
  </tr>

  <!-- Title bar -->
  <tr>
    <td style="background:#FC0D15;padding:12px 32px;">
      <p style="margin:0;font-size:13px;font-weight:700;color:#ffffff;letter-spacing:1px;text-transform:uppercase;">
        &#9889; New Website Inquiry
      </p>
    </td>
  </tr>

  <!-- Body -->
  <tr>
    <td style="padding:28px 32px;">

      <p style="margin:0 0 20px;font-size:22px;font-weight:700;color:#1F1F1F;">
        You have a new message from <span style="color:#FC0D15;">{$name}</span>
      </p>

      <!-- Details table -->
      <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;margin-bottom:24px;">
        <tr style="background:#f9f9f9;">
          <td style="padding:10px 14px;font-size:12px;font-weight:700;color:#8A8A8A;text-transform:uppercase;letter-spacing:.6px;width:140px;border-bottom:1px solid #eeeeee;">Name</td>
          <td style="padding:10px 14px;font-size:14px;color:#1F1F1F;border-bottom:1px solid #eeeeee;">{$name}</td>
        </tr>
        <tr>
          <td style="padding:10px 14px;font-size:12px;font-weight:700;color:#8A8A8A;text-transform:uppercase;letter-spacing:.6px;border-bottom:1px solid #eeeeee;">Phone</td>
          <td style="padding:10px 14px;font-size:14px;color:#1F1F1F;font-weight:700;border-bottom:1px solid #eeeeee;"><a href="tel:{$phone}" style="color:#FC0D15;text-decoration:none;">{$phone}</a></td>
        </tr>
        <tr style="background:#f9f9f9;">
          <td style="padding:10px 14px;font-size:12px;font-weight:700;color:#8A8A8A;text-transform:uppercase;letter-spacing:.6px;border-bottom:1px solid #eeeeee;">Email</td>
          <td style="padding:10px 14px;font-size:14px;color:#1F1F1F;border-bottom:1px solid #eeeeee;">
            {$email}
          </td>
        </tr>
        <tr>
          <td style="padding:10px 14px;font-size:12px;font-weight:700;color:#8A8A8A;text-transform:uppercase;letter-spacing:.6px;border-bottom:1px solid #eeeeee;">Service</td>
          <td style="padding:10px 14px;font-size:14px;color:#1F1F1F;border-bottom:1px solid #eeeeee;">{$service}</td>
        </tr>
        <tr style="background:#f9f9f9;">
          <td style="padding:10px 14px;font-size:12px;font-weight:700;color:#8A8A8A;text-transform:uppercase;letter-spacing:.6px;border-bottom:1px solid #eeeeee;">Address</td>
          <td style="padding:10px 14px;font-size:14px;color:#1F1F1F;border-bottom:1px solid #eeeeee;">{$address}</td>
        </tr>
        <tr>
          <td style="padding:10px 14px;font-size:12px;font-weight:700;color:#8A8A8A;text-transform:uppercase;letter-spacing:.6px;">Referral</td>
          <td style="padding:10px 14px;font-size:14px;color:#1F1F1F;">{$source}</td>
        </tr>
      </table>

      <!-- Message box -->
      <p style="margin:0 0 8px;font-size:12px;font-weight:700;color:#8A8A8A;text-transform:uppercase;letter-spacing:.6px;">Message</p>
      <div style="background:#f9f9f9;border-left:4px solid #FC0D15;padding:16px 20px;border-radius:0 6px 6px 0;margin-bottom:24px;">
        <p style="margin:0;font-size:14px;color:#333333;line-height:1.7;">{$message}</p>
      </div>

      <!-- Call to action -->
      <table cellpadding="0" cellspacing="0">
        <tr>
          <td style="background:#FC0D15;border-radius:6px;padding:0;">
            <a href="tel:{$phone}" style="display:inline-block;padding:12px 28px;font-size:14px;font-weight:700;color:#ffffff;text-decoration:none;letter-spacing:.5px;">
              &#128222;&nbsp; Call {$name} Back
            </a>
          </td>
        </tr>
      </table>

    </td>
  </tr>

  <!-- Footer -->
  <tr>
    <td style="background:#1F1F1F;padding:16px 32px;">
      <p style="margin:0;font-size:11px;color:#8A8A8A;">
        Submitted {$submitted} &bull; IP: {$_SERVER['REMOTE_ADDR']} &bull; lightsonpa.com
      </p>
    </td>
  </tr>

</table>
</td></tr>
</table>
</body>
</html>
HTML;

/* Plain text fallback */
$text_body = implode("\r\n", [
    'GBR ELECTRICAL SERVICES — NEW CONTACT FORM SUBMISSION',
    str_repeat('=', 54),
    '',
    'Name:    ' . $name,
    'Phone:   ' . $phone,
    'Email:   ' . ($email ?: '(not provided)'),
    'Service: ' . ($service ?: '(not selected)'),
    'Address: ' . ($address ?: '(not provided)'),
    'Source:  ' . ($source  ?: '(not provided)'),
    '',
    'MESSAGE:',
    str_repeat('-', 40),
    $message,
    str_repeat('-', 40),
    '',
    'Submitted: ' . $submitted,
    'IP: '        . ($_SERVER['REMOTE_ADDR'] ?? 'unknown'),
]);


/* ================================================================
   SEND VIA PHPMAILER + SPACESHIP SMTP
   ================================================================ */

try {
    $mail = new PHPMailer(true);

    /* Server settings */
    $mail->isSMTP();
    $mail->Host       = getenv('SMTP_HOST')   ?: 'mail.spaceship.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = getenv('SMTP_USER');
    $mail->Password   = getenv('SMTP_PASS');
    $mail->SMTPSecure = getenv('SMTP_SECURE') === 'ssl' ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = (int)(getenv('SMTP_PORT') ?: 587);

    /* From */
    $mail->setFrom(
        getenv('MAIL_FROM') ?: 'info@lightsonpa.com',
        getenv('MAIL_FROM_NAME') ?: 'GBR Electrical Services'
    );

    /* To */
    $mail->addAddress(getenv('MAIL_TO') ?: 'info@lightsonpa.com', 'GBR Electrical');

    /* Reply-To — use customer's email so you can hit Reply directly */
    if ($email) {
        $mail->addReplyTo($email, $name);
    }

    /* Content */
    $mail->isHTML(true);
    $mail->Subject = 'New Inquiry: ' . $name . ' — ' . ($service ?: 'General');
    $mail->Body    = $html_body;
    $mail->AltBody = $text_body;

    $mail->send();

    redirect_with(
        'success',
        'Thank you, ' . $name . '! Your message has been sent. We\'ll be in touch within one business day.'
    );

} catch (Exception $e) {

    /* Log the lead so it's never lost */
    $log_entry = date('Y-m-d H:i:s') . ' | ' . $name . ' | ' . $phone . ' | ' . $email
               . ' | ' . $service . ' | MAILER_ERROR: ' . $mail->ErrorInfo . "\n";
    @file_put_contents(__DIR__ . '/contact_log.txt', $log_entry, FILE_APPEND | LOCK_EX);

    redirect_with(
        'error',
        'Your message could not be delivered. Please call us directly at 717-467-1712 or 717-515-1504.'
    );
}
