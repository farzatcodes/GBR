import { buildMetadata } from '@/lib/site';
import BreadcrumbSchema from '@/components/BreadcrumbSchema';
import Breadcrumbs from '@/components/Breadcrumbs';
import ArticleSchema from '@/components/ArticleSchema';
import FaqSchema from '@/components/FaqSchema';

export const metadata = buildMetadata({
  title: 'EV Charger Installation in PA — Home Charger Wiring & Panel Upgrades',
  description:
    'EV charger installation in Dover, PA and York County from GBR Electrical Services, LLC — dedicated circuit wiring, panel capacity review, and permitting for Level 2 home EV chargers.',
  path: '/ev-charger-installation-pennsylvania.php',
  ogType: 'article',
});

const ARTICLE_DATE = '2026-06-28';

const BREADCRUMBS = [
  { name: 'Home', url: '/index.php' },
  { name: 'Articles', url: '/blog.php' },
  { name: 'EV Charger Installation' },
];

const TOC = [
  ['#involved', "What's Involved in Installing a Home EV Charger"],
  ['#capacity', 'Does Your Panel Have Capacity?'],
  ['#permits', 'Permits in Pennsylvania'],
  ['#process', "GBR's Installation Process"],
  ['#generator', 'Pairing an EV Charger With a Backup Generator'],
  ['#faq', 'Frequently Asked Questions'],
];

const FAQS = [
  {
    q: 'Do I need a panel upgrade to install a home EV charger?',
    a: "Not always. It depends on your panel's existing capacity and current electrical load. A 200A panel with moderate existing load often has room for a dedicated EV circuit; an older 100A panel already running close to capacity usually needs an upgrade first. A load calculation during the site visit determines which situation applies to your home.",
  },
  {
    q: 'Does GBR Electrical install Level 2 home EV chargers?',
    a: 'Yes. GBR Electrical installs dedicated circuits for Level 2 home EV chargers, including panel capacity review, breaker and wiring sizing, and permitting, for homes throughout Dover, PA and York County.',
  },
  {
    q: 'Do I need a permit to install an EV charger in Pennsylvania?',
    a: 'Most PA municipalities require an electrical permit for a new dedicated circuit, including EV charger installations. Requirements vary by township, so GBR handles permitting as part of the installation rather than leaving it for the homeowner to track down.',
  },
  {
    q: 'Can I add an EV charger and a backup generator to the same panel?',
    a: 'Yes, with a proper load calculation accounting for both. This is one of the most common reasons York County homeowners upgrade an older panel — adding either a generator transfer switch or an EV charger circuit can be the point where existing capacity runs out, and planning for both at once avoids a second project later.',
  },
];

const SVC_LINKS = [
  ['Panel Upgrades', '/services.php#panel'],
  ['Generator Installation', '/services.php#generator'],
  ['Generator Maintenance', '/generator-maintenance-plans.php'],
  ['Electrical Repairs', '/services.php#repairs'],
  ['Wiring & Lighting', '/services.php#wiring'],
  ['Troubleshooting', '/services.php#troubleshooting'],
];

export default function EvChargerArticle() {
  return (
    <>
      <BreadcrumbSchema items={BREADCRUMBS} />
      <ArticleSchema
        headline="EV Charger Installation in PA — What Homeowners Need to Know About Panel Capacity, Permits, and Wiring"
        description={metadata.description}
        path="/ev-charger-installation-pennsylvania.php"
        datePublished={ARTICLE_DATE}
      />
      <FaqSchema items={FAQS} />

      <section className="relative bg-navy overflow-hidden dot-grid py-20 md:py-24" aria-label="Article hero">
        <div className="absolute inset-y-0 left-0 w-1 bg-power-red" aria-hidden="true"></div>

        <div className="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
          <Breadcrumbs items={BREADCRUMBS} />

          <div className="flex flex-wrap items-center gap-3 mb-4">
            <div className="h-px w-10 bg-power-red flex-shrink-0" aria-hidden="true"></div>
            <span className="font-heading text-power-red text-sm tracking-widest uppercase">
              Licensed Electrical Contractor
            </span>
          </div>

          <h1 className="font-heading text-white text-4xl sm:text-5xl xl:text-6xl uppercase tracking-tight mb-6 max-w-4xl leading-tight">
            EV Charger Installation in <span className="text-power-red">PA</span> — Panel Capacity, Permits &amp; Wiring
          </h1>

          <div className="flex flex-wrap items-center gap-5 text-steel text-sm">
            <span className="flex items-center gap-2">
              <i className="fas fa-building text-power-red" aria-hidden="true"></i>GBR Electrical Services, LLC
            </span>
            <span className="flex items-center gap-2">
              <i className="fas fa-calendar text-power-red" aria-hidden="true"></i>June 28, 2026
            </span>
            <span className="flex items-center gap-2">
              <i className="fas fa-clock text-power-red" aria-hidden="true"></i>7 min read
            </span>
            <span className="flex items-center gap-2">
              <i className="fas fa-map-marker-alt text-power-red" aria-hidden="true"></i>Dover, PA — York County
            </span>
          </div>
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

      <div className="bg-white py-16">
        <div className="max-w-7xl mx-auto px-4 sm:px-6">
          <div className="grid lg:grid-cols-3 gap-12">
            <article className="lg:col-span-2" aria-label="Article content">
              <div className="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
                <p>
                  A standard wall outlet can charge an EV, but slowly — most homeowners switching to an electric
                  vehicle want a <strong>Level 2 home charger</strong>, which charges several times faster and
                  requires its own dedicated 240-volt circuit. Whether your home can support that circuit without
                  further work depends entirely on your existing electrical panel: its total capacity, what&apos;s
                  already running on it, and how much room is left.
                </p>
                <p>
                  GBR Electrical Services, LLC installs dedicated EV charger circuits for homes throughout Dover, PA
                  and York County, starting with a panel capacity review rather than assuming any panel can simply
                  absorb another large circuit.
                </p>
              </div>

              <div className="bg-silver-lt border border-gray-200 rounded-xl p-6 mb-10">
                <h2 className="font-heading text-navy text-lg uppercase tracking-wide mb-4">In This Article</h2>
                <ol className="space-y-2 text-sm">
                  {TOC.map(([anchor, label], i) => (
                    <li key={anchor}>
                      <a href={anchor} className="flex items-start gap-2 text-power-red hover:underline cursor-pointer">
                        <span className="font-heading font-bold flex-shrink-0">{i + 1}.</span>
                        {label}
                      </a>
                    </li>
                  ))}
                </ol>
              </div>

              <h2 id="involved" className="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">
                What&apos;s Involved in Installing a Home EV Charger
              </h2>
              <div className="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
                <p>
                  A Level 2 EV charger install centers on running a dedicated 240-volt circuit from your panel to the
                  charger location — typically the garage or driveway — sized to the charger manufacturer&apos;s
                  specifications, on its own breaker. The work includes confirming available panel capacity, running
                  the wiring, installing the breaker and either a hardwired connection or a NEMA outlet depending on
                  the charger, and verifying the installation against code before it&apos;s energized.
                </p>
                <p>
                  The part homeowners often don&apos;t anticipate is how much the answer depends on the panel itself,
                  not just the charger. A charger purchase is straightforward; the electrical work behind it
                  isn&apos;t always.
                </p>
              </div>

              <h2 id="capacity" className="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">
                Does Your Panel Have Capacity?
              </h2>
              <div className="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
                <p>
                  Every panel has a maximum amperage rating, and every circuit already wired into it — HVAC, range,
                  dryer, sump pump, and the rest — draws a share of that capacity. Adding a 40–50 amp EV circuit on
                  top of an already-loaded 100A panel often isn&apos;t possible without an upgrade. A panel that&apos;s
                  200A with moderate existing load frequently has the headroom already.
                </p>
                <p>
                  This is why GBR starts with a load calculation rather than quoting a charger install sight-unseen.
                  If the panel has room, the EV circuit is a contained, predictable job. If it doesn&apos;t, a panel
                  upgrade becomes part of the same conversation — better to know that up front than after a charger
                  is already purchased.
                </p>
              </div>

              <h2 id="permits" className="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">
                Permits in Pennsylvania
              </h2>
              <div className="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
                <p>
                  Most Pennsylvania municipalities require an electrical permit for a new dedicated circuit, and EV
                  charger circuits aren&apos;t an exception. Exact requirements vary by township, which is part of
                  why DIY or unpermitted EV charger installs are a bad idea even when the wiring itself isn&apos;t
                  complicated — an unpermitted installation can complicate an insurance claim or a future home sale.
                  GBR handles permitting as part of the installation rather than leaving it for the homeowner to
                  research township by township.
                </p>
              </div>

              <h2 id="process" className="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">
                GBR&apos;s Installation Process
              </h2>
              <div className="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
                <p>
                  The process starts with a free consultation and load calculation at your home. From there, GBR
                  provides an itemized estimate that&apos;s clear about whether a panel upgrade is needed, handles
                  permitting with your local municipality, runs the dedicated circuit and installs the breaker, and
                  tests the completed circuit before the charger goes live. The same team that reviews your panel
                  handles the installation — no handoff between an estimator and a separate install crew.
                </p>
              </div>

              <h2 id="generator" className="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">
                Pairing an EV Charger With a Backup Generator
              </h2>
              <div className="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
                <p>
                  Homeowners planning both an EV charger and a{' '}
                  <a href="/services.php#generator" className="text-power-red hover:underline font-semibold">
                    whole-home backup generator
                  </a>{' '}
                  should plan them together rather than as two separate projects months apart. Both add meaningful
                  load to a panel, and a single load calculation that accounts for both avoids paying for a panel
                  upgrade twice. As an{' '}
                  <a href="/kohler-generator-dealer-pennsylvania.php" className="text-power-red hover:underline font-semibold">
                    authorized Kohler generator dealer
                  </a>
                  , GBR can size a system that accounts for an EV charger already on the panel, or vice versa.
                </p>
              </div>

              <div className="bg-power-red-dk rounded-xl p-8 text-center mb-10">
                <h3 className="font-heading text-white text-2xl uppercase tracking-wide mb-3">
                  Get a Free EV Charger Installation Quote
                </h3>
                <p className="text-red-100 text-sm mb-6">Panel capacity review included. No pressure, honest pricing.</p>
                <div className="flex flex-wrap justify-center gap-4">
                  <a
                    href="/contact.php?service=EV+Charger+Installation"
                    className="inline-flex items-center gap-2 bg-white text-power-red-dk font-heading text-sm uppercase tracking-widest px-6 min-h-[44px] py-3 hover:bg-silver-lt transition-colors rounded-lg cursor-pointer"
                  >
                    <i className="fas fa-calendar-check" aria-hidden="true"></i> Schedule Consultation
                  </a>
                  <a
                    href="tel:7174671712"
                    className="inline-flex items-center gap-2 border-2 border-white text-white font-heading text-sm uppercase tracking-widest px-6 min-h-[44px] py-3 hover:bg-white/10 transition-colors rounded-lg cursor-pointer"
                  >
                    <i className="fas fa-phone" aria-hidden="true"></i> 717-467-1712
                  </a>
                </div>
              </div>

              <div className="border border-gray-200 rounded-xl p-7 bg-silver-lt">
                <div className="flex items-start gap-5">
                  <div className="w-14 h-14 bg-power-red/10 flex items-center justify-center rounded-xl flex-shrink-0">
                    <i className="fas fa-plug-circle-bolt text-power-red text-2xl" aria-hidden="true"></i>
                  </div>
                  <div>
                    <h3 className="font-heading text-navy text-xl uppercase tracking-wide mb-2">
                      About GBR Electrical Services, LLC
                    </h3>
                    <address className="not-italic text-gray-600 text-sm leading-relaxed space-y-1">
                      <p>
                        Licensed electrical contractor and authorized Kohler generator dealer serving Dover, PA and
                        all of York County for over 40 years. Military &amp; First Responder discounts available.
                      </p>
                      <p className="mt-3">
                        <strong className="text-navy">GBR Electrical Services, LLC</strong>
                        <br />
                        5605 Fish and Game Road, Dover, PA 17315
                        <br />
                        <a href="tel:7174671712" className="text-power-red hover:underline">
                          717-467-1712
                        </a>{' '}
                        (Office) &nbsp;|&nbsp;{' '}
                        <a href="tel:7175151504" className="text-power-red hover:underline">
                          717-515-1504
                        </a>{' '}
                        (Cell/Emergency)
                        <br />
                        <a href="mailto:info@lightsonpa.com" className="text-power-red hover:underline">
                          info@lightsonpa.com
                        </a>
                      </p>
                    </address>
                  </div>
                </div>
              </div>

              <div id="faq" className="mt-10">
                <h2 className="font-heading text-navy text-3xl uppercase tracking-tight mb-6">
                  Frequently Asked Questions
                </h2>
                <div className="space-y-4">
                  {FAQS.map((item) => (
                    <div key={item.q} className="border border-gray-200 rounded-xl p-6">
                      <h3 className="font-heading text-navy text-base uppercase tracking-wide mb-2">{item.q}</h3>
                      <p className="text-gray-600 text-sm leading-relaxed">{item.a}</p>
                    </div>
                  ))}
                </div>
              </div>

              <div className="mt-10">
                <h3 className="font-heading text-navy text-2xl uppercase tracking-wide mb-5">Related Articles</h3>
                <div className="grid sm:grid-cols-2 gap-4">
                  <a
                    href="/panel-upgrade-older-homes-pa.php"
                    className="block border border-gray-200 rounded-xl p-5 hover:border-power-red/50 hover:bg-silver-lt transition-all cursor-pointer"
                  >
                    <div className="font-heading text-power-red text-xs tracking-widest uppercase mb-2">
                      Panel Upgrades
                    </div>
                    <div className="font-heading text-navy text-base uppercase leading-snug">
                      Electrical Panel Upgrades for Older Homes in PA — Warning Signs &amp; Insurance
                    </div>
                  </a>
                  <a
                    href="/kohler-generator-dealer-pennsylvania.php"
                    className="block border border-gray-200 rounded-xl p-5 hover:border-power-red/50 hover:bg-silver-lt transition-all cursor-pointer"
                  >
                    <div className="font-heading text-power-red text-xs tracking-widest uppercase mb-2">
                      Kohler Generators
                    </div>
                    <div className="font-heading text-navy text-base uppercase leading-snug">
                      Kohler Generator Dealer in PA — What Homeowners Should Know
                    </div>
                  </a>
                  <a
                    href="/electrical-services-pennsylvania.php"
                    className="block border border-gray-200 rounded-xl p-5 hover:border-power-red/50 hover:bg-silver-lt transition-all cursor-pointer"
                  >
                    <div className="font-heading text-power-red text-xs tracking-widest uppercase mb-2">
                      Electrical Services
                    </div>
                    <div className="font-heading text-navy text-base uppercase leading-snug">
                      Electrical Services in Pennsylvania — Full Resource Guide
                    </div>
                  </a>
                </div>
              </div>
            </article>

            <aside className="lg:col-span-1" aria-label="Sidebar">
              <div className="lg:sticky lg:top-36 space-y-5">
                <div className="bg-navy rounded-xl p-7 relative overflow-hidden">
                  <div className="absolute top-0 inset-x-0 h-1 bg-power-red rounded-t-xl" aria-hidden="true"></div>
                  <div className="w-14 h-14 bg-power-red/15 flex items-center justify-center rounded-xl mb-5">
                    <i className="fas fa-plug-circle-bolt text-power-red text-2xl" aria-hidden="true"></i>
                  </div>
                  <h3 className="font-heading text-white text-xl uppercase tracking-wide mb-1">
                    EV Charger Installation
                  </h3>
                  <p className="text-power-red font-heading text-xs tracking-widest uppercase mb-3">
                    Panel Review Included
                  </p>
                  <p className="text-steel text-sm leading-relaxed mb-5">
                    Dedicated circuit wiring, panel capacity review, and permitting for Level 2 home EV chargers.
                  </p>
                  <a
                    href="/contact.php?service=EV+Charger+Installation"
                    className="btn-red w-full justify-center text-sm mb-3"
                  >
                    <i className="fas fa-plug-circle-bolt" aria-hidden="true"></i> Get a Free Quote
                  </a>
                  <a
                    href="tel:7174671712"
                    className="flex items-center justify-center gap-2 border border-white/20 hover:border-white/40 hover:bg-white/5 transition-all text-silver font-heading text-sm tracking-widest uppercase min-h-[44px] py-3 cursor-pointer rounded-lg"
                  >
                    <i className="fas fa-phone" aria-hidden="true"></i> 717-467-1712
                  </a>
                </div>

                <div className="border border-gray-200 rounded-xl p-6 bg-silver-lt">
                  <h3 className="font-heading text-navy text-base uppercase tracking-wide mb-4">
                    Contact GBR Electrical
                  </h3>
                  <address className="not-italic space-y-3 text-sm">
                    <div className="flex items-start gap-3">
                      <i className="fas fa-map-marker-alt text-power-red mt-0.5 flex-shrink-0 w-4" aria-hidden="true"></i>
                      <span className="text-gray-600">
                        5605 Fish and Game Road
                        <br />
                        Dover, PA 17315
                      </span>
                    </div>
                    <div className="flex items-center gap-3">
                      <i className="fas fa-phone text-power-red flex-shrink-0 w-4" aria-hidden="true"></i>
                      <a href="tel:7174671712" className="text-power-red hover:underline font-semibold">
                        717-467-1712
                      </a>
                    </div>
                    <div className="flex items-center gap-3">
                      <i className="fas fa-mobile-alt text-power-red flex-shrink-0 w-4" aria-hidden="true"></i>
                      <a href="tel:7175151504" className="text-power-red hover:underline">
                        717-515-1504
                      </a>
                    </div>
                    <div className="flex items-center gap-3">
                      <i className="fas fa-globe text-power-red flex-shrink-0 w-4" aria-hidden="true"></i>
                      <a href="https://lightsonpa.com" className="text-power-red hover:underline">
                        lightsonpa.com
                      </a>
                    </div>
                  </address>
                </div>

                <div className="border border-gray-200 rounded-xl p-6">
                  <h3 className="font-heading text-navy text-base uppercase tracking-wide mb-4">Our Services</h3>
                  <ul className="space-y-2 text-sm">
                    {SVC_LINKS.map(([label, href]) => (
                      <li key={label}>
                        <a href={href} className="flex items-center gap-2 text-gray-600 hover:text-power-red transition-colors cursor-pointer">
                          <i className="fas fa-chevron-right text-power-red text-[10px] flex-shrink-0" aria-hidden="true"></i>
                          {label}
                        </a>
                      </li>
                    ))}
                  </ul>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </>
  );
}
