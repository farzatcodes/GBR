import { Barlow_Condensed, Inter } from 'next/font/google';
import './globals.css';
import '../styles/fontawesome.css';
import Header from '@/components/Header';
import Footer from '@/components/Footer';
import JsonLd from '@/components/JsonLd';
import { SITE_NAME, DEFAULT_DESCRIPTION, LOCAL_BUSINESS_SCHEMA } from '@/lib/site';

const barlow = Barlow_Condensed({
  weight: ['700', '800'],
  style: ['normal', 'italic'],
  subsets: ['latin'],
  variable: '--font-heading',
  display: 'swap',
});

const inter = Inter({
  weight: ['300', '400', '500', '600', '700'],
  subsets: ['latin'],
  variable: '--font-body',
  display: 'swap',
});

export const metadata = {
  metadataBase: new URL('https://lightsonpa.com'),
  title: {
    default: `${SITE_NAME} – Kohler Generator Installation & Electrical Contractor, Dover PA`,
    template: `%s | ${SITE_NAME}`,
  },
  description: DEFAULT_DESCRIPTION,
  keywords: 'electrician Dover PA, electrical contractor York County PA, Kohler generator installer York County, whole home generator installation Pennsylvania, backup power York County PA, standby generator Central PA, panel upgrade Dover PA, generator maintenance program PA, military discount electrician PA, authorized Kohler dealer PA',
  authors: [{ name: SITE_NAME }],
  robots: 'index, follow',
  icons: {
    icon: '/favicon.ico',
    apple: '/assets/images/logo.svg',
  },
  other: {
    'geo.region': 'US-PA',
    'geo.placename': 'Dover, PA',
    'geo.position': '40.0048;-76.8413',
    'ICBM': '40.0048, -76.8413',
  },
};

export default function RootLayout({ children }) {
  return (
    <html lang="en" className={`${barlow.variable} ${inter.variable}`}>
      <body>
        <a
          href="#main-content"
          className="sr-only focus:not-sr-only focus:fixed focus:top-2 focus:left-2 focus:z-[9999]
                     focus:bg-power-red focus:text-white focus:font-heading focus:text-sm
                     focus:tracking-widest focus:uppercase focus:px-4 focus:py-3 focus:rounded-sm"
        >
          Skip to main content
        </a>
        <Header />
        <main id="main-content" tabIndex={-1}>
          {children}
        </main>
        <Footer />
        <JsonLd data={LOCAL_BUSINESS_SCHEMA} />
      </body>
    </html>
  );
}
