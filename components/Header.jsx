'use client';

import { useEffect, useRef, useState } from 'react';
import { usePathname } from 'next/navigation';
import { NAV_LINKS, NAP } from '@/lib/site';

export default function Header() {
  const currentPath = usePathname();
  const [open, setOpen] = useState(false);
  const [scrolled, setScrolled] = useState(false);
  const navRef = useRef(null);

  useEffect(() => {
    function onScroll() {
      setScrolled(window.scrollY > 40);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    return () => window.removeEventListener('scroll', onScroll);
  }, []);

  function closeMenu() {
    setOpen(false);
  }

  return (
    <>
      <div className="bg-power-red-dk text-white text-center py-2 px-4" role="complementary" aria-label="Special offers and announcements">
        <div className="max-w-7xl mx-auto flex flex-wrap items-center justify-center gap-x-6 gap-y-1 text-xs font-heading tracking-wider uppercase">
          <span className="flex items-center gap-1.5">
            <i className="fas fa-medal" aria-hidden="true"></i>
            Military &amp; First Responder Discounts Available
          </span>
          <span className="hidden sm:inline opacity-60">|</span>
          <span className="flex items-center gap-1.5">
            <i className="fas fa-award" aria-hidden="true"></i>
            Proudly Serving York County for 40 Years
          </span>
          <span className="hidden sm:inline opacity-60">|</span>
          <span className="flex items-center gap-1.5">
            <i className="fas fa-certificate" aria-hidden="true"></i>
            Kohler Authorized Dealer
          </span>
        </div>
      </div>

      <header
        id="site-header"
        className="bg-navy sticky top-0 z-50 transition-shadow duration-300"
        style={scrolled ? { boxShadow: '0 4px 30px rgba(0,0,0,.5)' } : undefined}
      >
        <div className="hidden lg:block bg-navy-light border-b border-white/5">
          <div className="max-w-7xl mx-auto px-6 h-9 flex items-center justify-between text-xs">
            <div className="flex items-center gap-6 text-steel">
              <span><i className="fas fa-map-marker-alt text-power-red mr-1.5" aria-hidden="true"></i>{NAP.street}, {NAP.city}, {NAP.state} {NAP.zip}</span>
              <span><i className="fas fa-envelope text-power-red mr-1.5" aria-hidden="true"></i>{NAP.email}</span>
            </div>
            <div className="flex items-center gap-5 text-steel">
              <span className="flex items-center gap-1.5"><i className="fas fa-shield-halved text-power-red" aria-hidden="true"></i> Licensed &amp; Insured</span>
              <span className="flex items-center gap-1.5"><i className="fas fa-certificate text-power-red" aria-hidden="true"></i> Kohler Authorized Dealer #1506430</span>
            </div>
          </div>
        </div>

        <div className="max-w-7xl mx-auto px-4 sm:px-6">
          <nav className="flex items-center justify-between py-3" aria-label="Main navigation">
            <a href="/index.php" className="flex-shrink-0 cursor-pointer" aria-label="GBR Electrical Services, LLC — home page">
              <img
                src="/assets/images/logo.webp"
                alt="GBR Electrical Services, LLC"
                className="h-11 sm:h-12 w-auto object-contain"
                width="240" height="48"
              />
            </a>

            <ul className="hidden md:flex items-center gap-0.5" role="list">
              {NAV_LINKS.map((item) => {
                const active = item.href === currentPath && !item.href.includes('#');
                const cls = active ? 'text-white font-bold' : 'text-silver/80 hover:text-white';
                return (
                  <li key={item.href}>
                    <a
                      href={item.href}
                      className={`font-heading text-sm tracking-widest uppercase px-3 py-2.5 inline-block transition-colors duration-200 cursor-pointer ${cls}`}
                      aria-current={active ? 'page' : undefined}
                    >
                      {item.label}
                    </a>
                  </li>
                );
              })}
            </ul>

            <div className="hidden md:flex items-center gap-3">
              <a href={`tel:${NAP.phoneOfficeTel}`} className="flex items-center gap-2 text-silver hover:text-white transition-colors cursor-pointer group min-h-[44px]">
                <div className="w-9 h-9 bg-power-red/15 rounded-full flex items-center justify-center group-hover:bg-power-red/25 transition-colors flex-shrink-0">
                  <i className="fas fa-phone text-power-red text-xs" aria-hidden="true"></i>
                </div>
                <div className="leading-none">
                  <div className="text-[10px] text-steel uppercase tracking-widest">Call Now</div>
                  <div className="font-heading text-sm text-white tracking-wide">{NAP.phoneOffice}</div>
                </div>
              </a>
              <a href="/contact.php" className="btn-red text-sm py-2.5 px-5 min-h-[44px]">Request Service</a>
            </div>

            <button
              id="menu-btn"
              className="md:hidden p-2 min-w-[44px] min-h-[44px] flex items-center justify-center text-white cursor-pointer"
              aria-label="Open navigation menu"
              aria-expanded={open}
              aria-controls="mobile-nav"
              onClick={() => setOpen((v) => !v)}
            >
              <svg className={`w-6 h-6 ${open ? 'hidden' : ''}`} fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16M4 18h12" />
              </svg>
              <svg className={`w-6 h-6 ${open ? '' : 'hidden'}`} fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </nav>

          <div id="mobile-nav" ref={navRef} className={open ? 'open' : ''} role="navigation" aria-label="Mobile navigation">
            <div className="border-t border-white/10 py-3 space-y-0.5">
              {NAV_LINKS.map((item) => (
                <a
                  key={item.href}
                  href={item.href}
                  onClick={closeMenu}
                  className="block px-4 min-h-[44px] flex items-center font-heading text-sm tracking-widest uppercase text-silver hover:text-white hover:bg-white/5 transition-all cursor-pointer"
                >
                  {item.label}
                </a>
              ))}
            </div>
            <div className="px-4 pb-5 pt-3 border-t border-white/10 space-y-3">
              <a href={`tel:${NAP.phoneOfficeTel}`} onClick={closeMenu} className="flex items-center gap-3 min-h-[44px] cursor-pointer">
                <i className="fas fa-phone text-power-red w-4" aria-hidden="true"></i>
                <span className="font-heading tracking-wide text-white">{NAP.phoneOffice} (Office)</span>
              </a>
              <a href={`tel:${NAP.phoneCellTel}`} onClick={closeMenu} className="flex items-center gap-3 min-h-[44px] cursor-pointer">
                <i className="fas fa-mobile-alt text-power-red w-4" aria-hidden="true"></i>
                <span className="font-heading tracking-wide text-white">{NAP.phoneCell} (Cell / Emergency)</span>
              </a>
              <a href="/contact.php" onClick={closeMenu} className="btn-red w-full mt-2 justify-center">Request Service</a>
            </div>
          </div>
        </div>
      </header>
    </>
  );
}
