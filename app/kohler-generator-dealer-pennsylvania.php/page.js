import { buildMetadata } from '@/lib/site';
import BreadcrumbSchema from '@/components/BreadcrumbSchema';
import Breadcrumbs from '@/components/Breadcrumbs';
import ArticleSchema from '@/components/ArticleSchema';
import FaqSchema from '@/components/FaqSchema';

export const metadata = buildMetadata({
  title: 'Kohler Generator Dealer in PA — Authorized Dealer #1506430',
  description:
    'Looking for an authorized Kohler generator dealer in PA? GBR Electrical Services, LLC (Dealer #1506430) provides factory-trained sales, installation, and service for Kohler standby generators across Central Pennsylvania.',
  path: '/kohler-generator-dealer-pennsylvania.php',
  ogType: 'article',
});

const ARTICLE_DATE = '2026-06-16';

const BREADCRUMBS = [
  { name: 'Home', url: '/index.php' },
  { name: 'Articles', url: '/blog.php' },
  { name: 'Kohler Dealer in PA' },
];

const TOC = [
  ['#authorized', 'What "Authorized Kohler Dealer" Actually Means'],
  ['#verify', 'How to Verify a Kohler Dealer in PA'],
  ['#gbr', 'GBR Electrical — Dealer #1506430'],
  ['#area', 'Service Area Across Central Pennsylvania'],
  ['#process', 'What Working With an Authorized Dealer Looks Like'],
  ['#faq', 'Frequently Asked Questions'],
];

const FAQS = [
  {
    q: 'Is there an authorized Kohler generator dealer in PA?',
    a: 'Yes. GBR Electrical Services, LLC is an authorized Kohler generator dealer (Dealer #1506430) based in Dover, PA, serving York County and Central Pennsylvania with factory-trained sales, installation, warranty registration, and maintenance for Kohler standby generators.',
  },
  {
    q: 'What does it mean to buy from an authorized Kohler dealer instead of a general contractor?',
    a: "Authorized Kohler dealers complete factory training, carry genuine Kohler parts, and have direct manufacturer support — which protects your warranty and ensures the system is sized, installed, and serviced correctly. A general contractor without dealer status may install Kohler equipment but won't have the same factory training, parts access, or warranty backing.",
  },
  {
    q: 'Does GBR Electrical install Kohler generators outside York County?',
    a: "GBR Electrical's primary service area is Dover, PA, York County, and the surrounding Central Pennsylvania region. Homeowners outside that footprint should call 717-467-1712 to confirm whether their location falls within GBR's current service radius.",
  },
  {
    q: "How do I verify a Kohler dealer's authorization number?",
    a: "Authorized Kohler dealers are issued a dealer number by Kohler Energy. GBR Electrical's dealer number is 1506430. You can ask any Kohler dealer for their dealer number and confirm authorized status directly with Kohler before signing a contract.",
  },
];

const SVC_LINKS = [
  ['Generator Installation', '/services.php#generator'],
  ['Generator Maintenance', '/generator-maintenance-plans.php'],
  ['Panel Upgrades', '/services.php#panel'],
  ['Electrical Repairs', '/services.php#repairs'],
  ['Wiring & Lighting', '/services.php#wiring'],
  ['Troubleshooting', '/services.php#troubleshooting'],
];

export default function KohlerDealerArticle() {
  return (
    <>
      <BreadcrumbSchema items={BREADCRUMBS} />
      <ArticleSchema
        headline="Kohler Generator Dealer in PA — What to Look For and Why GBR Electrical Is Authorized Dealer #1506430"
        description={metadata.description}
        path="/kohler-generator-dealer-pennsylvania.php"
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
              Authorized Kohler Dealer
            </span>
            <span className="inline-flex items-center gap-1.5 bg-power-red/15 border border-power-red/35 px-3 py-1 rounded-lg text-power-red font-heading text-xs tracking-widest uppercase">
              <i className="fas fa-certificate" aria-hidden="true"></i> Dealer #1506430
            </span>
          </div>

          <h1 className="font-heading text-white text-4xl sm:text-5xl xl:text-6xl uppercase tracking-tight mb-6 max-w-4xl leading-tight">
            Kohler Generator Dealer in <span className="text-power-red">PA</span> — What Homeowners Should Know
          </h1>

          <div className="flex flex-wrap items-center gap-5 text-steel text-sm">
            <span className="flex items-center gap-2">
              <i className="fas fa-building text-power-red" aria-hidden="true"></i>GBR Electrical Services, LLC
            </span>
            <span className="flex items-center gap-2">
              <i className="fas fa-calendar text-power-red" aria-hidden="true"></i>June 16, 2026
            </span>
            <span className="flex items-center gap-2">
              <i className="fas fa-clock text-power-red" aria-hidden="true"></i>7 min read
            </span>
            <span className="flex items-center gap-2">
              <i className="fas fa-map-marker-alt text-power-red" aria-hidden="true"></i>Dover, PA — Central
              Pennsylvania
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
                  Pennsylvania homeowners researching whole-home backup power quickly run into the same question:{' '}
                  <strong>who is an actual authorized Kohler generator dealer in PA</strong>, versus a general
                  contractor who simply installs Kohler equipment without dealer status? The distinction matters more
                  than most people realize — it affects training, parts access, warranty support, and ultimately how
                  reliable your system will be ten years from now.
                </p>
                <p>
                  GBR Electrical Services, LLC is an authorized Kohler generator dealer — <strong>Dealer #1506430</strong>{' '}
                  — based in Dover, PA, and serving York County and the surrounding Central Pennsylvania region. This
                  guide explains what authorized dealer status actually means, what to verify before hiring anyone for
                  a Kohler installation in PA, and how GBR&apos;s process works from first call to startup.
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

              <h2 id="authorized" className="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">
                What &quot;Authorized Kohler Dealer&quot; Actually Means
              </h2>
              <div className="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
                <p>
                  Kohler doesn&apos;t hand dealer status to anyone who wants to sell its generators. Authorized
                  dealers complete factory training on the full residential generator lineup, maintain direct access
                  to genuine Kohler parts, and are held to manufacturer standards for installation and service
                  quality. In exchange, Kohler assigns each authorized dealer a dealer number — a verifiable
                  credential that a contractor either has or doesn&apos;t.
                </p>
                <p>
                  This matters in PA specifically because the state has no shortage of electricians and contractors
                  willing to install a generator they bought from a supply house. That equipment may run fine on day
                  one. The difference shows up later — in warranty claims that get denied because the installer
                  wasn&apos;t authorized, in parts delays because the contractor doesn&apos;t have a direct supply
                  relationship, and in service calls handled by someone unfamiliar with the specific unit.
                </p>
              </div>

              <h2 id="verify" className="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">
                How to Verify a Kohler Dealer in PA
              </h2>
              <div className="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
                <p>
                  Before signing a contract for a Kohler standby generator in Pennsylvania, ask straightforward
                  questions: What&apos;s your Kohler dealer number? How long have you held authorized status? Do you
                  stock genuine Kohler parts, or order through a third party? A legitimate authorized dealer will
                  answer immediately and specifically — not with a vague reference to &quot;factory-trained
                  technicians&quot; without a number to back it up.
                </p>
                <p>
                  GBR Electrical&apos;s dealer number, <strong>1506430</strong>, is listed throughout this site and is
                  available on request for direct verification with Kohler.
                </p>
              </div>

              <h2 id="gbr" className="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">
                GBR Electrical — Dealer #1506430
              </h2>
              <div className="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
                <p>
                  GBR Electrical Services, LLC has built its generator business around the Kohler authorized dealer
                  relationship rather than treating it as a side offering. That means full project ownership: site
                  assessment, load calculation, permitting, installation, transfer switch wiring, system
                  commissioning, warranty registration, and ongoing maintenance — all handled by the same
                  factory-trained team, not handed off between subcontractors.
                </p>
                <p>
                  GBR also offers tiered{' '}
                  <a href="/generator-maintenance-plans.php" className="text-power-red hover:underline font-semibold">
                    generator maintenance plans
                  </a>{' '}
                  for homeowners who want their Kohler system serviced on schedule by the dealer that installed it,
                  rather than a third party unfamiliar with the original installation.
                </p>
              </div>

              <h2 id="area" className="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">
                Service Area Across Central Pennsylvania
              </h2>
              <div className="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
                <p>
                  GBR Electrical is based at 5605 Fish and Game Road, Dover, PA, and serves York County and the
                  surrounding Central Pennsylvania region, including Dover, York, Dillsburg, Mechanicsburg, Red Lion,
                  Spring Grove, Hanover, Manchester, New Cumberland, Lewisberry, Wrightsville, East Berlin, and Camp
                  Hill. Homeowners elsewhere in Pennsylvania are welcome to call 717-467-1712 to confirm whether their
                  location falls within GBR&apos;s current service radius before scheduling a consultation.
                </p>
              </div>

              <h2 id="process" className="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">
                What Working With an Authorized Dealer Looks Like
              </h2>
              <div className="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
                <p>
                  The process starts with a free, no-pressure consultation and load assessment at your home. From
                  there, GBR provides a clear, itemized estimate, handles permitting and utility coordination,
                  completes the installation and transfer switch wiring, and commissions the system with a full load
                  test before walking you through how it operates. Warranty registration is completed as part of the
                  installation — not left for the homeowner to track down later.
                </p>
              </div>

              <div className="bg-power-red-dk rounded-xl p-8 text-center mb-10">
                <h3 className="font-heading text-white text-2xl uppercase tracking-wide mb-3">
                  Get Your Free Kohler Quote
                </h3>
                <p className="text-red-100 text-sm mb-6">
                  GBR Electrical — Authorized Kohler Dealer #1506430. No pressure, honest pricing.
                </p>
                <div className="flex flex-wrap justify-center gap-4">
                  <a
                    href="/contact.php?service=Generator+Installation+(Kohler)"
                    className="inline-flex items-center gap-2 bg-white text-power-red font-heading text-sm uppercase tracking-widest px-6 min-h-[44px] py-3 hover:bg-silver-lt transition-colors rounded-lg cursor-pointer"
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
                    <i className="fas fa-certificate text-power-red text-2xl" aria-hidden="true"></i>
                  </div>
                  <div>
                    <h3 className="font-heading text-navy text-xl uppercase tracking-wide mb-2">
                      About GBR Electrical Services, LLC
                    </h3>
                    <address className="not-italic text-gray-600 text-sm leading-relaxed space-y-1">
                      <p>
                        Authorized Kohler generator dealer and licensed electrical contractor serving Dover, PA and
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
                    href="/kohler-generators-york-county-pa.php"
                    className="block border border-gray-200 rounded-xl p-5 hover:border-power-red/50 hover:bg-silver-lt transition-all cursor-pointer"
                  >
                    <div className="font-heading text-power-red text-xs tracking-widest uppercase mb-2">
                      Kohler Generators
                    </div>
                    <div className="font-heading text-navy text-base uppercase leading-snug">
                      Why GBR Electrical Recommends Kohler for Every York County Home
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
                    <i className="fas fa-certificate text-power-red text-2xl" aria-hidden="true"></i>
                  </div>
                  <h3 className="font-heading text-white text-xl uppercase tracking-wide mb-1">
                    Kohler Authorized Dealer
                  </h3>
                  <p className="text-power-red font-heading text-xs tracking-widest uppercase mb-3">
                    Dealer #1506430
                  </p>
                  <p className="text-steel text-sm leading-relaxed mb-5">
                    Factory-trained, certified installer for Central PA. We size, install, register, and service your
                    Kohler generator.
                  </p>
                  <a
                    href="/contact.php?service=Generator+Installation+(Kohler)"
                    className="btn-red w-full justify-center text-sm mb-3"
                  >
                    <i className="fas fa-plug-circle-bolt" aria-hidden="true"></i> Get a Generator Quote
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
