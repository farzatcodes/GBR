import { cookies } from 'next/headers';
import { NextResponse } from 'next/server';
import nodemailer from 'nodemailer';
import fs from 'fs';
import path from 'path';
import { NAP } from '@/lib/site';

const RATE_LIMIT_SECONDS = 60;

const SOLICITATION_PHRASES = [
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

function clean(value) {
  return String(value ?? '')
    .trim()
    .replace(/<[^>]*>/g, '')
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;')
    .replace(/'/g, '&#039;');
}

function appendLog(filename, line) {
  try {
    fs.appendFileSync(path.join(process.cwd(), filename), line, { flag: 'a' });
  } catch {
    /* logging is best-effort, matches PHP's @file_put_contents */
  }
}

function getClientIp(request) {
  const forwarded = request.headers.get('x-forwarded-for');
  return forwarded ? forwarded.split(',')[0].trim() : 'unknown';
}

function buildEmailHtml({ name, phone, email, service, address, source, message, submitted, ip }) {
  return `<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"></head>
<body style="margin:0;padding:0;background:#f4f4f4;font-family:Arial,sans-serif;">
<table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f4f4;padding:30px 0;">
<tr><td align="center">
<table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:8px;overflow:hidden;box-shadow:0 2px 12px rgba(0,0,0,.08);">

  <tr>
    <td style="background:#1F1F1F;padding:24px 32px;border-bottom:4px solid #FC0D15;">
      <img src="https://lightsonpa.com/assets/images/logo.svg" alt="GBR Electrical Services, LLC" width="160" style="display:block;max-width:160px;">
    </td>
  </tr>

  <tr>
    <td style="background:#FC0D15;padding:12px 32px;">
      <p style="margin:0;font-size:13px;font-weight:700;color:#ffffff;letter-spacing:1px;text-transform:uppercase;">
        &#9889; New Website Inquiry
      </p>
    </td>
  </tr>

  <tr>
    <td style="padding:28px 32px;">

      <p style="margin:0 0 20px;font-size:22px;font-weight:700;color:#1F1F1F;">
        You have a new message from <span style="color:#FC0D15;">${name}</span>
      </p>

      <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;margin-bottom:24px;">
        <tr style="background:#f9f9f9;">
          <td style="padding:10px 14px;font-size:12px;font-weight:700;color:#8A8A8A;text-transform:uppercase;letter-spacing:.6px;width:140px;border-bottom:1px solid #eeeeee;">Name</td>
          <td style="padding:10px 14px;font-size:14px;color:#1F1F1F;border-bottom:1px solid #eeeeee;">${name}</td>
        </tr>
        <tr>
          <td style="padding:10px 14px;font-size:12px;font-weight:700;color:#8A8A8A;text-transform:uppercase;letter-spacing:.6px;border-bottom:1px solid #eeeeee;">Phone</td>
          <td style="padding:10px 14px;font-size:14px;color:#1F1F1F;font-weight:700;border-bottom:1px solid #eeeeee;"><a href="tel:${phone}" style="color:#FC0D15;text-decoration:none;">${phone}</a></td>
        </tr>
        <tr style="background:#f9f9f9;">
          <td style="padding:10px 14px;font-size:12px;font-weight:700;color:#8A8A8A;text-transform:uppercase;letter-spacing:.6px;border-bottom:1px solid #eeeeee;">Email</td>
          <td style="padding:10px 14px;font-size:14px;color:#1F1F1F;border-bottom:1px solid #eeeeee;">
            ${email}
          </td>
        </tr>
        <tr>
          <td style="padding:10px 14px;font-size:12px;font-weight:700;color:#8A8A8A;text-transform:uppercase;letter-spacing:.6px;border-bottom:1px solid #eeeeee;">Service</td>
          <td style="padding:10px 14px;font-size:14px;color:#1F1F1F;border-bottom:1px solid #eeeeee;">${service}</td>
        </tr>
        <tr style="background:#f9f9f9;">
          <td style="padding:10px 14px;font-size:12px;font-weight:700;color:#8A8A8A;text-transform:uppercase;letter-spacing:.6px;border-bottom:1px solid #eeeeee;">Address</td>
          <td style="padding:10px 14px;font-size:14px;color:#1F1F1F;border-bottom:1px solid #eeeeee;">${address}</td>
        </tr>
        <tr>
          <td style="padding:10px 14px;font-size:12px;font-weight:700;color:#8A8A8A;text-transform:uppercase;letter-spacing:.6px;">Referral</td>
          <td style="padding:10px 14px;font-size:14px;color:#1F1F1F;">${source}</td>
        </tr>
      </table>

      <p style="margin:0 0 8px;font-size:12px;font-weight:700;color:#8A8A8A;text-transform:uppercase;letter-spacing:.6px;">Message</p>
      <div style="background:#f9f9f9;border-left:4px solid #FC0D15;padding:16px 20px;border-radius:0 6px 6px 0;margin-bottom:24px;">
        <p style="margin:0;font-size:14px;color:#333333;line-height:1.7;">${message}</p>
      </div>

      <table cellpadding="0" cellspacing="0">
        <tr>
          <td style="background:#FC0D15;border-radius:6px;padding:0;">
            <a href="tel:${phone}" style="display:inline-block;padding:12px 28px;font-size:14px;font-weight:700;color:#ffffff;text-decoration:none;letter-spacing:.5px;">
              &#128222;&nbsp; Call ${name} Back
            </a>
          </td>
        </tr>
      </table>

    </td>
  </tr>

  <tr>
    <td style="background:#1F1F1F;padding:16px 32px;">
      <p style="margin:0;font-size:11px;color:#8A8A8A;">
        Submitted ${submitted} &bull; IP: ${ip} &bull; lightsonpa.com
      </p>
    </td>
  </tr>

</table>
</td></tr>
</table>
</body>
</html>`;
}

function buildEmailText({ name, phone, email, service, address, source, message, submitted, ip }) {
  return [
    'GBR ELECTRICAL SERVICES — NEW CONTACT FORM SUBMISSION',
    '='.repeat(54),
    '',
    `Name:    ${name}`,
    `Phone:   ${phone}`,
    `Email:   ${email || '(not provided)'}`,
    `Service: ${service || '(not selected)'}`,
    `Address: ${address || '(not provided)'}`,
    `Source:  ${source || '(not provided)'}`,
    '',
    'MESSAGE:',
    '-'.repeat(40),
    message,
    '-'.repeat(40),
    '',
    `Submitted: ${submitted}`,
    `IP: ${ip}`,
  ].join('\r\n');
}

export async function POST(request) {
  const body = await request.json().catch(() => ({}));

  if (body.website) {
    return NextResponse.json({
      status: 'success',
      message: 'Thank you! We will be in touch shortly.',
    });
  }

  const cookieStore = cookies();
  const now = Math.floor(Date.now() / 1000);
  const lastSubmit = cookieStore.get('last_contact_submit')?.value;
  if (lastSubmit && now - Number(lastSubmit) < RATE_LIMIT_SECONDS) {
    return NextResponse.json({
      status: 'error',
      message: 'Please wait a moment before submitting again.',
    });
  }

  const name = clean(body.name);
  const phone = clean(body.phone);
  const email = clean(body.email);
  const message = clean(body.message);
  const service = clean(body.service);
  const address = clean(body.address);
  const source = clean(body.source);

  const errors = [];
  if (name.length < 2) errors.push('Please enter your full name.');
  if (!/[\d\s\-()+.]{7,20}/.test(phone)) errors.push('Please enter a valid phone number.');
  if (email !== '' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) errors.push('Please enter a valid email address.');
  if (message.length < 10) errors.push('Please enter a message with at least 10 characters.');

  if (errors.length > 0) {
    return NextResponse.json({ status: 'error', message: errors.join(' ') });
  }

  function withRateLimitCookie(payload) {
    const res = NextResponse.json(payload);
    res.cookies.set('last_contact_submit', String(now), {
      httpOnly: true,
      sameSite: 'lax',
      maxAge: RATE_LIMIT_SECONDS,
      path: '/',
    });
    return res;
  }

  const haystack = `${name} ${message}`.toLowerCase();
  const isSolicitation = SOLICITATION_PHRASES.some((phrase) => haystack.includes(phrase));

  const successMessage = `Thank you, ${name}! Your message has been sent. We'll be in touch within one business day.`;

  if (isSolicitation) {
    appendLog(
      'spam_log.txt',
      `${new Date().toISOString()} | ${name} | ${phone} | ${email} | FILTERED (solicitation): ${message.slice(0, 200)}\n`
    );
    return withRateLimitCookie({ status: 'success', message: successMessage });
  }

  if (!process.env.SMTP_USER || !process.env.SMTP_PASS) {
    appendLog('contact_log.txt', `${new Date().toISOString()} | ${name} | ${phone} | ${email} | ${service}\n`);
    return withRateLimitCookie({
      status: 'error',
      message: `Mail system not configured yet. Please call us at ${NAP.phoneOffice}.`,
    });
  }

  const submitted = new Date().toLocaleString('en-US', {
    dateStyle: 'long',
    timeStyle: 'short',
    timeZone: 'America/New_York',
  });
  const ip = getClientIp(request);
  const fields = { name, phone, email, service, address, source, message, submitted, ip };

  try {
    const secure = process.env.SMTP_SECURE === 'ssl';
    const transporter = nodemailer.createTransport({
      host: process.env.SMTP_HOST || 'mail.spaceship.com',
      port: Number(process.env.SMTP_PORT || 587),
      secure,
      requireTLS: !secure,
      auth: {
        user: process.env.SMTP_USER,
        pass: process.env.SMTP_PASS,
      },
    });

    await transporter.sendMail({
      from: `"${process.env.MAIL_FROM_NAME || 'GBR Electrical Services'}" <${process.env.MAIL_FROM || 'info@lightsonpa.com'}>`,
      to: process.env.MAIL_TO || 'info@lightsonpa.com',
      replyTo: email ? `"${name}" <${email}>` : undefined,
      subject: `New Inquiry: ${name} — ${service || 'General'}`,
      html: buildEmailHtml(fields),
      text: buildEmailText(fields),
    });

    return withRateLimitCookie({ status: 'success', message: successMessage });
  } catch (err) {
    appendLog(
      'contact_log.txt',
      `${new Date().toISOString()} | ${name} | ${phone} | ${email} | ${service} | MAILER_ERROR: ${err.message}\n`
    );
    return withRateLimitCookie({
      status: 'error',
      message: `Your message could not be delivered. Please call us directly at ${NAP.phoneOffice} or ${NAP.phoneCell}.`,
    });
  }
}
