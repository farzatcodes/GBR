<?php
/**
 * GBR Electrical Services, LLC — Contact Form Processor
 *
 * Validates the POST from contact.php, sends an email notification,
 * then redirects back to contact.php with a status query string.
 *
 * NOTE: PHP's built-in mail() requires the server to have a working
 * mail transport (sendmail/SMTP). If your host doesn't support it,
 * replace the mail() call below with PHPMailer or a transactional
 * API (SendGrid, Mailgun, etc.).
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


/* ================================================================
   SPAM / HONEYPOT CHECK
   ================================================================ */

/* If the hidden "website" field is filled in, it's almost certainly a bot */
if (!empty($_POST['website'])) {
    redirect_with('success', 'Thank you! We will be in touch shortly.');
}


/* ================================================================
   RATE LIMIT (session-based, basic protection)
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

/* Name */
$name = clean($_POST['name'] ?? '');
if (strlen($name) < 2) {
    $errors[] = 'Please enter your full name.';
}

/* Phone */
$phone = clean($_POST['phone'] ?? '');
if (!preg_match('/[\d\s\-\(\)\+\.]{7,20}/', $phone)) {
    $errors[] = 'Please enter a valid phone number.';
}

/* Email (optional but validated if provided) */
$email = clean($_POST['email'] ?? '');
if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

/* Message */
$message = clean($_POST['message'] ?? '');
if (strlen($message) < 10) {
    $errors[] = 'Please enter a message with at least 10 characters.';
}

/* Optional fields */
$service = clean($_POST['service']  ?? '');
$address = clean($_POST['address']  ?? '');
$source  = clean($_POST['source']   ?? '');

/* If validation failed, redirect with generic error */
if (!empty($errors)) {
    redirect_with('error', implode(' ', $errors));
}


/* ================================================================
   BUILD EMAIL
   ================================================================ */

$to      = 'info@lightsonpa.com';
$subject = 'New Website Inquiry from ' . $name;

/* Plain-text body */
$body_lines = [
    'GBR ELECTRICAL SERVICES — NEW CONTACT FORM SUBMISSION',
    str_repeat('=', 54),
    '',
    'Name:            ' . $name,
    'Phone:           ' . $phone,
    'Email:           ' . ($email ?: '(not provided)'),
    'Service Type:    ' . ($service ?: '(not selected)'),
    'Service Address: ' . ($address ?: '(not provided)'),
    'Referral Source: ' . ($source  ?: '(not provided)'),
    '',
    'MESSAGE:',
    str_repeat('-', 40),
    $message,
    str_repeat('-', 40),
    '',
    'Submitted: ' . date('Y-m-d H:i:s T'),
    'IP Address: ' . ($_SERVER['REMOTE_ADDR'] ?? 'unknown'),
    '',
    'Reply directly to this email or call: ' . $phone,
];

$body = implode("\r\n", $body_lines);

/* Headers — set Reply-To as customer's email if provided */
$reply_to = $email ?: $to;
$headers  = implode("\r\n", [
    'From: GBR Electrical Website <no-reply@gbrelectricalservices.com>',
    'Reply-To: ' . $name . ' <' . $reply_to . '>',
    'X-Mailer: PHP/' . PHP_VERSION,
    'Content-Type: text/plain; charset=UTF-8',
]);


/* ================================================================
   SEND EMAIL
   ================================================================ */

$sent = @mail($to, $subject, $body, $headers);

if ($sent) {
    redirect_with(
        'success',
        'Thank you, ' . $name . '! Your message has been sent. We\'ll be in touch within one business day.'
    );
} else {
    /*
     * mail() failed — possibly no MTA configured on this server.
     * Log the submission so no lead is lost, then inform the user.
     */
    $log_entry = date('Y-m-d H:i:s') . ' | ' . $name . ' | ' . $phone . ' | ' . $email . ' | ' . $service . "\n";
    @file_put_contents(__DIR__ . '/contact_log.txt', $log_entry, FILE_APPEND | LOCK_EX);

    redirect_with(
        'error',
        'Your message could not be delivered automatically. Please call us directly at 717-292-1338 or 717-515-1504.'
    );
}
