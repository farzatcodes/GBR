'use client';

import { useState } from 'react';

const SERVICE_OPTS = [
  'Electrical Repairs',
  'Panel Upgrade',
  'Generator Installation (Kohler)',
  'Wiring & Lighting',
  'Troubleshooting / Diagnostics',
  'Commercial Electrical',
  'Residential Electrical',
  'Other / Not Listed',
];

const SOURCE_OPTS = [
  'Google Search',
  'Word of Mouth / Referral',
  'Facebook / Social Media',
  'Yard Sign or Truck',
  'Returning Customer',
  'Other',
];

export default function ContactForm({ preselectService = '' }) {
  const [submitting, setSubmitting] = useState(false);
  const [flash, setFlash] = useState(null);

  async function handleSubmit(e) {
    e.preventDefault();
    setSubmitting(true);
    setFlash(null);

    const form = e.currentTarget;
    const data = Object.fromEntries(new FormData(form).entries());

    try {
      const res = await fetch('/api/contact', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data),
      });
      const result = await res.json();
      setFlash(result);
      if (result.status === 'success') {
        form.reset();
      }
    } catch {
      setFlash({
        status: 'error',
        message: 'Your message could not be sent. Please call us at 717-467-1712.',
      });
    } finally {
      setSubmitting(false);
    }
  }

  return (
    <>
      {flash?.status === 'success' && (
        <div
          className="bg-green-50 border-l-4 border-green-500 p-4 mb-8 flex items-start gap-3"
          role="alert"
          aria-live="polite"
        >
          <i className="fas fa-circle-check text-green-600 mt-0.5 flex-shrink-0 text-lg" aria-hidden="true"></i>
          <div>
            <strong className="font-heading text-green-800 uppercase tracking-wide text-sm block mb-1">
              Message Sent!
            </strong>
            <p className="text-green-700 text-sm">{flash.message}</p>
          </div>
        </div>
      )}
      {flash?.status === 'error' && (
        <div
          className="bg-red-50 border-l-4 border-power-red p-4 mb-8 flex items-start gap-3"
          role="alert"
          aria-live="assertive"
        >
          <i className="fas fa-circle-exclamation text-power-red mt-0.5 flex-shrink-0 text-lg" aria-hidden="true"></i>
          <div>
            <strong className="font-heading text-red-800 uppercase tracking-wide text-sm block mb-1">
              Something Went Wrong
            </strong>
            <p className="text-red-700 text-sm">{flash.message}</p>
          </div>
        </div>
      )}

      <form onSubmit={handleSubmit} noValidate id="contact-form" aria-label="Contact and estimate request form">
        <div style={{ position: 'absolute', left: '-9999px', top: '-9999px' }} aria-hidden="true">
          <label htmlFor="hp-website">Leave this blank</label>
          <input type="text" id="hp-website" name="website" tabIndex={-1} autoComplete="off" />
        </div>

        <div className="space-y-6">
          <div className="grid sm:grid-cols-2 gap-5">
            <div>
              <label htmlFor="name" className="block font-heading text-navy text-xs tracking-widest uppercase mb-1.5">
                Full Name <span className="text-power-red" aria-label="required">*</span>
              </label>
              <input
                type="text"
                id="name"
                name="name"
                required
                maxLength={100}
                autoComplete="name"
                placeholder="John Smith"
                className="w-full border border-gray-300 px-4 text-sm text-gray-800
                           focus:outline-none focus:border-power-red focus:ring-1
                           focus:ring-power-red transition-colors bg-white"
                style={{ minHeight: '48px' }}
              />
              <p className="text-gray-400 text-xs mt-1">First and last name</p>
            </div>
            <div>
              <label htmlFor="phone" className="block font-heading text-navy text-xs tracking-widest uppercase mb-1.5">
                Phone Number <span className="text-power-red" aria-label="required">*</span>
              </label>
              <input
                type="tel"
                id="phone"
                name="phone"
                required
                maxLength={20}
                autoComplete="tel"
                placeholder="717-555-0100"
                className="w-full border border-gray-300 px-4 text-sm text-gray-800
                           focus:outline-none focus:border-power-red focus:ring-1
                           focus:ring-power-red transition-colors bg-white"
                style={{ minHeight: '48px' }}
              />
              <p className="text-gray-400 text-xs mt-1">Best number to reach you</p>
            </div>
          </div>

          <div>
            <label htmlFor="email" className="block font-heading text-navy text-xs tracking-widest uppercase mb-1.5">
              Email Address
            </label>
            <input
              type="email"
              id="email"
              name="email"
              maxLength={150}
              autoComplete="email"
              placeholder="john@example.com"
              className="w-full border border-gray-300 px-4 text-sm text-gray-800
                         focus:outline-none focus:border-power-red focus:ring-1
                         focus:ring-power-red transition-colors bg-white"
              style={{ minHeight: '48px' }}
            />
            <p className="text-gray-400 text-xs mt-1">Optional — we&apos;ll follow up by phone by default</p>
          </div>

          <div>
            <label htmlFor="service" className="block font-heading text-navy text-xs tracking-widest uppercase mb-1.5">
              Service Requested
            </label>
            <div className="relative">
              <select
                id="service"
                name="service"
                defaultValue={preselectService}
                className="w-full border border-gray-300 px-4 text-sm text-gray-800 bg-white
                           focus:outline-none focus:border-power-red focus:ring-1
                           focus:ring-power-red transition-colors appearance-none cursor-pointer"
                style={{ minHeight: '48px' }}
              >
                <option value="">— Select a service —</option>
                {SERVICE_OPTS.map((opt) => (
                  <option key={opt} value={opt}>
                    {opt}
                  </option>
                ))}
              </select>
              <i
                className="fas fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm pointer-events-none"
                aria-hidden="true"
              ></i>
            </div>
          </div>

          <div>
            <label htmlFor="address" className="block font-heading text-navy text-xs tracking-widest uppercase mb-1.5">
              Service Address or City
            </label>
            <input
              type="text"
              id="address"
              name="address"
              maxLength={200}
              autoComplete="street-address"
              placeholder="123 Main St, Dover PA  —or—  York, PA"
              className="w-full border border-gray-300 px-4 text-sm text-gray-800
                         focus:outline-none focus:border-power-red focus:ring-1
                         focus:ring-power-red transition-colors bg-white"
              style={{ minHeight: '48px' }}
            />
          </div>

          <div>
            <label htmlFor="message" className="block font-heading text-navy text-xs tracking-widest uppercase mb-1.5">
              Message / Project Details <span className="text-power-red" aria-label="required">*</span>
            </label>
            <textarea
              id="message"
              name="message"
              required
              minLength={10}
              maxLength={2000}
              rows={6}
              placeholder="Describe your project or issue. The more detail you share, the better we can help with your estimate."
              className="w-full border border-gray-300 px-4 py-3 text-sm text-gray-800
                         focus:outline-none focus:border-power-red focus:ring-1
                         focus:ring-power-red transition-colors resize-y bg-white"
            ></textarea>
            <p className="text-gray-400 text-xs mt-1">Min. 10 characters — be as specific as possible</p>
          </div>

          <div>
            <label htmlFor="source" className="block font-heading text-navy text-xs tracking-widest uppercase mb-1.5">
              How Did You Hear About Us?
            </label>
            <div className="relative">
              <select
                id="source"
                name="source"
                className="w-full border border-gray-300 px-4 text-sm text-gray-800 bg-white
                           focus:outline-none focus:border-power-red focus:ring-1
                           focus:ring-power-red transition-colors appearance-none cursor-pointer"
                style={{ minHeight: '48px' }}
              >
                <option value="">— Select one —</option>
                {SOURCE_OPTS.map((opt) => (
                  <option key={opt}>{opt}</option>
                ))}
              </select>
              <i
                className="fas fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm pointer-events-none"
                aria-hidden="true"
              ></i>
            </div>
          </div>

          <div className="pt-2">
            <button
              type="submit"
              id="submit-btn"
              disabled={submitting}
              className="btn-red w-full justify-center text-base"
              style={{ minHeight: '52px', opacity: submitting ? 0.75 : 1 }}
            >
              <i className={submitting ? 'fas fa-spinner fa-spin' : 'fas fa-paper-plane'} aria-hidden="true"></i>
              <span>{submitting ? 'Sending…' : 'Send Message'}</span>
            </button>
            <p className="text-steel-dark text-xs mt-3 text-center">
              We respond within one business day. Your info is never shared or sold.
            </p>
          </div>
        </div>
      </form>
    </>
  );
}
