import { findImage } from '@/lib/images';
import { buildMetadata } from '@/lib/site';
import FaqSchema from '@/components/FaqSchema';

export const metadata = buildMetadata({
  title: 'Kohler Generator Dealer Dover, PA | Electrical Services Pennsylvania',
  description: 'GBR Electrical Services LLC — licensed electrician, certified Kohler authorized dealer, and whole-home generator specialist in Dover, PA. 40 years serving York County. Military & First Responder discounts. Call 717-467-1712.',
  path: '/index.php',
});

const TRUST_SIGNALS = [
  'Licensed & Insured',
  'Kohler Authorized Dealer',
  'Military & First Responder Discounts',
  '40 Years Serving York County',
  '24/7 Emergency Service',
];

const HERO_CHECKS = [
  'Kohler Authorized Dealer & Installer',
  'Whole-Home Standby Generators',
  'Generator Maintenance Programs',
  'Military & First Responder Discounts',
  '40 Years Serving York County',
  'Owner on Every Job',
];

const BADGES = [
  { icon: 'fas fa-shield-halved', title: 'Licensed & Insured',
    desc: 'Fully licensed PA electrical contractor with complete liability and workers\' compensation coverage.' },
  { icon: 'fas fa-certificate', title: 'Kohler Authorized Dealer',
    desc: 'Factory-authorized Kohler dealer — one of York County\'s only certified Kohler whole-home generator specialists.' },
  { icon: 'fas fa-medal', title: 'Military & First Responder Discounts',
    desc: 'We proudly honor those who serve. Discounts for active military, veterans, police, fire, and EMS personnel.' },
  { icon: 'fas fa-award', title: '40 Years Serving York County',
    desc: 'Four decades of trusted electrical service. GBR has been a fixture in the Dover and York County community since the beginning.' },
];

const SERVICES = [
  { icon: 'fas fa-plug-circle-bolt', title: 'Generator Installation', link: '/services.php#generator',
    desc: 'York County\'s certified Kohler authorized dealer. Whole-home standby generator installation, transfer switch, startup, and maintenance programs.' },
  { icon: 'fas fa-screwdriver-wrench', title: 'Electrical Repairs', link: '/services.php#repairs',
    desc: 'Fast diagnosis and repair of outlets, switches, circuits, and wiring problems — done right the first time.' },
  { icon: 'fas fa-solar-panel', title: 'Panel Upgrades', link: '/services.php#panel',
    desc: 'Upgrade outdated or undersized breaker panels (100A–400A) to handle today\'s electrical demands safely.' },
  { icon: 'fas fa-lightbulb', title: 'Wiring & Lighting', link: '/services.php#wiring',
    desc: 'New construction wiring, remodels, recessed LED lighting, ceiling fans, and energy-efficient upgrades.' },
  { icon: 'fas fa-magnifying-glass-chart', title: 'Troubleshooting', link: '/services.php#troubleshooting',
    desc: 'Tripping breakers, flickering lights, burning smells? We find the root cause and fix it permanently.' },
  { icon: 'fas fa-building', title: 'Residential & Commercial', link: '/services.php#commercial',
    desc: 'Full-service electrical for homeowners and business owners — from single-family homes to commercial spaces.' },
];

const MILESTONE_STATS = [
  { val: '40+', label: 'Years Serving the Community' },
  { val: 'Kohler', label: 'Authorized Dealer' },
  { val: '24/7', label: 'Emergency Available' },
  { val: 'York Co.', label: 'PA — Licensed & Insured' },
];

const VALUES = [
  'Owner on every job — no subcontractors',
  'Code-compliant work, every time',
  'Military & First Responder discounts available',
  'Transparent pricing before work begins',
  'Clean, respectful service in your home or business',
];

const CREDS = [
  { v: '40+', l: 'Years in Business', i: 'fas fa-award' },
  { v: 'Kohler', l: 'Authorized Dealer', i: 'fas fa-certificate' },
  { v: 'Military', l: '& First Responder Discounts', i: 'fas fa-medal' },
  { v: '24/7', l: 'Emergency Response', i: 'fas fa-circle-exclamation' },
];

const GEN_FEATURES = [
  { i: 'fas fa-bolt', t: 'Automatic Standby Power', d: 'Detects outages and starts within 10 seconds — fully automatic, no manual intervention needed.' },
  { i: 'fas fa-house-chimney', t: 'Whole-Home Protection', d: 'Powers your entire home including HVAC, refrigerators, sump pump, and medical equipment.' },
  { i: 'fas fa-clipboard-list', t: 'Complete Project Management', d: 'From permit to startup — we manage the full project including gas line coordination and utility interconnect.' },
  { i: 'fas fa-wrench', t: 'Maintenance & Service Plans', d: 'Ask about our generator maintenance programs to keep your unit running reliably for years to come.' },
];

const KOHLER_ADVANTAGES = [
  'Industry-leading 5-year residential warranty',
  'Quiet, all-weather enclosed steel housing',
  'Natural gas or LP propane fuel options',
  'Available 8kW – 150kW — sized for any home',
  'Kohler APM® remote monitoring capability',
  'Transfer switch properly matched and sized',
  'Professional startup, load test & warranty reg.',
];

const MAINT_ITEMS = [
  { i: 'fas fa-oil-can', t: 'Annual Tune-Up',
    d: 'Oil and filter change, spark plug inspection, air filter service, battery test, and cooling system check.' },
  { i: 'fas fa-rotate', t: 'Load Bank Testing',
    d: 'Full load test to verify your generator can handle the power demands of your home when the grid goes down.' },
  { i: 'fas fa-clipboard-check', t: 'Full Safety Inspection',
    d: 'Transfer switch inspection, fuel system check, controls calibration, and complete diagnostic report.' },
];

const REVIEWS = [
  { name: 'Mike R.', loc: 'Dover, PA', stars: 5,
    text: 'GBR installed our Kohler whole-home generator and the experience was top-notch from start to finish. Showed up on time, explained everything clearly, and the work was impeccably clean. Highly recommend to anyone in York County looking for a reliable generator installer.' },
  { name: 'Sarah T.', loc: 'York, PA', stars: 5,
    text: 'Had our electrical panel upgraded and new circuits run for a home addition. Fair price, excellent craftsmanship. The owner himself was on the job every day — that level of personal attention is rare and means everything to us.' },
  { name: 'Dave L.', loc: 'Springettsbury Twp, PA', stars: 5,
    text: 'Called about nuisance tripping breakers and they were out the next morning. Diagnosed the issue quickly, gave an honest quote, and had it fixed the same day. Trustworthy, knowledgeable, and no upsell games. Will absolutely use again.' },
];

const FAQS = [
  { q: 'Is GBR Electrical Services licensed and insured?',
    a: 'Yes. GBR Electrical Services, LLC is a fully licensed and insured electrical contractor serving Dover, PA and all of York County.' },
  { q: 'Is GBR an authorized Kohler generator dealer?',
    a: 'Yes. GBR is an authorized Kohler generator dealer (Dealer #1506430), specializing in whole-home standby generator sizing, installation, and maintenance.' },
  { q: 'Do you offer free estimates?',
    a: 'Yes. We provide free, no-obligation estimates for generator installation and electrical work — call 717-467-1712 or request one online.' },
  { q: 'Do you offer military or first responder discounts?',
    a: 'Yes. GBR offers discounts for military service members and first responders — just mention it when you request your estimate.' },
  { q: 'What areas do you serve?',
    a: 'We serve Dover, York, Dillsburg, Mechanicsburg, Red Lion, Spring Grove, Hanover, Manchester, New Cumberland, Lewisberry, Wrightsville, East Berlin, Camp Hill, Etters, and all of York County, PA.' },
  { q: 'Do you provide 24/7 emergency electrical service?',
    a: 'Yes. For urgent electrical issues or generator emergencies, call our 24/7 line at 717-515-1504.' },
];

function Stars({ count }) {
  return (
    <>
      {Array.from({ length: count }).map((_, i) => (
        <i key={i} className="fas fa-star text-yellow-400 text-sm" aria-hidden="true"></i>
      ))}
    </>
  );
}

export default function HomePage() {
  const heroBg = findImage('/assets/images/hero-bg.webp', '/assets/images/hero-bg.jpg');
  const imgPanel = findImage('/assets/images/electrician-panel.webp', '/assets/images/electrician-panel.jpg');
  const imgGen = findImage('/assets/images/generator.webp', '/assets/images/generator.jpg');

  return (
    <>
      {/* ================================================================
          1. HERO
          ================================================================ */}
      <section className="relative min-h-screen flex items-center overflow-hidden bg-navy dot-grid" aria-label="Welcome to GBR Electrical Services">
        {heroBg && (
          <div className="absolute inset-0" aria-hidden="true">
            <img src={heroBg} alt="" className="w-full h-full object-cover object-center" loading="eager" fetchPriority="high" width="1920" height="1080" />
            <div className="absolute inset-0 bg-navy/80"></div>
          </div>
        )}

        <div className="absolute inset-y-0 left-0 w-1 bg-power-red" aria-hidden="true"></div>
        <div className="absolute bottom-0 right-0 w-[700px] h-[700px] pointer-events-none opacity-[0.045]"
             style={{ background: 'radial-gradient(circle,#FC0D15 0%,transparent 70%)' }} aria-hidden="true"></div>

        <div className="max-w-7xl mx-auto px-5 sm:px-8 py-24 md:py-32 w-full relative z-10">
          <div className="grid lg:grid-cols-5 gap-12 lg:gap-16 items-center">

            <div className="lg:col-span-3">
              <div className="mb-8 lg:mb-10">
                <img src="/assets/images/logo.webp" alt="GBR Electrical Services, LLC" className="h-20 sm:h-24 w-auto object-contain" width="360" height="96" loading="eager" />
              </div>

              <div className="inline-flex items-center gap-2.5 bg-power-red/15 border border-power-red/35 px-4 py-2 rounded-lg mb-5">
                <i className="fas fa-certificate text-power-red" aria-hidden="true"></i>
                <span className="font-heading text-power-red text-xs tracking-widest uppercase">Kohler Authorized Dealer &amp; Installer — Dover, PA</span>
              </div>

              <h1 className="font-heading text-white uppercase leading-none mb-6">
                <span className="block text-4xl sm:text-5xl xl:text-6xl tracking-tight">Whole Home</span>
                <span className="block text-5xl sm:text-6xl xl:text-7xl tracking-tight text-power-red">Generator</span>
                <span className="block text-4xl sm:text-5xl xl:text-6xl tracking-tight">Installation &amp;</span>
                <span className="block text-3xl sm:text-4xl xl:text-5xl tracking-tight text-silver mt-1">Full-Service Electrical</span>
              </h1>

              <p className="text-silver/85 text-lg leading-relaxed mb-10 max-w-xl">
                York County&apos;s certified Kohler generator specialist and full-service licensed electrician. 40 years serving the community. Military &amp; First Responder discounts available.
              </p>

              <div className="flex flex-wrap gap-4 mb-10">
                <a href="/contact.php?service=Generator+Installation+(Kohler)" className="btn-red">
                  <i className="fas fa-plug-circle-bolt" aria-hidden="true"></i> Get a Generator Quote
                </a>
                <a href="tel:7174671712" className="btn-outline-white">
                  <i className="fas fa-phone" aria-hidden="true"></i> Call: 717-467-1712
                </a>
              </div>

              <div className="flex flex-wrap items-center gap-x-6 gap-y-3 pt-7 border-t border-white/10" aria-label="Trust credentials">
                {TRUST_SIGNALS.map((s) => (
                  <div key={s} className="flex items-center gap-2 text-silver/80 text-sm">
                    <i className="fas fa-check-circle text-power-red" aria-hidden="true"></i>
                    {s}
                  </div>
                ))}
              </div>
            </div>

            <aside className="hidden lg:block lg:col-span-2" aria-label="Service highlights">
              <div className="relative">
                <div className="bg-navy-card border border-white/10 p-8 relative overflow-hidden rounded-xl">
                  <div className="absolute top-0 inset-x-0 h-1 bg-power-red rounded-t-xl" aria-hidden="true"></div>

                  <div className="relative inline-flex mb-7">
                    <div className="w-16 h-16 bg-power-red/15 flex items-center justify-center rounded-xl">
                      <i className="fas fa-plug-circle-bolt text-power-red text-3xl" aria-hidden="true"></i>
                    </div>
                    <div className="absolute -bottom-1.5 -right-1.5 w-7 h-7 bg-power-red flex items-center justify-center rounded-full">
                      <i className="fas fa-check text-white text-[11px]" aria-hidden="true"></i>
                    </div>
                  </div>

                  <div className="mb-7">
                    <div className="font-heading text-white text-3xl uppercase tracking-wide leading-tight mb-1">Kohler Authorized</div>
                    <div className="font-heading text-power-red text-lg uppercase tracking-widest">Generator Specialist</div>
                  </div>

                  <ul className="border-t border-white/10 pt-6 space-y-3.5" role="list">
                    {HERO_CHECKS.map((c) => (
                      <li key={c} className="flex items-center justify-between">
                        <span className="text-gray-400 text-sm">{c}</span>
                        <i className="fas fa-check text-power-red text-xs ml-4 flex-shrink-0" aria-hidden="true"></i>
                      </li>
                    ))}
                  </ul>

                  <a href="tel:7174671712" className="mt-7 flex items-center justify-center gap-2.5 bg-power-red hover:bg-power-red-dk transition-colors min-h-[44px] px-5 py-3 font-heading text-white text-sm tracking-widest uppercase cursor-pointer rounded-lg">
                    <i className="fas fa-phone" aria-hidden="true"></i> 717-467-1712
                  </a>
                </div>

                <div className="absolute -bottom-4 -left-4 w-32 h-32 border-2 border-power-red/20 pointer-events-none rounded-xl" aria-hidden="true"></div>
                <div className="absolute -top-4 -right-4 w-16 h-16 border border-white/8 pointer-events-none rounded-lg" aria-hidden="true"></div>
              </div>
            </aside>

          </div>
        </div>

        <div className="absolute bottom-0 inset-x-0 pointer-events-none" aria-hidden="true">
          <svg viewBox="0 0 1440 72" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" className="w-full block" style={{ height: '72px' }}>
            <polygon points="0,72 1440,0 1440,72" fill="white" />
          </svg>
        </div>
      </section>

      {/* ================================================================
          2. TRUST BADGES
          ================================================================ */}
      <section className="bg-white py-14" aria-labelledby="trust-heading">
        <h2 id="trust-heading" className="sr-only">Why Choose GBR Electrical</h2>
        <div className="max-w-7xl mx-auto px-4 sm:px-6">
          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {BADGES.map((b) => (
              <article key={b.title} className="border-t-4 border-power-red bg-silver-lt p-7 flex flex-col gap-4 card-lift rounded-xl">
                <div className="w-14 h-14 bg-power-red/10 flex items-center justify-center flex-shrink-0 rounded-xl">
                  <i className={`${b.icon} text-power-red text-2xl`} aria-hidden="true"></i>
                </div>
                <div>
                  <h3 className="font-heading text-navy text-xl uppercase tracking-wide mb-2">{b.title}</h3>
                  <p className="text-steel-dark text-sm leading-relaxed">{b.desc}</p>
                </div>
              </article>
            ))}
          </div>
        </div>
      </section>

      {/* ================================================================
          3. SERVICES
          ================================================================ */}
      <section className="bg-silver-lt py-20" id="services" aria-labelledby="services-heading">
        <div className="max-w-7xl mx-auto px-4 sm:px-6">
          <div className="text-center mb-14">
            <p className="font-heading text-power-red-dk text-sm tracking-widest uppercase mb-3">What We Do</p>
            <h2 id="services-heading" className="font-heading text-navy text-4xl sm:text-5xl uppercase tracking-tight mb-3 title-accent center">
              Our Electrical Services
            </h2>
            <p className="text-steel-dark max-w-2xl mx-auto mt-6 text-base leading-relaxed">
              From routine repairs to complete panel upgrades and whole-home Kohler generator installations — GBR Electrical has the expertise to keep your power running safely.
            </p>
          </div>

          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            {SERVICES.map((svc) => (
              <article key={svc.title} className="bg-white border border-gray-200 p-8 group card-lift rounded-xl hover:border-l-4 hover:border-l-power-red hover:border-power-red transition-all duration-250 cursor-default">
                <div className="w-14 h-14 bg-silver-lt group-hover:bg-power-red/10 flex items-center justify-center mb-6 transition-colors rounded-xl">
                  <i className={`${svc.icon} text-power-red text-2xl`} aria-hidden="true"></i>
                </div>
                <h3 className="font-heading text-navy text-xl uppercase tracking-wide mb-3">{svc.title}</h3>
                <p className="text-steel-dark text-sm leading-relaxed mb-5">{svc.desc}</p>
                <a href={svc.link} className="inline-flex items-center gap-2 font-heading text-sm text-power-red-dk tracking-wider uppercase hover:gap-3 transition-all duration-200 cursor-pointer">
                  {svc.title} Details <i className="fas fa-arrow-right text-xs" aria-hidden="true"></i>
                </a>
              </article>
            ))}
          </div>

          <div className="text-center mt-12">
            <a href="/services.php" className="btn-outline-red">View All Services</a>
          </div>
        </div>
      </section>

      {/* ================================================================
          4. ABOUT
          ================================================================ */}
      <section className="bg-navy py-20 relative overflow-hidden dot-grid" id="about" aria-labelledby="about-heading">
        <div className="absolute -left-40 top-1/2 -translate-y-1/2 w-96 h-96 rounded-full opacity-[0.06] pointer-events-none"
             style={{ background: 'radial-gradient(circle,#FC0D15 0%,transparent 70%)' }} aria-hidden="true"></div>

        <div className="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
          <div className="flex flex-wrap items-center justify-center gap-10 mb-16 pb-14 border-b border-white/10">
            {MILESTONE_STATS.map((ms) => (
              <div key={ms.label} className="text-center">
                <div className="font-heading text-power-red text-4xl sm:text-5xl uppercase tracking-tight">{ms.val}</div>
                <div className="text-steel text-xs uppercase tracking-widest mt-1 font-heading">{ms.label}</div>
              </div>
            ))}
          </div>

          <div className="grid lg:grid-cols-2 gap-14 items-start">
            <div>
              <p className="font-heading text-power-red-lt text-sm tracking-widest uppercase mb-3">Who We Are</p>
              <h2 id="about-heading" className="font-heading text-white text-4xl sm:text-5xl uppercase tracking-tight mb-6 title-accent">
                Serving the Community<br />for 40 Years.
              </h2>
              <div className="space-y-4 text-silver/80 leading-relaxed text-base">
                <p>GBR Electrical Services is a locally owned and operated electrical contracting company based in Dover, PA. For over 40 years, we&apos;ve built our reputation one job at a time — through honest work, fair pricing, and treating every customer like a neighbor.</p>
                <p>Our owner is hands-on with every project. When you call GBR, you get a licensed electrician, not a salesperson or subcontractor. We bring four decades of experience to repairs, panel upgrades, and our specialty — Kohler whole-home generator installations.</p>
                <p>We&apos;re proud to offer discounts to military members, veterans, police officers, firefighters, and EMS personnel. It&apos;s a small way we give back to those who give so much to our community.</p>
              </div>
              <ul className="mt-8 space-y-3 text-sm" role="list">
                {VALUES.map((v) => (
                  <li key={v} className="flex items-center gap-3 text-silver">
                    <span className="w-5 h-5 bg-power-red flex items-center justify-center flex-shrink-0 rounded" aria-hidden="true">
                      <i className="fas fa-check text-white text-[10px]"></i>
                    </span>
                    {v}
                  </li>
                ))}
              </ul>
              <a href="/contact.php" className="btn-red mt-8 inline-flex">
                <i className="fas fa-calendar-check" aria-hidden="true"></i> Schedule a Call
              </a>
            </div>

            <div className="space-y-5">
              {imgPanel ? (
                <div className="relative overflow-hidden rounded-xl">
                  <img src={imgPanel} alt="GBR Electrical Services — licensed electrician at work on an electrical panel" className="w-full h-64 object-cover" loading="lazy" width="600" height="256" />
                  <div className="absolute inset-0 bg-gradient-to-t from-navy/70 to-transparent rounded-xl"></div>
                  <div className="absolute bottom-4 left-5 right-5">
                    <div className="font-heading text-white text-lg uppercase tracking-wide">Licensed Professionals</div>
                    <div className="text-silver/80 text-xs">York County, PA — 40 Years in Business</div>
                  </div>
                </div>
              ) : (
                <div className="relative overflow-hidden rounded-xl bg-navy-card border border-white/10 h-64 flex items-center justify-center">
                  <div className="text-center">
                    <i className="fas fa-bolt text-power-red text-4xl mb-3 block" aria-hidden="true"></i>
                    <div className="font-heading text-white text-xl uppercase tracking-wide">Licensed Professionals</div>
                    <div className="text-gray-400 text-sm mt-1">York County, PA — 40 Years in Business</div>
                  </div>
                </div>
              )}

              <div className="grid grid-cols-2 gap-4" role="list" aria-label="Credentials and highlights">
                {CREDS.map((c) => (
                  <div key={c.l} className="bg-navy-card border border-white/10 p-6 group hover:border-power-red/40 transition-colors card-lift cursor-default rounded-xl" role="listitem">
                    <i className={`${c.i} text-power-red text-xl mb-3 block`} aria-hidden="true"></i>
                    <div className="font-heading text-white text-2xl uppercase tracking-wide mb-1">{c.v}</div>
                    <div className="text-gray-400 text-xs uppercase tracking-widest">{c.l}</div>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ================================================================
          4b. MILITARY & FIRST RESPONDER DISCOUNT STRIP
          ================================================================ */}
      <section className="bg-navy-mid py-10 border-y border-white/5" aria-label="Military and first responder discount">
        <div className="max-w-7xl mx-auto px-4 sm:px-6">
          <div className="flex flex-col sm:flex-row items-center justify-between gap-6">
            <div className="flex items-center gap-5">
              <div className="w-16 h-16 bg-power-red/15 flex items-center justify-center rounded-xl flex-shrink-0">
                <i className="fas fa-medal text-power-red text-3xl" aria-hidden="true"></i>
              </div>
              <div>
                <div className="font-heading text-white text-2xl sm:text-3xl uppercase tracking-tight">Military &amp; First Responder Discounts</div>
                <p className="text-gray-400 text-sm mt-1">We proudly honor those who serve. Discounts for active military, veterans, police, fire, and EMS personnel. Just ask!</p>
              </div>
            </div>
            <a href="/contact.php?discount=military" className="btn-outline-white flex-shrink-0">
              <i className="fas fa-tag" aria-hidden="true"></i> Ask About Discounts
            </a>
          </div>
        </div>
      </section>

      {/* ================================================================
          5. GENERATOR SPOTLIGHT
          ================================================================ */}
      <section className="bg-white py-20" id="generators" aria-labelledby="gen-heading">
        <div className="max-w-7xl mx-auto px-4 sm:px-6">
          <div className="flex justify-center mb-12">
            <div className="inline-flex items-center gap-4 bg-navy px-8 py-5 rounded-xl" role="banner" aria-label="Kohler Authorized Dealer">
              <i className="fas fa-certificate text-power-red text-2xl" aria-hidden="true"></i>
              <div>
                <div className="font-heading text-power-red-lt text-xs tracking-widest uppercase">Kohler Authorized Dealer &amp; Installer</div>
                <div className="font-heading text-white text-lg uppercase tracking-wide">York County&apos;s Kohler Generator Specialist</div>
                <div className="font-heading text-steel text-xs tracking-widest uppercase mt-0.5">Dealer #1506430</div>
              </div>
            </div>
          </div>

          <div className="grid lg:grid-cols-2 gap-14 items-start">
            <div>
              <p className="font-heading text-power-red-dk text-sm tracking-widest uppercase mb-3">Our #1 Specialty</p>
              <h2 id="gen-heading" className="font-heading text-navy text-4xl sm:text-5xl uppercase tracking-tight mb-6 title-accent">
                Never Lose Power<br />Again.
              </h2>
              <p className="text-gray-600 leading-relaxed mb-6 text-base">
                As a Kohler authorized dealer and installer, GBR Electrical is your one-stop shop for whole-home backup power. We handle everything — site assessment, load calculation, permitting, installation, transfer switch wiring, startup, and warranty registration.
              </p>
              <p className="text-gray-600 leading-relaxed mb-8 text-base">
                Kohler standby generators start automatically within seconds of a power outage. No manual setup. No extension cords. Just seamless, whole-home backup power through storms, grid failures, and everything in between.
              </p>

              <div className="space-y-5 mb-8">
                {GEN_FEATURES.map((gf) => (
                  <div key={gf.t} className="flex gap-4">
                    <div className="w-10 h-10 bg-power-red/10 flex items-center justify-center flex-shrink-0 mt-0.5 rounded-lg">
                      <i className={`${gf.i} text-power-red`} aria-hidden="true"></i>
                    </div>
                    <div>
                      <div className="font-heading text-navy text-base uppercase tracking-wide">{gf.t}</div>
                      <p className="text-gray-500 text-sm mt-1 leading-snug">{gf.d}</p>
                    </div>
                  </div>
                ))}
              </div>

              <div className="flex flex-wrap gap-4">
                <a href="/contact.php?service=Generator+Installation+(Kohler)" className="btn-red">
                  <i className="fas fa-plug-circle-bolt" aria-hidden="true"></i> Get a Generator Quote
                </a>
                <a href="tel:7174671712" className="btn-outline-red">
                  <i className="fas fa-phone" aria-hidden="true"></i> Call Us Now
                </a>
              </div>
            </div>

            <div className="space-y-5">
              {imgGen && (
                <div className="relative overflow-hidden rounded-xl">
                  <img src={imgGen} alt="Kohler whole-home standby generator installed by GBR Electrical Services" className="w-full h-56 object-cover" loading="lazy" width="600" height="224" />
                  <div className="absolute inset-0 bg-gradient-to-t from-navy/70 to-transparent rounded-xl"></div>
                  <div className="absolute bottom-0 left-0 right-0 p-5">
                    <div className="font-heading text-white text-sm uppercase tracking-widest">Kohler Standby Generator</div>
                    <div className="text-silver/80 text-xs">Professionally Installed by GBR Electrical, York County PA</div>
                  </div>
                </div>
              )}

              <div className="bg-navy p-8 relative overflow-hidden rounded-xl">
                <div className="absolute top-0 inset-x-0 h-1 bg-power-red rounded-t-xl" aria-hidden="true"></div>
                <h3 className="font-heading text-white text-2xl uppercase tracking-wide mb-6">Kohler Advantages</h3>
                <ul className="space-y-3.5" role="list">
                  {KOHLER_ADVANTAGES.map((k) => (
                    <li key={k} className="flex items-start gap-3 text-silver text-sm">
                      <i className="fas fa-check text-power-red flex-shrink-0 mt-0.5" aria-hidden="true"></i>
                      {k}
                    </li>
                  ))}
                </ul>
              </div>

              <div className="bg-power-red-dk p-7 flex items-start gap-5 rounded-xl">
                <i className="fas fa-triangle-exclamation text-white/75 text-3xl flex-shrink-0 mt-1" aria-hidden="true"></i>
                <div>
                  <div className="font-heading text-white text-xl uppercase tracking-wide mb-2">Don&apos;t Wait for the Next Outage</div>
                  <p className="text-red-100 text-sm leading-relaxed mb-4">
                    Protect your sump pump, medical equipment, and family comfort before the next storm rolls through York County.
                  </p>
                  <a href="/contact.php?service=Generator+Installation+(Kohler)" className="inline-flex items-center gap-2 bg-white text-power-red-dk font-heading text-sm uppercase tracking-widest px-5 min-h-[44px] py-2.5 hover:bg-silver-lt transition-colors cursor-pointer rounded-lg">
                    <i className="fas fa-calendar-check" aria-hidden="true"></i> Schedule Consultation
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ================================================================
          5b. GENERATOR MAINTENANCE & SERVICE PROGRAMS
          ================================================================ */}
      <section className="bg-silver-lt py-16" aria-labelledby="maint-heading">
        <div className="max-w-7xl mx-auto px-4 sm:px-6">
          <div className="text-center mb-12">
            <p className="font-heading text-power-red-dk text-sm tracking-widest uppercase mb-3">Protect Your Investment</p>
            <h2 id="maint-heading" className="font-heading text-navy text-3xl sm:text-4xl uppercase tracking-tight title-accent center">
              Generator Maintenance &amp; Service Programs
            </h2>
            <p className="text-steel-dark max-w-2xl mx-auto mt-6 text-base leading-relaxed">
              GBR Electrical offers annual maintenance programs to keep your Kohler generator performing reliably year after year. Don&apos;t wait for a problem — schedule routine service and ensure it&apos;s ready when you need it most.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            {MAINT_ITEMS.map((mi) => (
              <div key={mi.t} className="bg-white border border-gray-200 p-8 rounded-xl card-lift text-center">
                <div className="w-14 h-14 bg-power-red/10 flex items-center justify-center rounded-full mx-auto mb-5">
                  <i className={`${mi.i} text-power-red text-2xl`} aria-hidden="true"></i>
                </div>
                <h3 className="font-heading text-navy text-xl uppercase tracking-wide mb-3">{mi.t}</h3>
                <p className="text-steel-dark text-sm leading-relaxed">{mi.d}</p>
              </div>
            ))}
          </div>

          <div className="bg-navy p-8 rounded-xl flex flex-col sm:flex-row items-center justify-between gap-6">
            <div className="flex items-center gap-4">
              <div className="w-12 h-12 bg-power-red/15 flex items-center justify-center rounded-xl flex-shrink-0">
                <i className="fas fa-shield-halved text-power-red text-xl" aria-hidden="true"></i>
              </div>
              <div>
                <div className="font-heading text-white text-xl uppercase tracking-wide">Annual Maintenance Program</div>
                <p className="text-steel text-sm">Keep your Kohler generator covered year-round. Ask us about scheduled service plans.</p>
              </div>
            </div>
            <div className="flex flex-wrap gap-3 flex-shrink-0">
              <a href="/generator-maintenance-plans.php" className="btn-outline-white">
                <i className="fas fa-list-check" aria-hidden="true"></i> View Plans &amp; Pricing
              </a>
              <a href="/contact.php?service=Generator+Maintenance" className="btn-red">
                <i className="fas fa-calendar-check" aria-hidden="true"></i> Schedule Maintenance
              </a>
            </div>
          </div>
        </div>
      </section>

      {/* ================================================================
          6. TESTIMONIALS
          ================================================================ */}
      <section className="bg-white py-20" id="testimonials" aria-labelledby="test-heading">
        <div className="max-w-7xl mx-auto px-4 sm:px-6">
          <div className="text-center mb-14">
            <p className="font-heading text-power-red-dk text-sm tracking-widest uppercase mb-3">Customer Reviews</p>
            <h2 id="test-heading" className="font-heading text-navy text-4xl sm:text-5xl uppercase tracking-tight title-accent center">
              Trusted by York County Homeowners
            </h2>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-3 gap-7">
            {REVIEWS.map((r) => (
              <blockquote key={r.name} className="bg-silver-lt border border-gray-200 p-8 flex flex-col card-lift rounded-xl">
                <div className="flex gap-1 mb-4" role="img" aria-label={`${r.stars} out of 5 stars`}>
                  <Stars count={r.stars} />
                </div>
                <i className="fas fa-quote-left text-power-red/20 text-4xl mb-3 -mt-1" aria-hidden="true"></i>
                <p className="text-gray-600 text-sm leading-relaxed flex-1 mb-6">{r.text}</p>
                <footer className="flex items-center gap-3 border-t border-gray-200 pt-5">
                  <div className="w-10 h-10 bg-navy flex items-center justify-center rounded-full flex-shrink-0">
                    <i className="fas fa-user text-silver text-sm" aria-hidden="true"></i>
                  </div>
                  <div>
                    <cite className="not-italic font-heading text-navy text-base uppercase tracking-wide block">{r.name}</cite>
                    <span className="text-steel-dark text-xs">{r.loc}</span>
                  </div>
                </footer>
              </blockquote>
            ))}
          </div>
        </div>
      </section>

      {/* ================================================================
          6b. FAQ
          ================================================================ */}
      <section className="bg-silver-lt py-20" id="faq" aria-labelledby="faq-heading">
        <div className="max-w-3xl mx-auto px-4 sm:px-6">
          <div className="text-center mb-14">
            <p className="font-heading text-power-red-dk text-sm tracking-widest uppercase mb-3">Common Questions</p>
            <h2 id="faq-heading" className="font-heading text-navy text-4xl sm:text-5xl uppercase tracking-tight title-accent center">
              Frequently Asked Questions
            </h2>
          </div>

          <div className="space-y-4">
            {FAQS.map((f) => (
              <div key={f.q} className="bg-white border border-gray-200 p-6 rounded-xl">
                <h3 className="font-heading text-navy text-lg uppercase tracking-wide mb-2">{f.q}</h3>
                <p className="text-gray-600 text-sm leading-relaxed">{f.a}</p>
              </div>
            ))}
          </div>
        </div>
      </section>
      <FaqSchema items={FAQS.map((f) => ({ q: f.q, a: f.a }))} />

      {/* ================================================================
          7. CONTACT CTA STRIP
          ================================================================ */}
      <section className="bg-power-red-dk py-16" aria-label="Contact call to action">
        <div className="max-w-5xl mx-auto px-4 sm:px-6 text-center">
          <h2 className="font-heading text-white text-4xl sm:text-5xl uppercase tracking-tight mb-3">
            Ready to Get Started?
          </h2>
          <p className="text-red-100 text-lg mb-10 max-w-xl mx-auto">
            Call or send us a message today for a free, no-obligation estimate. Military &amp; First Responder discounts available — just ask!
          </p>

          <div className="flex flex-wrap justify-center gap-5 mb-8">
            <a href="tel:7174671712" className="flex items-center gap-3 bg-white/10 hover:bg-white/20 border border-white/25 min-h-[54px] px-6 py-3 text-white transition-colors cursor-pointer rounded-lg">
              <i className="fas fa-phone text-xl" aria-hidden="true"></i>
              <div className="text-left">
                <div className="text-xs text-silver uppercase tracking-widest font-heading">Office</div>
                <div className="font-heading text-xl tracking-wide">717-467-1712</div>
              </div>
            </a>
            <a href="tel:7175151504" className="flex items-center gap-3 bg-white/10 hover:bg-white/20 border border-white/25 min-h-[54px] px-6 py-3 text-white transition-colors cursor-pointer rounded-lg">
              <i className="fas fa-mobile-alt text-xl" aria-hidden="true"></i>
              <div className="text-left">
                <div className="text-xs text-silver uppercase tracking-widest font-heading">Cell / Emergency</div>
                <div className="font-heading text-xl tracking-wide">717-515-1504</div>
              </div>
            </a>
          </div>

          <a href="/contact.php" className="inline-flex items-center gap-2 bg-white text-power-red-dk font-heading text-base tracking-widest uppercase px-10 min-h-[52px] py-4 hover:bg-silver-lt transition-colors cursor-pointer shadow-lg rounded-xl">
            <i className="fas fa-paper-plane" aria-hidden="true"></i> Send Us a Message
          </a>
        </div>
      </section>
    </>
  );
}
