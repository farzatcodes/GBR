export default function Breadcrumbs({ items }) {
  return (
    <nav aria-label="Breadcrumb" className="mb-6">
      <ol className="flex items-center gap-2 text-steel text-xs font-heading tracking-widest uppercase flex-wrap">
        {items.map((b, i) => {
          const isLast = i === items.length - 1;
          return (
            <li key={b.name} className="flex items-center gap-2">
              {i > 0 && <i className="fas fa-chevron-right text-[9px]" aria-hidden="true"></i>}
              {isLast || !b.url ? (
                <span className="text-silver" aria-current={isLast ? 'page' : undefined}>{b.name}</span>
              ) : (
                <a href={b.url} className="hover:text-white transition-colors cursor-pointer">{b.name}</a>
              )}
            </li>
          );
        })}
      </ol>
    </nav>
  );
}
