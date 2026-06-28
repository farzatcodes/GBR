import { findImage } from '@/lib/images';
import { buildMetadata } from '@/lib/site';
import BreadcrumbSchema from '@/components/BreadcrumbSchema';
import Breadcrumbs from '@/components/Breadcrumbs';

export const metadata = buildMetadata({
  title: 'Whole House Generator Maintenance Program — Plans & Pricing',
  description:
    "GBR Electrical's Whole House Generator Maintenance Program keeps your Kohler standby generator ready year-round. Compare Essential, Advanced, and Premium Care plans for Dover, PA and York County homes.",
  path: '/generator-maintenance-plans.php',
});

const BREADCRUMBS = [
  { name: 'Home', url: '/index.php' },
  { name: 'Generators', url: '/index.php#generators' },
  { name: 'Maintenance Plans' },
];

const PLANS = [
  {
    tier: 'GOOD',
    name: 'Essential Care',
    price: '225',
    desc: 'Reliable annual protection for peace of mind.',
    popular: false,
    icon: 'fas fa-shield',
    includes: [
      'Annual service visit',
      'Oil & filter change',
      'Air filter inspection',
      'Spark plug inspection',
      'System performance test',
      'Battery test',
      'Visual inspection',
    ],
    bottom: 'Reliable protection. Built for peace of mind.',
  },
  {
    tier: 'BETTER',
    name: 'Advanced Care',
    price: '325',
    desc: 'Enhanced coverage and priority service.',
    popular: true,
    icon: 'fas fa-shield-halved',
    includes: [
      'Everything in GOOD',
      'Priority scheduling',
      'Coolant system check',
      'Fuel system inspection',
      'Battery load test',
      'Transfer switch test',
      'Firmware update check',
      'Detailed service report',
    ],
    bottom: 'More value. More coverage. Better protection.',
  },
  {
    tier: 'BEST',
    name: 'Premium Care',
    price: '425',
    desc: 'Maximum protection. Premium support.',
    popular: false,
    icon: 'fas fa-crown',
    includes: [
      'Everything in BETTER',
      'Bi-annual service visits (2x per year)',
      'Extended runtime test',
      'Transfer switch load test',
      'Fuel quality test & stabilization',
      'Battery replacement (if needed)',
      '24/7 Priority support',
      '10% off repairs & parts',
    ],
    bottom: 'The ultimate protection. Because your home deserves the best.',
  },
];

const BENEFITS = [
  { icon: 'fas fa-user-gear', label: 'Expert Technicians' },
  { icon: 'fas fa-award', label: 'Genuine Parts & Quality Service' },
  { icon: 'fas fa-gauge-high', label: 'Peak Performance Year-Round' },
  { icon: 'fas fa-bolt', label: 'Emergency Ready' },
  { icon: 'fas fa-circle-check', label: 'No Surprises. Just Reliability.' },
];

export default function GeneratorMaintenancePlansPage() {
  const heroBg = findImage('/assets/images/hero-maintenance.jpg');

  return (
    <>
      <BreadcrumbSchema items={BREADCRUMBS} />

      {/* ================================================================
          PAGE HERO
          ================================================================ */}
      <section className="relative bg-navy overflow-hidden dot-grid py-20 md:py-28" aria-label="Generator maintenance program hero">

        {heroBg && (
          <div className="absolute inset-0" aria-hidden="true">
            <img src={heroBg} alt="" className="w-full h-full object-cover object-center" loading="eager"
                 width="1920" height="1080" />
            <div className="absolute inset-0 bg-navy/85"></div>
          </div>
        )}

        <div className="absolute inset-y-0 left-0 w-1 bg-power-red" aria-hidden="true"></div>

        <div className="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
          <Breadcrumbs items={BREADCRUMBS} />

          <div className="flex items-center gap-3 mb-4">
            <div className="h-px w-10 bg-power-red flex-shrink-0" aria-hidden="true"></div>
            <span className="font-heading text-power-red text-sm tracking-widest uppercase">GBR Electrical Services, LLC</span>
          </div>

          <h1 className="font-heading text-white text-4xl sm:text-5xl md:text-6xl uppercase tracking-tight mb-5 max-w-4xl">
            Whole House Generator <span className="text-power-red">Maintenance Program</span>
          </h1>

          <p className="font-heading text-silver text-lg sm:text-xl tracking-wide uppercase mb-4">
            Reliable Power. Peace of Mind. Year After Year.
          </p>

          <p className="text-silver/80 text-lg max-w-2xl leading-relaxed">
            &ldquo;Regular maintenance keeps your generator ready so your home stays powered when it matters most.&rdquo;
          </p>
        </div>

        <div className="absolute bottom-0 inset-x-0 pointer-events-none" aria-hidden="true">
          <svg viewBox="0 0 1440 50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" className="w-full block" style={{ height: '50px' }}>
            <polygon points="0,50 1440,0 1440,50" fill="#f4f5f6" />
          </svg>
        </div>
      </section>


      {/* ================================================================
          TRUST BADGE BAR
          ================================================================ */}
      <section className="bg-silver-lt py-5" aria-label="Trust statement">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 text-center">
          <p className="font-heading text-navy text-sm sm:text-base tracking-widest uppercase">
            <i className="fas fa-bolt text-power-red mr-2" aria-hidden="true"></i>
            Power You Can Count On. Service You Can Trust.
          </p>
        </div>
      </section>


      {/* ================================================================
          PRICING TIERS
          ================================================================ */}
      <section className="bg-white py-20" aria-labelledby="pricing-heading">
        <div className="max-w-7xl mx-auto px-4 sm:px-6">

          <div className="text-center mb-14">
            <p className="font-heading text-power-red text-sm tracking-widest uppercase mb-3">Choose Your Plan</p>
            <h2 id="pricing-heading" className="font-heading text-navy text-3xl sm:text-4xl uppercase tracking-tight title-accent center">
              Generator Maintenance Plans &amp; Pricing
            </h2>
          </div>

          <div className="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-6 items-start">
            {PLANS.map((p) => (
              <div
                key={p.name}
                className={`relative rounded-xl overflow-hidden flex flex-col h-full ${
                  p.popular
                    ? 'bg-navy border-2 border-power-red lg:-translate-y-4 shadow-2xl'
                    : 'bg-silver-lt border border-gray-200'
                }`}
              >

                {p.popular && (
                  <div className="absolute top-0 inset-x-0 bg-power-red text-white text-center text-xs font-heading tracking-widest uppercase py-2">
                    <i className="fas fa-star mr-1.5" aria-hidden="true"></i>Most Popular
                  </div>
                )}

                <div className={`p-8 flex flex-col flex-1 ${p.popular ? 'pt-14' : ''}`}>

                  <div className="flex items-center gap-3 mb-5">
                    <div className={`w-12 h-12 flex items-center justify-center rounded-xl flex-shrink-0 ${p.popular ? 'bg-power-red/20' : 'bg-power-red/10'}`}>
                      <i className={`${p.icon} text-power-red text-xl`} aria-hidden="true"></i>
                    </div>
                    <div>
                      <div className="font-heading text-power-red text-xs tracking-widest uppercase">{p.tier}</div>
                      <div className={`font-heading text-xl uppercase tracking-wide ${p.popular ? 'text-white' : 'text-navy'}`}>{p.name}</div>
                    </div>
                  </div>

                  <div className="mb-2">
                    <span className={`font-heading text-4xl ${p.popular ? 'text-white' : 'text-navy'}`}>${p.price}</span>
                    <span className={`font-heading text-sm tracking-widest uppercase ${p.popular ? 'text-silver/70' : 'text-steel-dark'}`}> / Year</span>
                  </div>

                  <p className={`text-sm leading-relaxed mb-6 ${p.popular ? 'text-silver/80' : 'text-steel-dark'}`}>
                    {p.desc}
                  </p>

                  <ul className="space-y-3 mb-8 flex-1" role="list">
                    {p.includes.map((inc) => (
                      <li key={inc} className={`flex items-start gap-2.5 text-sm ${p.popular ? 'text-silver/90' : 'text-steel-dark'}`}>
                        <i className="fas fa-check text-power-red mt-0.5 flex-shrink-0" aria-hidden="true"></i>
                        <span>{inc}</span>
                      </li>
                    ))}
                  </ul>

                  <a
                    href={`/contact.php?service=Generator+Maintenance+Plan+(${encodeURIComponent(p.name)})`}
                    className={`${p.popular ? 'btn-red' : 'btn-outline-red'} w-full justify-center mb-4`}
                  >
                    Get Your Plan Today
                  </a>

                  <p className={`text-xs text-center italic ${p.popular ? 'text-silver/60' : 'text-steel-dark'}`}>
                    &ldquo;{p.bottom}&rdquo;
                  </p>

                </div>
              </div>
            ))}
          </div>

        </div>
      </section>


      {/* ================================================================
          BENEFITS / FEATURES ROW
          ================================================================ */}
      <section className="bg-silver-lt py-16" aria-label="Program benefits">
        <div className="max-w-7xl mx-auto px-4 sm:px-6">
          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
            {BENEFITS.map((b) => (
              <div key={b.label} className="bg-white border border-gray-200 rounded-xl p-6 text-center card-lift">
                <div className="w-12 h-12 bg-power-red/10 flex items-center justify-center rounded-full mx-auto mb-4">
                  <i className={`${b.icon} text-power-red text-lg`} aria-hidden="true"></i>
                </div>
                <p className="font-heading text-navy text-sm tracking-wide uppercase leading-snug">{b.label}</p>
              </div>
            ))}
          </div>
        </div>
      </section>


      {/* ================================================================
          BOTTOM CTA
          ================================================================ */}
      <section className="bg-navy py-16 dot-grid relative overflow-hidden" aria-label="Maintenance plan call to action">
        <div className="absolute bottom-0 right-0 w-[600px] h-[600px] pointer-events-none opacity-[0.05]"
             style={{ background: 'radial-gradient(circle,#FC0D15 0%,transparent 70%)' }} aria-hidden="true"></div>

        <div className="max-w-4xl mx-auto px-4 sm:px-6 text-center relative z-10">
          <h2 className="font-heading text-white text-3xl sm:text-4xl md:text-5xl uppercase tracking-tight mb-2">
            Don&rsquo;t Wait For The Next Outage.
          </h2>
          <h3 className="font-heading text-power-red text-2xl sm:text-3xl md:text-4xl uppercase tracking-tight mb-8">
            Keep Your Generator Ready.
          </h3>

          <div className="flex flex-wrap justify-center gap-4 mb-5">
            <a href="/contact.php?service=Generator+Maintenance+Plan" className="btn-red">
              <i className="fas fa-calendar-check" aria-hidden="true"></i> Get Your Plan Today!
            </a>
            <a href="tel:7174671712" className="btn-outline-white">
              <i className="fas fa-phone" aria-hidden="true"></i> 717-467-1712
            </a>
          </div>

          <p className="text-silver/70 font-heading text-sm tracking-widest uppercase">
            Stay powered. Stay protected.
          </p>
        </div>
      </section>
    </>
  );
}
