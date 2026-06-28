import { NAP, SERVICE_AREAS } from '@/lib/site';

const QUICK_LINKS = [
  { href: '/index.php', label: 'Home' },
  { href: '/services.php', label: 'Services' },
  { href: '/index.php#generators', label: 'Generator Installation' },
  { href: '/index.php#about', label: 'About Us' },
  { href: '/contact.php', label: 'Contact' },
  { href: '/contact.php#form', label: 'Free Estimate' },
];

const SERVICES = [
  'Electrical Repairs',
  'Panel Upgrades',
  'Generator Installation',
  'Wiring & Lighting',
  'Troubleshooting',
  'Residential Electrical',
  'Commercial Electrical',
];

export default function Footer() {
  const year = new Date().getFullYear();

  return (
    <footer className="bg-navy text-silver" aria-label="Site footer">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 py-16">
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8">

          <div className="lg:col-span-1">
            <a href="/index.php" className="inline-block mb-5 cursor-pointer" aria-label="GBR Electrical Services — home">
              <img
                src="/assets/images/logo.svg"
                alt="GBR Electrical Services, LLC logo"
                className="h-12 w-auto object-contain"
                width="240" height="48"
                loading="lazy"
              />
            </a>
            <p className="text-steel text-sm leading-relaxed mb-5">
              Licensed electrical contractor and certified Kohler home generator installer proudly serving Dover, PA and the greater York County area.
            </p>
            <div className="flex flex-wrap gap-2 mb-4">
              <span className="inline-flex items-center gap-1.5 bg-navy-mid border border-white/10 text-silver text-xs font-heading tracking-wide uppercase px-3 py-1.5">
                <i className="fas fa-shield-halved text-power-red" aria-hidden="true"></i>Licensed &amp; Insured
              </span>
              <span className="inline-flex items-center gap-1.5 bg-navy-mid border border-white/10 text-silver text-xs font-heading tracking-wide uppercase px-3 py-1.5">
                <i className="fas fa-certificate text-power-red" aria-hidden="true"></i>Kohler Dealer #1506430
              </span>
            </div>
          </div>

          <div>
            <h3 className="font-heading text-white text-lg tracking-wide uppercase mb-5 title-accent">Quick Links</h3>
            <ul className="space-y-2.5 text-sm" role="list">
              {QUICK_LINKS.map((l) => (
                <li key={l.href}>
                  <a href={l.href} className="flex items-center gap-2 text-steel hover:text-white hover:translate-x-0.5 transition-all duration-200 cursor-pointer">
                    <i className="fas fa-chevron-right text-power-red text-[10px] flex-shrink-0" aria-hidden="true"></i>
                    {l.label}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          <div>
            <h3 className="font-heading text-white text-lg tracking-wide uppercase mb-5 title-accent">Our Services</h3>
            <ul className="space-y-2.5 text-sm text-steel" role="list">
              {SERVICES.map((s) => (
                <li key={s} className="flex items-center gap-2">
                  <i className="fas fa-bolt text-power-red text-[10px] flex-shrink-0" aria-hidden="true"></i>
                  {s}
                </li>
              ))}
            </ul>
          </div>

          <div>
            <h3 className="font-heading text-white text-lg tracking-wide uppercase mb-5 title-accent">Contact Us</h3>
            <address className="not-italic space-y-4 text-sm">
              <div className="flex items-start gap-3">
                <i className="fas fa-map-marker-alt text-power-red mt-0.5 w-4 flex-shrink-0" aria-hidden="true"></i>
                <span className="text-steel leading-snug">{NAP.street}<br />{NAP.city}, {NAP.state} {NAP.zip}</span>
              </div>
              <div className="flex items-center gap-3">
                <i className="fas fa-phone text-power-red w-4 flex-shrink-0" aria-hidden="true"></i>
                <a href={`tel:${NAP.phoneOfficeTel}`} className="text-silver hover:text-white transition-colors cursor-pointer">{NAP.phoneOffice} (Office)</a>
              </div>
              <div className="flex items-center gap-3">
                <i className="fas fa-mobile-alt text-power-red w-4 flex-shrink-0" aria-hidden="true"></i>
                <a href={`tel:${NAP.phoneCellTel}`} className="text-silver hover:text-white transition-colors cursor-pointer">{NAP.phoneCell} (Cell)</a>
              </div>
              <div className="flex items-center gap-3">
                <i className="fas fa-envelope text-power-red w-4 flex-shrink-0" aria-hidden="true"></i>
                <a href={`mailto:${NAP.email}`} className="text-steel hover:text-white transition-colors cursor-pointer break-all">{NAP.email}</a>
              </div>
            </address>
            <div className="mt-6 bg-power-red/10 border border-power-red/30 p-3 flex items-center gap-3">
              <i className="fas fa-circle-exclamation text-power-red flex-shrink-0" aria-hidden="true"></i>
              <div>
                <div className="font-heading text-white text-xs tracking-widest uppercase mb-0.5">24/7 Emergency</div>
                <a href={`tel:${NAP.phoneCellTel}`} className="text-power-red-lt text-sm font-semibold hover:text-red-400 transition-colors cursor-pointer">
                  Call: {NAP.phoneCell}
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div className="border-t border-white/8 bg-navy-light/40">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 py-6">
          <h3 className="font-heading text-steel text-xs tracking-widest uppercase mb-3">Proudly Serving</h3>
          <p className="text-steel text-sm leading-relaxed">
            {SERVICE_AREAS.join(' • ')} &mdash; and all of York County, PA.
          </p>
        </div>
      </div>

      <div className="border-t border-white/8">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 py-5 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-steel">
          <span>&copy; {year} GBR Electrical Services, LLC. All rights reserved.</span>
          <span className="flex items-center gap-1.5">
            <i className="fas fa-bolt text-power-red" aria-hidden="true"></i>
            Dover, PA &bull; York County &bull; Licensed &amp; Insured
          </span>
        </div>
      </div>
    </footer>
  );
}
