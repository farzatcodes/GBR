import JsonLd from './JsonLd';
import { SITE_URL } from '@/lib/site';

export default function BreadcrumbSchema({ items }) {
  if (!items || items.length < 2) return null;
  const data = {
    '@context': 'https://schema.org',
    '@type': 'BreadcrumbList',
    itemListElement: items.map((b, i) => ({
      '@type': 'ListItem',
      position: i + 1,
      name: b.name,
      ...(b.url ? { item: `${SITE_URL}${b.url}` } : {}),
    })),
  };
  return <JsonLd data={data} />;
}
