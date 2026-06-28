import { buildMetadata } from '@/lib/site';
import BreadcrumbSchema from '@/components/BreadcrumbSchema';
import Breadcrumbs from '@/components/Breadcrumbs';
import ArticleSchema from '@/components/ArticleSchema';
import FaqSchema from '@/components/FaqSchema';

export const metadata = buildMetadata({
  title: 'Power Outages in Dover PA: How Families Stay Prepared',
  description:
    "Power outages in Dover and York County, PA are becoming more frequent and costly. Here's what's at stake for families — and why a licensed generator installation is the smart solution.",
  path: '/power-outages-dover-pa-generators.php',
  ogType: 'article',
});

const ARTICLE_DATE = '2026-06-14';

const BREADCRUMBS = [
  { name: 'Home', url: '/index.php' },
  { name: 'Articles', url: '/blog.php' },
  { name: 'Power Outages Dover PA' },
];

const TOC = [
  ['#trend', 'The Trend Is Clear — Outages Are Getting Worse'],
  ['#stakes', "What's Actually at Stake in Your Home"],
  ['#portable', 'Why Portable Generators Fall Short'],
  ['#licensed', 'Why Licensed Installation Is Non-Negotiable'],
  ['#action', 'Taking Action Before the Next Storm'],
];

const FAQS = [];

const SVC_LINKS = [
  ['Generator Installation', '/services.php#generator'],
  ['Generator Maintenance', '/services.php#generator'],
  ['Panel Upgrades', '/services.php#panel'],
  ['Electrical Repairs', '/services.php#repairs'],
  ['Wiring & Lighting', '/services.php#wiring'],
  ['Troubleshooting', '/services.php#troubleshooting'],
];

export default function PowerOutagesArticle() {
  return (
    <>
      <BreadcrumbSchema items={BREADCRUMBS} />
      <ArticleSchema
        headline="Power Outages Are Getting More Frequent — Here's How Dover, PA Families Stay Prepared"
        description={metadata.description}
        path="/power-outages-dover-pa-generators.php"
        datePublished={ARTICLE_DATE}
      />
      <FaqSchema items={FAQS} />

      <section className="relative bg-navy overflow-hidden dot-grid py-20 md:py-24" aria-label="Article hero">
        <div className="absolute inset-y-0 left-0 w-1 bg-power-red" aria-hidden="true"></div>

        <div className="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
          <Breadcrumbs items={BREADCRUMBS} />

          <div className="flex items-center gap-3 mb-4">
            <div className="h-px w-10 bg-power-red flex-shrink-0" aria-hidden="true"></div>
            <span className="font-heading text-power-red text-sm tracking-widest uppercase">
              Outage Preparedness
            </span>
          </div>

          <h1 className="font-heading text-white text-4xl sm:text-5xl xl:text-6xl uppercase tracking-tight mb-6 max-w-4xl leading-tight">
            Power Outages Are Getting More Frequent — Here&apos;s How{' '}
            <span className="text-power-red">Dover, PA Families</span> Stay Prepared
          </h1>

          <div className="flex flex-wrap items-center gap-5 text-steel text-sm">
            <span className="flex items-center gap-2">
              <i className="fas fa-building text-power-red" aria-hidden="true"></i>GBR Electrical Services, LLC
            </span>
            <span className="flex items-center gap-2">
              <i className="fas fa-calendar text-power-red" aria-hidden="true"></i>June 14, 2026
            </span>
            <span className="flex items-center gap-2">
              <i className="fas fa-clock text-power-red" aria-hidden="true"></i>9 min read
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
                  Nobody plans for a power outage. But in Dover, PA and across York County, the families who&apos;ve
                  experienced a serious one — the kind that lasts 36 or 48 hours, the kind that hits during a January
                  ice storm or an August heat wave — know exactly how fast a power interruption goes from
                  inconvenient to genuinely serious.
                </p>
                <p>
                  The data tells a consistent story. Outage events across Central Pennsylvania have increased in
                  frequency and average duration over the past decade. The causes are familiar: aging distribution
                  infrastructure, more intense storm systems, and a grid that was designed for load demands
                  significantly smaller than what modern homes place on it.
                </p>
                <p>
                  The question isn&apos;t really whether you&apos;ll face an extended outage. The question is what
                  happens to your family and your home when you do — and what you&apos;re willing to put in place to
                  make sure the answer is &quot;nothing much.&quot;
                </p>
                <p>
                  GBR Electrical Services, LLC, a licensed general contractor and{' '}
                  <strong>authorized Kohler generator dealer based in Dover, PA</strong>, works with homeowners
                  across York County every year to put backup power solutions in place before the next storm hits.
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

              <h2 id="trend" className="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">
                The Trend Is Clear — Outages Are Getting Worse
              </h2>
              <div className="text-gray-700 leading-relaxed text-base space-y-5 mb-8">
                <p>
                  Electrical industry analysts and utility regulators have documented a significant increase in
                  outage frequency and duration across the mid-Atlantic and Northeastern states over the past 15
                  years. The U.S. Energy Information Administration has tracked data showing that average outage
                  duration for customers who experience interruptions has increased substantially — not because
                  utilities are doing a worse job, but because the events challenging the grid have become more
                  severe.
                </p>
                <p>
                  For Central Pennsylvania specifically, the pattern is familiar. The Susquehanna Valley and
                  surrounding ridge-and-valley topography creates atmospheric conditions that funnel storm energy.
                  Derecho events — those fast-moving lines of severe thunderstorms capable of producing wind damage
                  across hundreds of miles — have affected the region multiple times in recent years, each time
                  leaving hundreds of thousands of customers without power for multiple days.
                </p>
                <p>
                  Ice storms remain the most disruptive single-event type. A half-inch of ice on overhead lines
                  doesn&apos;t just knock out a neighborhood — it can take down transmission lines that serve entire
                  counties. Dover, Dillsburg, and portions of rural York County that sit at the end of long
                  distribution lines are routinely among the last areas restored after major events.
                </p>
                <p>
                  Understanding this context matters because <strong>backup power York County PA</strong> homeowners
                  invest in isn&apos;t a hedge against a rare scenario — it&apos;s preparation for something that
                  will happen again, probably within the next two or three years.
                </p>
              </div>

              <h2 id="stakes" className="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">
                What&apos;s Actually at Stake in Your Home
              </h2>
              <div className="text-gray-700 leading-relaxed text-base space-y-5 mb-8">
                <p>
                  <strong>Food loss.</strong> A refrigerator maintains safe temperatures for approximately four hours
                  after power loss. A full upright freezer holds for 24 to 48 hours. A family of four can easily
                  have $300 to $500 worth of groceries in a refrigerator and freezer at any given time. Multiply that
                  across several outages over a few years, and the cumulative loss becomes real money.
                </p>
                <p>
                  <strong>Sump pump failure and basement flooding.</strong> This is the silent catastrophe of power
                  outages in Central Pennsylvania. York County homes with basements rely on sump pumps to keep
                  groundwater at bay during wet weather. The problem is that the outages most likely to last long
                  enough to cause problems are caused by the same severe storms that produce the most rainfall. No
                  power means no sump pump means rising water in a finished basement. Water damage to finished
                  basement spaces routinely runs into the tens of thousands of dollars, and it&apos;s a direct,
                  predictable consequence of an extended outage during wet weather.
                </p>
                <p>
                  <strong>HVAC system failure.</strong> In summer, a closed home in Central Pennsylvania can become
                  dangerously hot within hours of losing air conditioning. Indoor temperatures can exceed outdoor
                  temperatures, particularly on upper floors. For elderly residents, infants, and people with certain
                  medical conditions, this isn&apos;t discomfort — it&apos;s a health emergency. In winter, a home
                  can drop to dangerous indoor temperatures within 24 hours in frigid weather. Pipes freeze.
                </p>
                <p>
                  <strong>Work-from-home disruption.</strong> The shift toward remote and hybrid work arrangements
                  has fundamentally changed what a power outage costs a household. For someone working from home, an
                  extended outage isn&apos;t just inconvenient — it&apos;s lost income, missed client commitments,
                  and professional consequences.
                </p>
                <p>
                  <strong>Medical device dependency.</strong> For families that include someone relying on home
                  medical equipment — oxygen concentrators, CPAP and BiPAP machines, refrigerated medications
                  including insulin, home dialysis equipment — an extended power outage is a medical emergency. For
                  these households, backup power isn&apos;t optional. It&apos;s life-safety infrastructure.
                </p>
              </div>

              <h2 id="portable" className="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">
                Why Portable Generators Fall Short
              </h2>
              <div className="text-gray-700 leading-relaxed text-base space-y-5 mb-8">
                <p>
                  Portable generators have provided relief to homeowners during outages for decades, and they do
                  provide some level of protection. But they have real limitations that become apparent under the
                  conditions you actually face during an extended outage.
                </p>
                <p>
                  <strong>They require fuel management.</strong> Portable generators typically run on gasoline, and a
                  serious outage is exactly the moment when getting gasoline becomes difficult. Gas stations lose
                  power too. Lines form. With a major storm having just passed through and widespread outages across
                  the county, getting gasoline becomes its own logistical challenge.
                </p>
                <p>
                  <strong>They require manual operation.</strong> You have to go outside in whatever weather created
                  the outage — often rain, ice, or high wind — start the generator, manage the cord runs or transfer
                  switch, and monitor the fuel level throughout. At 3:00 AM in the middle of a January ice storm,
                  this is a significant burden.
                </p>
                <p>
                  <strong>They create safety risks if used improperly.</strong> Carbon monoxide poisoning from
                  generators operated too close to homes is a documented cause of death during power outages, year
                  after year. The safe operation of a portable generator requires running it outdoors, well away from
                  doors and windows — requirements that people under stress don&apos;t always follow correctly.
                </p>
                <p>
                  <strong>Their power quality can cause harm.</strong> Many portable generators produce &quot;dirty&quot;
                  power — voltage output that fluctuates as loads change. Sensitive electronics including computers,
                  televisions, refrigerator control boards, and medical devices can be damaged by this unstable
                  power. The generator appears to be doing its job while quietly damaging the appliances it&apos;s
                  protecting.
                </p>
                <p>
                  A{' '}
                  <a href="/services.php#generator" className="text-power-red hover:underline font-semibold">
                    whole-home standby generator
                  </a>{' '}
                  installed by GBR Electrical eliminates all of these problems. It runs on natural gas or propane
                  from a fixed fuel source with no management required. It starts automatically within seconds of a
                  power interruption. And systems from Kohler deliver clean, stable power that protects sensitive
                  electronics.
                </p>
              </div>

              <h2 id="licensed" className="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">
                Why Licensed Installation Is Non-Negotiable
              </h2>
              <div className="text-gray-700 leading-relaxed text-base space-y-5 mb-8">
                <p>
                  The generator equipment itself is only part of the investment. How that equipment is installed
                  determines whether it performs reliably, operates safely, and retains the warranty coverage
                  you&apos;re paying for.
                </p>
                <p>
                  Standby generator installation involves working with your home&apos;s main electrical panel,
                  installing a transfer switch that must safely isolate your home from the utility grid while
                  energizing it from the generator, running gas lines or coordinating propane supply, pouring or
                  setting a concrete pad for the unit, and pulling permits and scheduling inspections with local
                  authorities.
                </p>
                <p>
                  Each of these elements has safety implications if done incorrectly. An improperly installed
                  transfer switch creates the risk of backfeed — energizing utility lines that workers believe are
                  de-energized — a potentially fatal hazard for line crews working to restore power. Improperly run
                  gas connections create fire and explosion risks. This isn&apos;t work for an unlicensed handyman or
                  a general contractor without electrical expertise.
                </p>
                <p>
                  As a <strong>licensed general contractor and authorized Kohler generator dealer PA</strong>, GBR
                  Electrical Services brings every necessary credential to{' '}
                  <strong>standby generator Central PA</strong> installations. Every installation is permitted and
                  inspected. Every transfer switch is properly specified and installed. Every gas connection meets
                  code.
                </p>
                <p>
                  That combination — licensed contractor, authorized dealer, code-compliant installation — is what{' '}
                  <strong>whole-home generator Dover PA</strong> homeowners need to have genuine confidence in their
                  backup power system.
                </p>
              </div>

              <h2 id="action" className="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">
                Taking Action Before the Next Storm
              </h2>
              <div className="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
                <p>
                  The families across York County who have been through a serious extended outage without backup
                  power share a consistent experience: they wished they&apos;d acted sooner. The inconvenience and
                  loss they experienced were both predictable and avoidable. The generator installation they
                  completed afterward was one they wished they&apos;d done years earlier.
                </p>
                <p>
                  GBR Electrical Services doesn&apos;t push homeowners toward decisions they&apos;re not ready to
                  make. What the team does provide is an honest consultation — an assessment of your home&apos;s
                  electrical profile, a clear explanation of your options, a straightforward cost estimate, and the
                  technical information you need to make a good decision for your family.
                </p>
                <p>
                  If you&apos;re in Dover, Harrisburg, Mechanicsburg, Dillsburg, or anywhere across the Central
                  Pennsylvania region, <strong>backup power that works automatically and reliably is within reach</strong>.
                  GBR Electrical handles the entire process, from initial consultation through permitted installation
                  and system registration, so you don&apos;t have to manage multiple contractors or navigate the
                  complexity on your own.
                </p>
                <p>The next severe storm is coming. The next extended outage will happen. The question is whether you&apos;ll be ready for it.</p>
              </div>

              <div className="bg-power-red-dk rounded-xl p-8 text-center mb-10">
                <h3 className="font-heading text-white text-2xl uppercase tracking-wide mb-3">
                  Schedule Your Free Consultation
                </h3>
                <p className="text-red-100 text-sm mb-6">
                  GBR Electrical — licensed contractor and Kohler authorized dealer in Dover, PA. Serving York County
                  for 40+ years.
                </p>
                <div className="flex flex-wrap justify-center gap-4">
                  <a
                    href="/contact.php?service=Generator+Installation+(Kohler)"
                    className="inline-flex items-center gap-2 bg-white text-power-red font-heading text-sm uppercase tracking-widest px-6 min-h-[44px] py-3 hover:bg-silver-lt transition-colors rounded-lg cursor-pointer"
                  >
                    <i className="fas fa-calendar-check" aria-hidden="true"></i> Book Free Consultation
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
                    <i className="fas fa-bolt text-power-red text-2xl" aria-hidden="true"></i>
                  </div>
                  <div>
                    <h3 className="font-heading text-navy text-xl uppercase tracking-wide mb-2">
                      About GBR Electrical Services, LLC
                    </h3>
                    <address className="not-italic text-gray-600 text-sm leading-relaxed space-y-1">
                      <p>
                        Licensed electrical contractor and authorized Kohler generator dealer serving Dover, PA and
                        York County for over 40 years. Military &amp; First Responder discounts available.
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

              <div className="mt-10">
                <h3 className="font-heading text-navy text-2xl uppercase tracking-wide mb-5">Related Articles</h3>
                <div className="grid sm:grid-cols-2 gap-4">
                  <a
                    href="/central-pa-whole-home-generators.php"
                    className="block border border-gray-200 rounded-xl p-5 hover:border-power-red/50 hover:bg-silver-lt transition-all cursor-pointer"
                  >
                    <div className="font-heading text-power-red text-xs tracking-widest uppercase mb-2">
                      Generator Installation
                    </div>
                    <div className="font-heading text-navy text-base uppercase leading-snug">
                      Why Central PA Homeowners Are Investing in Whole-Home Generators
                    </div>
                  </a>
                  <a
                    href="/kohler-generators-york-county-pa.php"
                    className="block border border-gray-200 rounded-xl p-5 hover:border-power-red/50 hover:bg-silver-lt transition-all cursor-pointer"
                  >
                    <div className="font-heading text-power-red text-xs tracking-widest uppercase mb-2">
                      Kohler Generators
                    </div>
                    <div className="font-heading text-navy text-base uppercase leading-snug">
                      Why GBR Recommends Kohler for Every York County Home
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
                    <i className="fas fa-bolt text-power-red text-2xl" aria-hidden="true"></i>
                  </div>
                  <h3 className="font-heading text-white text-xl uppercase tracking-wide mb-2">
                    Don&apos;t Wait for the Next Storm
                  </h3>
                  <p className="text-steel text-sm leading-relaxed mb-5">
                    Free consultations for York County homeowners. No pressure — just honest information and a clear
                    estimate.
                  </p>
                  <a
                    href="/contact.php?service=Generator+Installation+(Kohler)"
                    className="btn-red w-full justify-center text-sm mb-3"
                  >
                    <i className="fas fa-calendar-check" aria-hidden="true"></i> Free Consultation
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
