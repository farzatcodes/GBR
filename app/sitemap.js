import { SITE_URL } from '@/lib/site';

const PAGES = [
  { path: '/index.php', lastModified: '2026-06-28', changeFrequency: 'monthly', priority: 1.0 },
  { path: '/services.php', lastModified: '2026-06-14', changeFrequency: 'monthly', priority: 0.9 },
  { path: '/contact.php', lastModified: '2026-06-14', changeFrequency: 'monthly', priority: 0.9 },
  { path: '/generator-maintenance-plans.php', lastModified: '2026-06-16', changeFrequency: 'monthly', priority: 0.9 },
  { path: '/blog.php', lastModified: '2026-06-28', changeFrequency: 'weekly', priority: 0.8 },
  { path: '/electrical-services-pennsylvania.php', lastModified: '2026-06-16', changeFrequency: 'monthly', priority: 0.9 },
  { path: '/kohler-generator-dealer-pennsylvania.php', lastModified: '2026-06-16', changeFrequency: 'monthly', priority: 0.9 },
  { path: '/central-pa-whole-home-generators.php', lastModified: '2026-06-14', changeFrequency: 'monthly', priority: 0.8 },
  { path: '/kohler-generators-york-county-pa.php', lastModified: '2026-06-14', changeFrequency: 'monthly', priority: 0.8 },
  { path: '/power-outages-dover-pa-generators.php', lastModified: '2026-06-14', changeFrequency: 'monthly', priority: 0.8 },
  { path: '/ev-charger-installation-pennsylvania.php', lastModified: '2026-06-28', changeFrequency: 'monthly', priority: 0.8 },
  { path: '/panel-upgrade-older-homes-pa.php', lastModified: '2026-06-28', changeFrequency: 'monthly', priority: 0.8 },
];

export default function sitemap() {
  return PAGES.map(({ path, lastModified, changeFrequency, priority }) => ({
    url: `${SITE_URL}${path}`,
    lastModified,
    changeFrequency,
    priority,
  }));
}
