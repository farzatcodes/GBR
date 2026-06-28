import { SITE_URL } from '@/lib/site';

export default function robots() {
  return {
    rules: {
      userAgent: '*',
      allow: '/',
      disallow: ['/api/contact', '/contact_log.txt', '/spam_log.txt'],
    },
    sitemap: `${SITE_URL}/sitemap.xml`,
  };
}
