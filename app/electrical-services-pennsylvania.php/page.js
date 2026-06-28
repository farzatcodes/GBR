import { buildMetadata } from '@/lib/site';
import BreadcrumbSchema from '@/components/BreadcrumbSchema';
import Breadcrumbs from '@/components/Breadcrumbs';
import FaqSchema from '@/components/FaqSchema';

export const metadata = buildMetadata({
  title: 'Electrical Services in Pennsylvania',
  description:
    'A complete guide to electrical services in Pennsylvania from GBR Electrical Services, LLC — licensed electrician and authorized Kohler dealer serving Dover, PA, York County, and Central Pennsylvania.',
  path: '/electrical-services-pennsylvania.php',
});

const BREADCRUMBS = [
  { name: 'Home', url: '/index.php' },
  { name: 'Electrical Services Pennsylvania' },
];

const SERVICE_LINKS = [
  {
    icon: 'fas fa-screwdriver-wrench',
    heading: 'Electrical Repairs',
    desc: 'Fast, code-compliant repairs for outlets, switches, breakers, wiring, and flickering lights.',
    href: '/services.php#repairs',
  },
  {
    icon: 'fas fa-solar-panel',
    heading: 'Panel Upgrades',
    desc: '100A–400A service upgrades, Federal Pacific and Zinsco replacement, subpanels, and EV charger prep.',
    href: '/services.php#panel',
  },
  {
    icon: 'fas fa-plug-circle-bolt',
    heading: 'Generator Installation',
    desc: 'Authorized Kohler dealer — whole-home standby generator sizing, installation, and maintenance plans.',
    href: '/services.php#generator',
  },
  {
    icon: 'fas fa-lightbulb',
    heading: 'Wiring & Lighting',
    desc: 'New construction, remodels, recessed lighting, ceiling fans, and smart home device installation.',
    href: '/services.php#wiring',
  },
  {
    icon: 'fas fa-magnifying-glass-chart',
    heading: 'Troubleshooting',
    desc: 'Root-cause diagnostics for nuisance tripping, hot outlets, and intermittent power loss.',
    href: '/services.php#troubleshooting',
  },
  {
    icon: 'fas fa-building',
    heading: 'Residential & Commercial',
    desc: 'Full-service electrical for homes and businesses, including panel upgrades and tenant fit-outs.',
    href: '/services.php#commercial',
  },
];

const AREA_LINKS = [
  'Dover, PA', 'York, PA', 'Dillsburg, PA', 'Mechanicsburg, PA', 'Red Lion, PA',
  'Spring Grove, PA', 'Hanover, PA', 'Manchester, PA', 'New Cumberland, PA',
  'Lewisberry, PA', 'Wrightsville, PA', 'East Berlin, PA', 'Camp Hill, PA', 'Etters, PA',
];

const RESOURCE_LINKS = [
  {
    href: '/panel-upgrade-older-homes-pa.php',
    cat: 'Panel Upgrades',
    h2: 'Electrical Panel Upgrades for Older Homes in PA — Warning Signs & Insurance',
  },
  {
    href: '/ev-charger-installation-pennsylvania.php',
    cat: 'EV Charger Installation',
    h2: 'EV Charger Installation in PA — Panel Capacity, Permits & Wiring',
  },
  {
    href: '/kohler-generator-dealer-pennsylvania.php',
    cat: 'Kohler Generators',
    h2: 'Kohler Generator Dealer in PA — What Homeowners Should Know',
  },
  {
    href: '/kohler-generators-york-county-pa.php',
    cat: 'Kohler Generators',
    h2: 'Why GBR Electrical Recommends Kohler for Every York County Home',
  },
  {
    href: '/central-pa-whole-home-generators.php',
    cat: 'Generator Installation',
    h2: 'Why Central PA Homeowners Are Investing in Whole-Home Generators',
  },
  {
    href: '/power-outages-dover-pa-generators.php',
    cat: 'Outage Preparedness',
    h2: 'How Dover, PA Families Stay Prepared for Power Outages',
  },
];

const FAQS = [
  {
    q: 'What electrical services does GBR Electrical offer in Pennsylvania?',
    a: 'GBR Electrical provides electrical repairs, panel upgrades, Kohler generator installation and maintenance, wiring and lighting, troubleshooting and diagnostics, and residential and commercial electrical work across Dover, PA, York County, and Central Pennsylvania.',
  },
  {
    q: 'Is GBR Electrical a licensed electrical contractor in PA?',
    a: 'Yes. GBR Electrical Services, LLC is a licensed and insured electrical contractor based in Dover, PA, and is also an authorized Kohler generator dealer (Dealer #1506430).',
  },
  {
    q: 'What areas of Pennsylvania does GBR Electrical serve?',
    a: 'GBR Electrical primarily serves York County, PA, including Dover, York, Red Lion, Spring Grove, Hanover, Manchester, Dillsburg, Mechanicsburg, and the surrounding Central Pennsylvania region.',
  },
  {
    q: 'How do I request an estimate for electrical work in PA?',
    a: 'Call GBR Electrical at 717-467-1712 or fill out the contact form at lightsonpa.com/contact.php. Estimates are free with no obligation.',
  },
];

export default function ElectricalServicesGuide() {
  return (
    <>
      <BreadcrumbSchema items={BREADCRUMBS} />
      <FaqSchema items={FAQS} />

      <section className="relative bg-navy overflow-hidden dot-grid py-20 md:py-24" aria-label="Electrical services Pennsylvania hero">
        <div className="absolute inset-y-0 left-0 w-1 bg-power-red" aria-hidden="true"></div>

        <div className="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
          <Breadcrumbs items={BREADCRUMBS} />

          <div className="flex flex-wrap items-center gap-3 mb-4">
            <div className="h-px w-10 bg-power-red flex-shrink-0" aria-hidden="true"></div>
            <span className="font-heading text-power-red text-sm tracking-widest uppercase">
              Licensed Electrical Contractor
            </span>
            <span className="inline-flex items-center gap-1.5 bg-power-red/15 border border-power-red/35 px-3 py-1 rounded-lg text-power-red font-heading text-xs tracking-widest uppercase">
              <i className="fas fa-certificate" aria-hidden="true"></i> Kohler Authorized Dealer #1506430
            </span>
          </div>
          <h1 className="font-heading text-white text-5xl sm:text-6xl uppercase tracking-tight mb-4">
            Electrical Services in <span className="text-power-red">Pennsylvania</span>
          </h1>
          <p className="text-silver/80 text-lg max-w-2xl leading-relaxed">
            A complete guide to GBR Electrical&apos;s services, service area, and resources for homeowners and
            businesses across Dover, PA, York County, and Central Pennsylvania.
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

      <section className="bg-white py-20" aria-labelledby="services-heading">
        <div className="max-w-7xl mx-auto px-4 sm:px-6">
          <div className="text-center mb-14">
            <p className="font-heading text-power-red text-sm tracking-widest uppercase mb-3">What We Do</p>
            <h2 id="services-heading" className="font-heading text-navy text-3xl sm:text-4xl uppercase tracking-tight title-accent center">
              Electrical Services Across PA
            </h2>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {SERVICE_LINKS.map((s) => (
              <a key={s.heading} href={s.href} className="block bg-silver-lt border border-gray-200 rounded-xl p-7 card-lift cursor-pointer">
                <div className="w-14 h-14 bg-power-red/10 flex items-center justify-center rounded-xl mb-5">
                  <i className={`${s.icon} text-power-red text-2xl`} aria-hidden="true"></i>
                </div>
                <h3 className="font-heading text-navy text-xl uppercase tracking-wide mb-2">{s.heading}</h3>
                <p className="text-gray-600 text-sm leading-relaxed">{s.desc}</p>
              </a>
            ))}
          </div>
        </div>
      </section>

      <section className="bg-silver-lt py-20" aria-labelledby="guide-heading">
        <div className="max-w-3xl mx-auto px-4 sm:px-6">
          <div className="text-center mb-12">
            <p className="font-heading text-power-red text-sm tracking-widest uppercase mb-3">A Closer Look</p>
            <h2 id="guide-heading" className="font-heading text-navy text-3xl sm:text-4xl uppercase tracking-tight title-accent center">
              Understanding Electrical Services in Pennsylvania
            </h2>
          </div>

          <div className="space-y-8 text-gray-700 text-base leading-relaxed">
            <div>
              <h3 className="font-heading text-navy text-xl uppercase tracking-wide mb-2">
                What Do Electrical Services Cover?
              </h3>
              <p>
                &quot;Electrical services&quot; is an umbrella term covering several distinct categories of work:
                code-compliant <strong>repairs</strong> (outlets, switches, breakers, wiring faults),{' '}
                <strong>panel upgrades</strong> (increasing service capacity, replacing outdated equipment like
                Federal Pacific or Zinsco panels), <strong>backup power</strong> (whole-home standby generator
                sizing and installation), <strong>wiring and lighting</strong> (new circuits, fixtures, smart-home
                devices), and <strong>diagnostics</strong> (troubleshooting nuisance tripping or intermittent power
                loss). Residential and commercial work typically require different equipment ratings and code
                considerations, even when the underlying skill set overlaps.
              </p>
            </div>

            <div>
              <h3 className="font-heading text-navy text-xl uppercase tracking-wide mb-2">
                Does Pennsylvania Require a State Electrician License?
              </h3>
              <p>
                No. Pennsylvania is one of the few states with no statewide electrician licensing requirement.
                Licensing, where it exists, is handled at the municipal level — for example, Philadelphia and
                Pittsburgh issue their own electrical licenses, but most of the Commonwealth, including York
                County, does not. What Pennsylvania <em>does</em> require statewide is Home Improvement Contractor
                (HIC) registration through the Attorney General&apos;s Bureau of Consumer Protection for any
                contractor performing more than a small amount of home improvement work per year. Because
                there&apos;s no trade license to check, homeowners should verify a contractor&apos;s general
                liability insurance, HIC registration, and — for generator work specifically — manufacturer dealer
                certification (which requires factory training Pennsylvania&apos;s licensing system doesn&apos;t
                independently verify).
              </p>
            </div>

            <div>
              <h3 className="font-heading text-navy text-xl uppercase tracking-wide mb-2">
                How to Vet an Electrical Contractor in PA
              </h3>
              <ul className="list-disc pl-5 space-y-1.5">
                <li>Confirm general liability insurance and ask to see proof, not just a verbal claim.</li>
                <li>Check HIC registration status with the PA Attorney General&apos;s office.</li>
                <li>
                  For generator installation, confirm authorized dealer status directly with the manufacturer —
                  dealer numbers (e.g., Kohler Dealer #1506430) can be verified, anonymous &quot;we install all
                  brands&quot; claims cannot.
                </li>
                <li>Get a written estimate before work begins, not a verbal ballpark.</li>
                <li>
                  Ask how long the company has served your specific area — a long local track record means
                  permits, inspectors, and utility crews already know the contractor.
                </li>
              </ul>
            </div>

            <div>
              <h3 className="font-heading text-navy text-xl uppercase tracking-wide mb-2">
                Residential vs. Commercial Electrical Work
              </h3>
              <p>
                Residential electrical work generally involves 100–200 amp single-phase service, focused on
                comfort, safety, and code compliance for one household. Commercial work more often involves
                higher-capacity panels, three-phase power, tenant fit-outs, and compliance with stricter inspection
                schedules. A contractor experienced in both can move between a Dover homeowner&apos;s panel
                upgrade and a York County business&apos;s tenant electrical fit-out without treating either as an
                afterthought.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section className="bg-silver-lt py-16" aria-labelledby="area-heading">
        <div className="max-w-7xl mx-auto px-4 sm:px-6">
          <div className="text-center mb-10">
            <p className="font-heading text-power-red text-sm tracking-widest uppercase mb-3">Service Area</p>
            <h2 id="area-heading" className="font-heading text-navy text-3xl sm:text-4xl uppercase tracking-tight title-accent center">
              Serving Communities Across Central PA
            </h2>
          </div>
          <div className="flex flex-wrap justify-center gap-3 max-w-4xl mx-auto">
            {AREA_LINKS.map((area) => (
              <span key={area} className="bg-white border border-gray-200 rounded-lg px-4 py-2 text-navy text-sm font-heading tracking-wide uppercase">
                <i className="fas fa-location-dot text-power-red mr-1.5" aria-hidden="true"></i>
                {area}
              </span>
            ))}
          </div>
        </div>
      </section>

      <section className="bg-white py-20" aria-labelledby="resources-heading">
        <div className="max-w-7xl mx-auto px-4 sm:px-6">
          <div className="text-center mb-14">
            <p className="font-heading text-power-red text-sm tracking-widest uppercase mb-3">Learn More</p>
            <h2 id="resources-heading" className="font-heading text-navy text-3xl sm:text-4xl uppercase tracking-tight title-accent center">
              Resources &amp; Articles
            </h2>
          </div>
          <div className="grid sm:grid-cols-2 gap-6 max-w-4xl mx-auto">
            {RESOURCE_LINKS.map((r) => (
              <a key={r.href} href={r.href} className="block border border-gray-200 rounded-xl p-6 hover:border-power-red/50 hover:bg-silver-lt transition-all cursor-pointer">
                <div className="font-heading text-power-red text-xs tracking-widest uppercase mb-2">{r.cat}</div>
                <div className="font-heading text-navy text-base uppercase leading-snug">{r.h2}</div>
              </a>
            ))}
          </div>
          <div className="text-center mt-10">
            <a href="/blog.php" className="btn-outline-red">
              <i className="fas fa-book-open" aria-hidden="true"></i> View All Articles
            </a>
          </div>
        </div>
      </section>

      <section className="bg-silver-lt py-20" aria-labelledby="faq-heading">
        <div className="max-w-4xl mx-auto px-4 sm:px-6">
          <div className="text-center mb-12">
            <p className="font-heading text-power-red text-sm tracking-widest uppercase mb-3">Common Questions</p>
            <h2 id="faq-heading" className="font-heading text-navy text-3xl sm:text-4xl uppercase tracking-tight title-accent center">
              Frequently Asked Questions
            </h2>
          </div>
          <div className="space-y-4">
            {FAQS.map((item) => (
              <div key={item.q} className="bg-white border border-gray-200 rounded-xl p-6">
                <h3 className="font-heading text-navy text-base uppercase tracking-wide mb-2">{item.q}</h3>
                <p className="text-gray-600 text-sm leading-relaxed">{item.a}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      <section className="bg-navy py-16 dot-grid" aria-label="Request an estimate">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 text-center">
          <p className="font-heading text-power-red text-sm tracking-widest uppercase mb-3">Ready to Work Together?</p>
          <h2 className="font-heading text-white text-4xl sm:text-5xl uppercase tracking-tight mb-4">
            Request Your Free Estimate
          </h2>
          <p className="text-silver/80 mb-4 max-w-xl mx-auto">
            No pressure, no obligation. Describe your project and we&apos;ll get back to you promptly with honest
            pricing.
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
