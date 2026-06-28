import { findImage } from '@/lib/images';
import { buildMetadata } from '@/lib/site';
import BreadcrumbSchema from '@/components/BreadcrumbSchema';
import Breadcrumbs from '@/components/Breadcrumbs';

export const metadata = buildMetadata({
  title: 'Electrical Services in PA | York County & Dover Electrician',
  description:
    'Electrical services in PA from GBR Electrical Services LLC — repairs, panel upgrades, Kohler generator installation, wiring, lighting, and commercial electrical serving Dover, PA, York County, and Central Pennsylvania.',
  path: '/services.php',
});

const BREADCRUMBS = [
  { name: 'Home', url: '/index.php' },
  { name: 'Services' },
];

/* All six service sections — DRY data definition */
const SERVICE_SECTIONS = [
  {
    id: 'repairs',
    icon: 'fas fa-screwdriver-wrench',
    heading: 'Electrical Repairs',
    sub: 'Fast, Reliable Fixes for Any Electrical Problem',
    intro:
      'Electrical issues range from minor inconveniences to serious fire hazards. GBR Electrical diagnoses and repairs problems accurately the first time, using quality materials and code-compliant methods.',
    bullets: [
      'Faulty outlets, switches, and receptacles',
      'GFCI and AFCI breaker replacement',
      'Overloaded or tripping circuit breakers',
      'Flickering or dimming lights',
      'Damaged wiring repair and replacement',
      'Smoke detector installation and testing',
      'Whole-house surge protector installation',
    ],
    cta: 'Schedule a Repair',
  },
  {
    id: 'panel',
    icon: 'fas fa-solar-panel',
    heading: 'Panel Upgrades',
    sub: 'Modern, Safe Electrical Panel Services',
    intro:
      "An outdated or undersized panel is a safety risk and limits your home's capability. Whether you're adding square footage, installing an EV charger, or replacing an old Federal Pacific panel, GBR handles the full upgrade.",
    bullets: [
      '100A, 200A, and 400A service upgrades',
      'Federal Pacific and Zinsco panel replacement',
      'Subpanel installation for additions and garages',
      'Meter base upgrades coordinated with PPL/utility',
      'Load calculation and circuit mapping',
      'AFCI and GFCI breaker protection upgrades',
      'EV charger circuit and panel capacity review',
    ],
    cta: 'Get a Panel Quote',
  },
  {
    id: 'generator',
    icon: 'fas fa-plug-circle-bolt',
    heading: 'Generator Installation',
    sub: 'Kohler Authorized Dealer & Whole-Home Generator Specialist',
    intro:
      "As a Kohler authorized dealer and installer, GBR Electrical is York County's one-stop shop for whole-home backup power. We manage your complete project — site assessment, load calculation, permitting, installation, transfer switch wiring, startup, warranty registration, and ongoing maintenance programs.",
    bullets: [
      'Whole-home automatic standby generator installation',
      'Kohler 8kW–150kW generator sizing and selection',
      'Automatic transfer switch (ATS) installation',
      'Natural gas and propane fuel line coordination',
      'Generator pad and outdoor enclosure setup',
      'System commissioning, load testing, and startup',
      'Annual maintenance & service programs available',
      'Oil/filter change, load bank testing, safety inspection',
      'Generator maintenance plans — ask us for details',
      'Portable generator interlock kits',
    ],
    cta: 'Request Generator Quote',
  },
  {
    id: 'wiring',
    icon: 'fas fa-lightbulb',
    heading: 'Wiring & Lighting',
    sub: 'New Construction, Remodels, and Lighting Upgrades',
    intro:
      "Whether you're building new, finishing a basement, or upgrading to energy-efficient LED fixtures, GBR delivers clean, professional wiring and lighting installations tailored to your project.",
    bullets: [
      'New construction rough-in and trim-out wiring',
      'Basement and garage finishing electrical',
      'Recessed LED can light installation',
      'Ceiling fan and light fixture installation',
      'Under-cabinet and accent lighting',
      'Outdoor landscape and security lighting',
      'Kitchen and bathroom remodel wiring',
      'Smart home device and dimmer installation',
    ],
    cta: 'Start Your Lighting Project',
  },
  {
    id: 'troubleshooting',
    icon: 'fas fa-magnifying-glass-chart',
    heading: 'Troubleshooting',
    sub: 'Root-Cause Electrical Diagnostics',
    intro:
      'Strange smells, nuisance tripping, or lights that flicker without explanation? These symptoms often point to underlying issues that worsen over time. GBR uses systematic methods to find the real cause and fix it permanently.',
    bullets: [
      'Repeated or nuisance circuit breaker tripping',
      'Flickering or dimming lights under load',
      'Burning smell from outlets or panel',
      'Hot outlets or switch plates',
      'Partial power loss to circuits',
      'Intermittent outlet or switch failures',
      'Ground fault and arc fault diagnostics',
      'Post-storm electrical inspection and assessment',
    ],
    cta: 'Get Electrical Diagnostics',
  },
  {
    id: 'commercial',
    icon: 'fas fa-building',
    heading: 'Residential & Commercial',
    sub: 'Full-Service for Homes and Businesses',
    intro:
      'GBR Electrical works for both homeowners and business owners. We understand the different code requirements and load demands of commercial projects, and we deliver the same quality on every job.',
    bullets: [
      'Single-family and multi-unit residential electrical',
      'Retail, office, and light-commercial electrical',
      'Commercial panel upgrades and service entrance',
      'Three-phase service and equipment connections',
      'Tenant fit-out and renovation wiring',
      'Outdoor signage and parking lot lighting',
      'Emergency lighting and exit sign installation',
      'Annual electrical inspection services',
    ],
    cta: 'Talk to Us About Your Project',
  },
];

export default function ServicesPage() {
  const heroServices = findImage('/assets/images/hero-services.webp', '/assets/images/hero-services.jpg');

  return (
    <>
      <BreadcrumbSchema items={BREADCRUMBS} />

      {/* ================================================================
          PAGE HERO
          ================================================================ */}
      <section className="relative bg-navy overflow-hidden dot-grid py-20 md:py-24" aria-label="Services page hero">
        {heroServices && (
          <div className="absolute inset-0" aria-hidden="true">
            <img
              src={heroServices}
              alt=""
              className="w-full h-full object-cover object-center"
              loading="eager"
              width="1920"
              height="1080"
            />
            <div className="absolute inset-0 bg-navy/80"></div>
          </div>
        )}

        <div className="absolute inset-y-0 left-0 w-1 bg-power-red" aria-hidden="true"></div>

        <div className="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
          <Breadcrumbs items={BREADCRUMBS} />

          <div className="flex flex-wrap items-center gap-3 mb-4">
            <div className="h-px w-10 bg-power-red flex-shrink-0" aria-hidden="true"></div>
            <span className="font-heading text-power-red text-sm tracking-widest uppercase">Licensed Electrical Contractor</span>
            <span className="inline-flex items-center gap-1.5 bg-power-red/15 border border-power-red/35 px-3 py-1 rounded-lg text-power-red font-heading text-xs tracking-widest uppercase">
              <i className="fas fa-certificate" aria-hidden="true"></i> Kohler Authorized Dealer #1506430
            </span>
          </div>
          <h1 className="font-heading text-white text-5xl sm:text-6xl uppercase tracking-tight mb-4">
            Our <span className="text-power-red">Electrical</span> Services
          </h1>
          <p className="text-silver/80 text-lg max-w-2xl leading-relaxed">
            From quick repairs to full-scale Kohler generator installations — safe, code-compliant work for homes and businesses across York County, PA. Military &amp; First Responder discounts available.
          </p>
        </div>

        <div className="absolute bottom-0 inset-x-0 pointer-events-none" aria-hidden="true">
          <svg viewBox="0 0 1440 50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" className="w-full block" style={{ height: '50px' }}>
            <polygon points="0,50 1440,0 1440,50" fill="white" />
          </svg>
        </div>
      </section>

      {/* ================================================================
          SERVICE ANCHOR NAV
          ================================================================ */}
      <nav className="bg-white py-8 border-b border-gray-100 sticky top-[76px] z-40 shadow-sm" aria-label="Jump to service">
        <div className="max-w-7xl mx-auto px-4 sm:px-6">
          <div className="flex flex-wrap justify-center gap-2.5">
            {SERVICE_SECTIONS.map((s) => (
              <a
                key={s.id}
                href={`#${s.id}`}
                className="font-heading text-xs tracking-widest uppercase px-4 min-h-[40px] flex items-center
                       border border-power-red/30 text-power-red hover:bg-power-red hover:text-white
                       transition-all duration-200 cursor-pointer rounded-lg"
              >
                {s.heading}
              </a>
            ))}
          </div>
        </div>
      </nav>

      {/* ================================================================
          INDIVIDUAL SERVICE SECTIONS
          ================================================================ */}
      {SERVICE_SECTIONS.map((sec, idx) => {
        const bg = idx % 2 === 0 ? 'bg-white' : 'bg-silver-lt';
        return (
          <section key={sec.id} className={`${bg} py-20`} id={sec.id} aria-labelledby={`svc-${sec.id}`}>
            <div className="max-w-7xl mx-auto px-4 sm:px-6">
              <div className="grid lg:grid-cols-2 gap-14 items-start">

                {/* Content */}
                <div>
                  <div className="flex items-start gap-4 mb-6">
                    <div className="w-14 h-14 bg-power-red/10 flex items-center justify-center flex-shrink-0 mt-1 rounded-xl">
                      <i className={`${sec.icon} text-power-red text-2xl`} aria-hidden="true"></i>
                    </div>
                    <div>
                      <h2 id={`svc-${sec.id}`} className="font-heading text-navy text-3xl sm:text-4xl uppercase tracking-tight leading-none mb-1">
                        {sec.heading}
                      </h2>
                      <p className="text-power-red font-heading text-sm tracking-wider uppercase">{sec.sub}</p>
                    </div>
                  </div>

                  <p className="text-gray-600 leading-relaxed mb-7 text-base">{sec.intro}</p>

                  <ul className="space-y-2.5 mb-8" role="list">
                    {sec.bullets.map((b) => (
                      <li key={b} className="flex items-start gap-3 text-gray-700 text-sm">
                        <span className="w-5 h-5 bg-power-red flex items-center justify-center flex-shrink-0 mt-0.5" aria-hidden="true">
                          <i className="fas fa-check text-white text-[10px]"></i>
                        </span>
                        {b}
                      </li>
                    ))}
                  </ul>

                  <div className="flex flex-wrap gap-3">
                    <a href={`/contact.php?service=${encodeURIComponent(sec.heading)}`} className="btn-red">
                      <i className="fas fa-wrench" aria-hidden="true"></i> {sec.cta}
                    </a>
                    {sec.id === 'generator' && (
                      <a href="/generator-maintenance-plans.php" className="btn-outline-red">
                        <i className="fas fa-list-check" aria-hidden="true"></i> View Maintenance Plans &amp; Pricing
                      </a>
                    )}
                  </div>
                </div>

                {/* Sticky sidebar card */}
                <div className="lg:sticky lg:top-36 self-start">
                  <div className="bg-navy p-8 relative overflow-hidden rounded-xl">
                    <div className="absolute top-0 inset-x-0 h-1 bg-power-red rounded-t-xl" aria-hidden="true"></div>

                    <div className="flex flex-col items-center text-center py-6">
                      <div className="w-20 h-20 bg-power-red/15 flex items-center justify-center mb-5 rounded-xl">
                        <i className={`${sec.icon} text-power-red text-4xl`} aria-hidden="true"></i>
                      </div>
                      <h3 className="font-heading text-white text-xl uppercase tracking-wide mb-2">{sec.heading}</h3>
                      <p className="text-steel text-sm leading-relaxed max-w-[240px]">{sec.sub}</p>
                    </div>

                    <div className="border-t border-white/10 pt-6 space-y-3">
                      <p className="text-center text-steel text-xs uppercase tracking-widest font-heading mb-3">Free Estimate</p>
                      <a
                        href="tel:7174671712"
                        className="flex items-center justify-center gap-2 bg-power-red hover:bg-power-red-dk
                               transition-colors text-white font-heading text-sm tracking-widest uppercase
                               min-h-[44px] py-3 cursor-pointer rounded-lg"
                      >
                        <i className="fas fa-phone" aria-hidden="true"></i> 717-467-1712
                      </a>
                      <a
                        href="/contact.php"
                        className="flex items-center justify-center gap-2 border border-white/20 hover:border-white/40
                               hover:bg-white/5 transition-all text-silver font-heading text-sm tracking-widest
                               uppercase min-h-[44px] py-3 cursor-pointer rounded-lg"
                      >
                        <i className="fas fa-envelope" aria-hidden="true"></i> Send a Message
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </section>
        );
      })}

      {/* ================================================================
          BOTTOM CTA
          ================================================================ */}
      <section className="bg-navy py-16 dot-grid" aria-label="Request an estimate">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 text-center">
          <p className="font-heading text-power-red text-sm tracking-widest uppercase mb-3">Ready to Work Together?</p>
          <h2 className="font-heading text-white text-4xl sm:text-5xl uppercase tracking-tight mb-4">
            Request Your Free Estimate
          </h2>
          <p className="text-silver/80 mb-4 max-w-xl mx-auto">
            No pressure, no obligation. Describe your project and we&apos;ll get back to you promptly with honest pricing.
          </p>
          <p className="text-silver/60 text-sm mb-10">
            <i className="fas fa-medal text-power-red mr-1.5" aria-hidden="true"></i>
            Military &amp; First Responder discounts available — mention it when you reach out!
          </p>
          <div className="flex flex-wrap justify-center gap-4">
            <a href="/contact.php" className="btn-red">
              <i className="fas fa-paper-plane" aria-hidden="true"></i> Contact Us
            </a>
            <a href="tel:7174671712" className="btn-outline-white">
              <i className="fas fa-phone" aria-hidden="true"></i> 717-467-1712
            </a>
          </div>
        </div>
      </section>
    </>
  );
}
