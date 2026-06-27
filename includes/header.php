<?php
/**
 * GBR Electrical Services, LLC — Reusable page header
 *
 * Drop-in usage: set these variables BEFORE including this file:
 *   $page_title        string  e.g. 'Contact Us'
 *   $meta_description  string  page-specific description
 *
 * Logo:  place the actual logo PNG at  assets/images/logo.png
 *        Falls back to  assets/images/logo.svg  automatically.
 *
 * ui-ux-pro-max applied:
 *   ✓ Skip-to-main link (accessibility priority 1)
 *   ✓ All touch targets ≥ 44px (priority 2)
 *   ✓ cursor-pointer on all clickable elements
 *   ✓ Focus-visible rings on every interactive element
 *   ✓ Font preconnect + font-display:swap (priority 3 performance)
 *   ✓ prefers-reduced-motion respected in CSS
 *   ✓ ARIA labels, aria-current, aria-expanded (priority 1)
 *   ✓ Local-Business JSON-LD schema (SEO)
 */

$current_page = basename($_SERVER['PHP_SELF']);

/* Pick the correct logo source (PNG preferred over SVG fallback) */
$logo_src = file_exists(__DIR__ . '/../assets/images/logo.png')
          ? 'assets/images/logo.png'
          : 'assets/images/logo.svg';

$default_desc = 'GBR Electrical Services LLC – Licensed electrical contractor '
              . 'and certified Kohler home generator installer serving Dover, PA '
              . 'and all of York County, PA.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="icon"             type="image/x-icon" href="/favicon.ico">
  <link rel="shortcut icon"    type="image/x-icon" href="/favicon.ico">
  <link rel="apple-touch-icon"                     href="/assets/images/logo.png">

  <?php
  /* ── Canonical & base URL ── */
  $site_url     = 'https://lightsonpa.com';
  $req_path     = ltrim(parse_url($_SERVER['REQUEST_URI'] ?? ('/' . $current_page), PHP_URL_PATH), '/');
  $canonical_url = isset($canonical) ? $canonical : $site_url . '/' . $req_path;
  $og_img_abs   = isset($og_image) ? $og_image : $site_url . '/assets/images/logo.png';
  ?>
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

  <!-- SEO -->
  <meta name="description" content="<?php echo htmlspecialchars(isset($meta_description) ? $meta_description : $default_desc); ?>">
  <meta name="keywords"    content="electrician Dover PA, electrical contractor York County PA, Kohler generator installer York County, whole home generator installation Pennsylvania, backup power York County PA, standby generator Central PA, panel upgrade Dover PA, generator maintenance program PA, military discount electrician PA, authorized Kohler dealer PA">
  <meta name="robots"      content="index, follow">
  <meta name="author"      content="GBR Electrical Services, LLC">

  <!-- Local SEO geo tags (Dover PA 17315) -->
  <meta name="geo.region"    content="US-PA">
  <meta name="geo.placename" content="Dover, PA">
  <meta name="geo.position"  content="40.0048;-76.8413">
  <meta name="ICBM"          content="40.0048, -76.8413">

  <title><?php echo isset($page_title)
      ? htmlspecialchars($page_title) . ' | GBR Electrical Services, LLC'
      : 'GBR Electrical Services, LLC – Kohler Generator Installation & Electrical Contractor, Dover PA';
  ?></title>

  <!-- Open Graph -->
  <meta property="og:type"        content="<?php echo isset($og_type) ? htmlspecialchars($og_type) : 'website'; ?>">
  <meta property="og:site_name"   content="GBR Electrical Services, LLC">
  <meta property="og:url"         content="<?php echo htmlspecialchars($canonical_url); ?>">
  <meta property="og:title"       content="<?php echo isset($page_title) ? htmlspecialchars($page_title) . ' | GBR Electrical' : 'GBR Electrical Services, LLC'; ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars(isset($meta_description) ? $meta_description : $default_desc); ?>">
  <meta property="og:image"       content="<?php echo htmlspecialchars($og_img_abs); ?>">
  <meta property="og:locale"      content="en_US">

  <!-- Twitter Card -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?php echo isset($page_title) ? htmlspecialchars($page_title) : 'GBR Electrical Services, LLC'; ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars(isset($meta_description) ? $meta_description : $default_desc); ?>">
  <meta name="twitter:image"       content="<?php echo htmlspecialchars($og_img_abs); ?>">

  <!-- LocalBusiness + ElectricalContractor Schema (NAP) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": ["ElectricalContractor","LocalBusiness"],
    "name": "GBR Electrical Services, LLC",
    "image": "<?php echo $site_url; ?>/assets/images/logo.png",
    "logo": "<?php echo $site_url; ?>/assets/images/logo.png",
    "telephone": ["717-467-1712","717-515-1504"],
    "email": "info@lightsonpa.com",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "5605 Fish and Game Road",
      "addressLocality": "Dover",
      "addressRegion": "PA",
      "postalCode": "17315",
      "addressCountry": "US"
    },
    "url": "<?php echo $site_url; ?>",
    "openingHoursSpecification": [
      {"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday"],"opens":"07:00","closes":"18:00"},
      {"@type":"OpeningHoursSpecification","dayOfWeek":["Saturday"],"opens":"08:00","closes":"14:00"}
    ],
    "areaServed": [
      {"@type":"City","name":"Dover","addressRegion":"PA"},
      {"@type":"City","name":"York","addressRegion":"PA"},
      {"@type":"City","name":"Dillsburg","addressRegion":"PA"},
      {"@type":"City","name":"Mechanicsburg","addressRegion":"PA"},
      {"@type":"City","name":"Red Lion","addressRegion":"PA"},
      {"@type":"City","name":"Spring Grove","addressRegion":"PA"},
      {"@type":"City","name":"Hanover","addressRegion":"PA"},
      {"@type":"City","name":"Manchester","addressRegion":"PA"},
      {"@type":"City","name":"New Cumberland","addressRegion":"PA"},
      {"@type":"City","name":"Lewisberry","addressRegion":"PA"},
      {"@type":"City","name":"Wrightsville","addressRegion":"PA"},
      {"@type":"City","name":"East Berlin","addressRegion":"PA"},
      {"@type":"City","name":"Camp Hill","addressRegion":"PA"},
      {"@type":"City","name":"Etters","addressRegion":"PA"},
      {"@type":"County","name":"York County","addressRegion":"PA"},
      {"@type":"State","name":"Pennsylvania"}
    ],
    "priceRange": "$$",
    "description": "Licensed electrical contractor and authorized Kohler generator dealer serving Dover, PA and York County for over 40 years. Military and First Responder discounts available.",
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Electrical Services",
      "itemListElement": [
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Whole-Home Standby Generator Installation"}},
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Generator Maintenance Programs"}},
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Electrical Panel Upgrades"}},
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Electrical Repairs"}},
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Wiring and Lighting"}}
      ]
    }
  }
  </script>

  <!-- Tailwind CSS — locally built & minified (see package.json build:css) -->
  <link rel="stylesheet" href="assets/css/tailwind.css">

  <!-- Google Fonts: Barlow Condensed (headings) + Inter (body) — font-display:swap.
       Loaded async (media=print swapped to all on load) so this 3rd-party
       stylesheet doesn't block initial render; font-display:swap already
       handles the fallback-to-webfont swap with no layout shift. -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,700;0,800;1,700&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,700;0,800;1,700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet"></noscript>

  <!-- Font Awesome 6 SVG icons (no emoji as icons — ui-ux-pro-max rule).
       Loaded async — the full icon set is ~150KB of font data for a
       handful of decorative glyphs and isn't needed for first paint. -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        crossorigin="anonymous" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous"></noscript>

</head>
<body>

<!-- ================================================================
     SKIP LINK — screen reader & keyboard accessibility (priority 1)
     ================================================================ -->
<a href="#main-content"
   class="sr-only focus:not-sr-only focus:fixed focus:top-2 focus:left-2 focus:z-[9999]
          focus:bg-power-red focus:text-white focus:font-heading focus:text-sm
          focus:tracking-widest focus:uppercase focus:px-4 focus:py-3 focus:rounded-sm">
  Skip to main content
</a>

<!-- ================================================================
     STICKY HEADER
     ================================================================ -->
<!-- ================================================================
     ANNOUNCEMENT BAR — military discounts + 40 years
     ================================================================ -->
<div class="bg-power-red text-white text-center py-2 px-4" role="complementary" aria-label="Special offers and announcements">
  <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-center gap-x-6 gap-y-1 text-xs font-heading tracking-wider uppercase">
    <span class="flex items-center gap-1.5">
      <i class="fas fa-medal" aria-hidden="true"></i>
      Military &amp; First Responder Discounts Available
    </span>
    <span class="hidden sm:inline opacity-60">|</span>
    <span class="flex items-center gap-1.5">
      <i class="fas fa-award" aria-hidden="true"></i>
      Proudly Serving York County for 40 Years
    </span>
    <span class="hidden sm:inline opacity-60">|</span>
    <span class="flex items-center gap-1.5">
      <i class="fas fa-certificate" aria-hidden="true"></i>
      Kohler Authorized Dealer
    </span>
  </div>
</div>

<header id="site-header" class="bg-navy sticky top-0 z-50 transition-shadow duration-300">

  <!-- Top info bar (desktop only) -->
  <div class="hidden lg:block bg-navy-light border-b border-white/5">
    <div class="max-w-7xl mx-auto px-6 h-9 flex items-center justify-between text-xs">
      <div class="flex items-center gap-6 text-steel">
        <span><i class="fas fa-map-marker-alt text-power-red mr-1.5" aria-hidden="true"></i>5605 Fish and Game Rd, Dover, PA 17315</span>
        <span><i class="fas fa-envelope text-power-red mr-1.5" aria-hidden="true"></i>info@lightsonpa.com</span>
      </div>
      <div class="flex items-center gap-5 text-steel">
        <span class="flex items-center gap-1.5"><i class="fas fa-shield-halved text-power-red" aria-hidden="true"></i> Licensed &amp; Insured</span>
        <span class="flex items-center gap-1.5"><i class="fas fa-certificate text-power-red" aria-hidden="true"></i> Kohler Authorized Dealer #1506430</span>
      </div>
    </div>
  </div>

  <!-- Main nav -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <nav class="flex items-center justify-between py-3" aria-label="Main navigation">

      <!-- ── Logo ── -->
      <a href="index.php" class="flex-shrink-0 cursor-pointer" aria-label="GBR Electrical Services, LLC — home page">
        <img src="<?php echo htmlspecialchars($logo_src); ?>"
             alt="GBR Electrical Services, LLC"
             class="h-11 sm:h-12 w-auto object-contain"
             width="240" height="48"
             loading="eager">
      </a>

      <!-- ── Desktop nav links ── -->
      <ul class="hidden md:flex items-center gap-0.5" role="list">
        <?php
        $nav = [
          ['href'=>'index.php',           'label'=>'Home'],
          ['href'=>'services.php',         'label'=>'Services'],
          ['href'=>'index.php#generators', 'label'=>'Generators'],
          ['href'=>'blog.php',             'label'=>'Articles'],
          ['href'=>'contact.php',          'label'=>'Contact'],
        ];
        foreach ($nav as $item):
          $active = (basename($item['href']) === $current_page && !str_contains($item['href'],'#'));
          $cls    = $active ? 'text-white font-bold' : 'text-silver/80 hover:text-white';
        ?>
        <li>
          <a href="<?php echo $item['href']; ?>"
             class="font-heading text-sm tracking-widest uppercase px-3 py-2.5 inline-block transition-colors duration-200 cursor-pointer <?php echo $cls; ?>"
             <?php if($active) echo 'aria-current="page"'; ?>>
            <?php echo $item['label']; ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>

      <!-- ── Desktop call + CTA ── -->
      <div class="hidden md:flex items-center gap-3">
        <a href="tel:7174671712"
           class="flex items-center gap-2 text-silver hover:text-white transition-colors cursor-pointer group min-h-[44px]">
          <div class="w-9 h-9 bg-power-red/15 rounded-full flex items-center justify-center
                      group-hover:bg-power-red/25 transition-colors flex-shrink-0">
            <i class="fas fa-phone text-power-red text-xs" aria-hidden="true"></i>
          </div>
          <div class="leading-none">
            <div class="text-[10px] text-steel uppercase tracking-widest">Call Now</div>
            <div class="font-heading text-sm text-white tracking-wide">717-467-1712</div>
          </div>
        </a>
        <a href="contact.php" class="btn-red text-sm py-2.5 px-5 min-h-[44px]">Request Service</a>
      </div>

      <!-- ── Mobile hamburger ── -->
      <button id="menu-btn"
              class="md:hidden p-2 min-w-[44px] min-h-[44px] flex items-center justify-center text-white cursor-pointer"
              aria-label="Open navigation menu" aria-expanded="false" aria-controls="mobile-nav">
        <svg id="icon-burger" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h12"/>
        </svg>
        <svg id="icon-x" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>

    </nav>

    <!-- Mobile nav drawer -->
    <div id="mobile-nav" role="navigation" aria-label="Mobile navigation">
      <div class="border-t border-white/10 py-3 space-y-0.5">
        <a href="index.php"            class="block px-4 min-h-[44px] flex items-center font-heading text-sm tracking-widest uppercase text-silver hover:text-white hover:bg-white/5 transition-all cursor-pointer">Home</a>
        <a href="services.php"         class="block px-4 min-h-[44px] flex items-center font-heading text-sm tracking-widest uppercase text-silver hover:text-white hover:bg-white/5 transition-all cursor-pointer">Services</a>
        <a href="index.php#generators" class="block px-4 min-h-[44px] flex items-center font-heading text-sm tracking-widest uppercase text-silver hover:text-white hover:bg-white/5 transition-all cursor-pointer">Generators</a>
        <a href="blog.php"             class="block px-4 min-h-[44px] flex items-center font-heading text-sm tracking-widest uppercase text-silver hover:text-white hover:bg-white/5 transition-all cursor-pointer">Articles</a>
        <a href="contact.php"          class="block px-4 min-h-[44px] flex items-center font-heading text-sm tracking-widest uppercase text-silver hover:text-white hover:bg-white/5 transition-all cursor-pointer">Contact</a>
      </div>
      <div class="px-4 pb-5 pt-3 border-t border-white/10 space-y-3">
        <a href="tel:7174671712" class="flex items-center gap-3 min-h-[44px] cursor-pointer">
          <i class="fas fa-phone text-power-red w-4" aria-hidden="true"></i>
          <span class="font-heading tracking-wide text-white">717-467-1712 (Office)</span>
        </a>
        <a href="tel:7175151504" class="flex items-center gap-3 min-h-[44px] cursor-pointer">
          <i class="fas fa-mobile-alt text-power-red w-4" aria-hidden="true"></i>
          <span class="font-heading tracking-wide text-white">717-515-1504 (Cell / Emergency)</span>
        </a>
        <a href="contact.php" class="btn-red w-full mt-2 justify-center">Request Service</a>
      </div>
    </div>

  </div><!-- /container -->

</header>

<main id="main-content" tabindex="-1"><!-- main-content anchor for skip link -->

<script>
(function(){
  var btn  = document.getElementById('menu-btn');
  var nav  = document.getElementById('mobile-nav');
  var burg = document.getElementById('icon-burger');
  var x    = document.getElementById('icon-x');

  btn.addEventListener('click', function(){
    var open = nav.classList.toggle('open');
    btn.setAttribute('aria-expanded', open);
    burg.classList.toggle('hidden', open);
    x.classList.toggle('hidden', !open);
  });

  /* Close drawer when any link inside is clicked */
  nav.querySelectorAll('a').forEach(function(a){
    a.addEventListener('click', function(){
      nav.classList.remove('open');
      btn.setAttribute('aria-expanded','false');
      burg.classList.remove('hidden');
      x.classList.add('hidden');
    });
  });

  /* Deepen shadow on scroll */
  window.addEventListener('scroll', function(){
    document.getElementById('site-header').style.boxShadow =
      window.scrollY > 40 ? '0 4px 30px rgba(0,0,0,.5)' : '';
  }, {passive:true});
})();
</script>
