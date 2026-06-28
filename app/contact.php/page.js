import { buildMetadata, NAP } from '@/lib/site';
import { findImage } from '@/lib/images';
import BreadcrumbSchema from '@/components/BreadcrumbSchema';
import Breadcrumbs from '@/components/Breadcrumbs';
import ContactForm from '@/components/ContactForm';

export const metadata = buildMetadata({
  title: 'Contact Us – Free Estimate',
  description:
    'Contact GBR Electrical Services LLC in Dover, PA. Request a free estimate for electrical repairs, panel upgrades, or Kohler generator installation. Call 717-467-1712 or send a message.',
  path: '/contact.php',
});

const BREADCRUMBS = [
  { name: 'Home', url: '/index.php' },
  { name: 'Contact' },
];

const HOURS = [
  ['Mon – Fri', '7:00 AM – 6:00 PM'],
  ['Saturday', 'By Appointment'],
  ['Sunday', 'Emergency Only'],
];

export default function ContactPage({ searchParams }) {
  const heroBg = findImage('/assets/images/hero-contact.jpg');
  const preselectService = searchParams?.service || '';

  return (
    <>
      <BreadcrumbSchema items={BREADCRUMBS} />

      <section className="relative bg-navy overflow-hidden dot-grid py-20 md:py-24" aria-label="Contact page hero">
        {heroBg && (
          <div className="absolute inset-0" aria-hidden="true">
            <img
              src={heroBg}
              alt=""
              className="w-full h-full object-cover object-center"
              loading="eager"
              width={1920}
              height={1080}
            />
            <div className="absolute inset-0 bg-navy/80"></div>
          </div>
        )}

        <div className="absolute inset-y-0 left-0 w-1 bg-power-red" aria-hidden="true"></div>

        <div className="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
          <Breadcrumbs items={BREADCRUMBS} />

          <div className="flex items-center gap-3 mb-4">
            <div className="h-px w-10 bg-power-red flex-shrink-0" aria-hidden="true"></div>
            <span className="font-heading text-power-red text-sm tracking-widest uppercase">Get in Touch</span>
          </div>
          <h1 className="font-heading text-white text-5xl sm:text-6xl uppercase tracking-tight mb-4">
            Contact <span className="text-power-red">GBR</span> Electrical
          </h1>
          <p className="text-silver/80 text-lg max-w-2xl leading-relaxed">
            Request a free estimate, ask a question, or schedule service. We respond promptly — usually within one
            business day.
          </p>
        </div>

        <div className="absolute bottom-0 inset-x-0 pointer-events-none" aria-hidden="true">
          <svg
            viewBox="0 0 1440 50"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            className="w-full block"
            style={{ height: '50px' }}
          >
            <polygon points="0,50 1440,0 1440,50" fill="white" />
          </svg>
        </div>
      </section>

      <section className="bg-white py-16 md:py-20" aria-labelledby="contact-form-heading">
        <div className="max-w-7xl mx-auto px-4 sm:px-6">
          <div className="grid lg:grid-cols-3 gap-12 lg:gap-16">
            <div className="lg:col-span-2" id="form">
              <p className="font-heading text-power-red text-sm tracking-widest uppercase mb-2">Free Estimate</p>
              <h2
                id="contact-form-heading"
                className="font-heading text-navy text-4xl uppercase tracking-tight mb-2 title-accent"
              >
                Send Us a Message
              </h2>
              <p className="text-gray-500 text-sm mt-5 mb-8 leading-relaxed">
                Fill out the form and we&apos;ll get back to you within one business day. For urgent or emergency
                needs, please call us directly.
              </p>

              <ContactForm preselectService={preselectService} />
            </div>

            <aside className="lg:col-span-1 space-y-6" aria-label="Contact information and hours">
              <div className="bg-navy p-7 relative overflow-hidden">
                <div className="absolute top-0 inset-x-0 h-1 bg-power-red" aria-hidden="true"></div>

                <h3 className="font-heading text-white text-xl uppercase tracking-wide mb-6">Contact Information</h3>

                <address className="not-italic space-y-5 text-sm">
                  <div className="flex items-start gap-4">
                    <div className="w-9 h-9 bg-power-red/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                      <i className="fas fa-map-marker-alt text-power-red text-sm" aria-hidden="true"></i>
                    </div>
                    <div>
                      <div className="font-heading text-silver text-xs tracking-widest uppercase mb-1">Address</div>
                      <p className="text-steel leading-snug">
                        {NAP.street}
                        <br />
                        {NAP.city}, {NAP.state} {NAP.zip}
                      </p>
                    </div>
                  </div>
                  <div className="flex items-start gap-4">
                    <div className="w-9 h-9 bg-power-red/20 flex items-center justify-center flex-shrink-0">
                      <i className="fas fa-phone text-power-red text-sm" aria-hidden="true"></i>
                    </div>
                    <div>
                      <div className="font-heading text-silver text-xs tracking-widest uppercase mb-1">Office</div>
                      <a
                        href={`tel:${NAP.phoneOfficeTel}`}
                        className="text-silver hover:text-white transition-colors font-heading text-lg tracking-wide cursor-pointer"
                      >
                        {NAP.phoneOffice}
                      </a>
                    </div>
                  </div>
                  <div className="flex items-start gap-4">
                    <div className="w-9 h-9 bg-power-red/20 flex items-center justify-center flex-shrink-0">
                      <i className="fas fa-mobile-alt text-power-red text-sm" aria-hidden="true"></i>
                    </div>
                    <div>
                      <div className="font-heading text-silver text-xs tracking-widest uppercase mb-1">
                        Cell / Emergency
                      </div>
                      <a
                        href={`tel:${NAP.phoneCellTel}`}
                        className="text-silver hover:text-white transition-colors font-heading text-lg tracking-wide cursor-pointer"
                      >
                        {NAP.phoneCell}
                      </a>
                    </div>
                  </div>
                  <div className="flex items-start gap-4">
                    <div className="w-9 h-9 bg-power-red/20 flex items-center justify-center flex-shrink-0">
                      <i className="fas fa-envelope text-power-red text-sm" aria-hidden="true"></i>
                    </div>
                    <div>
                      <div className="font-heading text-silver text-xs tracking-widest uppercase mb-1">Email</div>
                      <a
                        href={`mailto:${NAP.email}`}
                        className="text-steel hover:text-white transition-colors break-all text-xs leading-snug cursor-pointer"
                      >
                        {NAP.email}
                      </a>
                    </div>
                  </div>
                </address>

                <div className="mt-6 pt-6 border-t border-white/10">
                  <div className="font-heading text-silver text-xs tracking-widest uppercase mb-2">Service Area</div>
                  <p className="text-steel text-sm leading-relaxed">
                    Dover, York, Spring Grove, Red Lion, Shrewsbury, Gettysburg, and throughout York County, PA.
                  </p>
                </div>
              </div>

              <div className="bg-silver-lt border border-gray-200 p-6">
                <h3 className="font-heading text-navy text-lg uppercase tracking-wide mb-4 flex items-center gap-2">
                  <i className="fas fa-clock text-power-red" aria-hidden="true"></i> Business Hours
                </h3>
                <dl className="space-y-0 text-sm divide-y divide-gray-200">
                  {HOURS.map(([day, time]) => (
                    <div key={day} className="flex justify-between items-center py-2.5">
                      <dt className="text-gray-700">{day}</dt>
                      <dd className="font-medium text-navy">{time}</dd>
                    </div>
                  ))}
                </dl>
                <div className="mt-4 bg-power-red/8 border border-power-red/20 p-3 flex items-start gap-2.5 text-sm">
                  <i className="fas fa-circle-exclamation text-power-red flex-shrink-0 mt-0.5" aria-hidden="true"></i>
                  <span className="text-gray-700 text-xs leading-snug">
                    Emergency service outside business hours — call{' '}
                    <a
                      href={`tel:${NAP.phoneCellTel}`}
                      className="text-power-red font-semibold hover:underline cursor-pointer"
                    >
                      {NAP.phoneCell}
                    </a>
                    .
                  </span>
                </div>
              </div>

              <div className="bg-power-red-dk p-6 text-center">
                <i className="fas fa-phone text-white/70 text-3xl mb-3 block" aria-hidden="true"></i>
                <div className="font-heading text-white text-lg uppercase tracking-wide mb-1">Prefer to Call?</div>
                <p className="text-red-100 text-sm mb-4">Skip the form — we love talking with customers directly.</p>
                <a
                  href={`tel:${NAP.phoneOfficeTel}`}
                  className="block bg-white text-power-red font-heading text-base tracking-widest
                             uppercase px-5 min-h-[44px] flex items-center justify-center
                             hover:bg-silver-lt transition-colors mb-2 cursor-pointer rounded-lg"
                >
                  <i className="fas fa-phone mr-2" aria-hidden="true"></i> {NAP.phoneOffice}
                </a>
                <a
                  href={`tel:${NAP.phoneCellTel}`}
                  className="block border border-white/40 text-white font-heading text-sm tracking-widest
                             uppercase px-5 min-h-[44px] flex items-center justify-center
                             hover:bg-white/10 transition-colors cursor-pointer rounded-lg"
                >
                  <i className="fas fa-mobile-alt mr-2" aria-hidden="true"></i> {NAP.phoneCell}
                </a>
              </div>
            </aside>
          </div>
        </div>
      </section>

      <section className="bg-silver-lt py-12" aria-label="Our location">
        <div className="max-w-7xl mx-auto px-4 sm:px-6">
          <div className="bg-navy-mid border border-white/10 flex flex-col items-center justify-center py-14 text-center relative overflow-hidden dot-grid">
            <div className="relative z-10">
              <i className="fas fa-map-location-dot text-power-red text-5xl mb-5" aria-hidden="true"></i>
              <h3 className="font-heading text-white text-2xl uppercase tracking-wide mb-2">Find Us in Dover, PA</h3>
              <p className="text-steel mb-5">
                {NAP.street}, {NAP.city}, {NAP.state} {NAP.zip}
              </p>
              <a
                href="https://maps.google.com/?q=5605+Fish+and+Game+Road+Dover+PA+17315"
                target="_blank"
                rel="noopener noreferrer"
                className="btn-red text-sm py-2.5 px-6 min-h-[44px]"
              >
                <i className="fas fa-directions" aria-hidden="true"></i> Get Directions
              </a>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
