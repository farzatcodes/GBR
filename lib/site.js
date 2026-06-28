export const SITE_URL = 'https://lightsonpa.com';
export const SITE_NAME = 'GBR Electrical Services, LLC';
export const DEFAULT_DESCRIPTION =
  'GBR Electrical Services LLC – Licensed electrical contractor ' +
  'and certified Kohler home generator installer serving Dover, PA ' +
  'and all of York County, PA.';

export const NAP = {
  street: '5605 Fish and Game Road',
  city: 'Dover',
  state: 'PA',
  zip: '17315',
  phoneOffice: '717-467-1712',
  phoneOfficeTel: '7174671712',
  phoneCell: '717-515-1504',
  phoneCellTel: '7175151504',
  email: 'info@lightsonpa.com',
};

export const SERVICE_AREAS = [
  'Dover', 'York', 'Dillsburg', 'Mechanicsburg', 'Red Lion', 'Spring Grove',
  'Hanover', 'Manchester', 'New Cumberland', 'Lewisberry', 'Wrightsville',
  'East Berlin', 'Camp Hill', 'Etters',
];

export const NAV_LINKS = [
  { href: '/index.php', label: 'Home' },
  { href: '/services.php', label: 'Services' },
  { href: '/index.php#generators', label: 'Generators' },
  { href: '/blog.php', label: 'Articles' },
  { href: '/contact.php', label: 'Contact' },
];

export const LOCAL_BUSINESS_SCHEMA = {
  '@context': 'https://schema.org',
  '@type': ['Electrician', 'LocalBusiness'],
  name: SITE_NAME,
  image: `${SITE_URL}/assets/images/logo.svg`,
  logo: `${SITE_URL}/assets/images/logo.svg`,
  telephone: [NAP.phoneOffice, NAP.phoneCell],
  email: NAP.email,
  address: {
    '@type': 'PostalAddress',
    streetAddress: NAP.street,
    addressLocality: NAP.city,
    addressRegion: NAP.state,
    postalCode: NAP.zip,
    addressCountry: 'US',
  },
  url: SITE_URL,
  openingHoursSpecification: [
    { '@type': 'OpeningHoursSpecification', dayOfWeek: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'], opens: '07:00', closes: '18:00' },
    { '@type': 'OpeningHoursSpecification', dayOfWeek: ['Saturday'], opens: '08:00', closes: '14:00' },
  ],
  areaServed: [
    ...SERVICE_AREAS.map((name) => ({ '@type': 'City', name, addressRegion: 'PA' })),
    { '@type': 'County', name: 'York County', addressRegion: 'PA' },
    { '@type': 'State', name: 'Pennsylvania' },
  ],
  priceRange: '$$',
  description: 'Licensed electrical contractor and authorized Kohler generator dealer serving Dover, PA and York County for over 40 years. Military and First Responder discounts available.',
  hasOfferCatalog: {
    '@type': 'OfferCatalog',
    name: 'Electrical Services',
    itemListElement: [
      { '@type': 'Offer', itemOffered: { '@type': 'Service', name: 'Whole-Home Standby Generator Installation' } },
      { '@type': 'Offer', itemOffered: { '@type': 'Service', name: 'Generator Maintenance Programs' } },
      { '@type': 'Offer', itemOffered: { '@type': 'Service', name: 'Electrical Panel Upgrades' } },
      { '@type': 'Offer', itemOffered: { '@type': 'Service', name: 'Electrical Repairs' } },
      { '@type': 'Offer', itemOffered: { '@type': 'Service', name: 'Wiring and Lighting' } },
    ],
  },
};

export function buildMetadata({ title, description, path, ogType = 'website' }) {
  const canonical = `${SITE_URL}${path}`;
  return {
    title,
    description: description || DEFAULT_DESCRIPTION,
    alternates: { canonical },
    openGraph: {
      type: ogType,
      siteName: SITE_NAME,
      url: canonical,
      title: `${title} | GBR Electrical`,
      description: description || DEFAULT_DESCRIPTION,
      images: [`${SITE_URL}/assets/images/logo.svg`],
      locale: 'en_US',
    },
    twitter: {
      card: 'summary_large_image',
      title,
      description: description || DEFAULT_DESCRIPTION,
      images: [`${SITE_URL}/assets/images/logo.svg`],
    },
  };
}
