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

  <!-- SEO -->
  <meta name="description" content="<?php echo htmlspecialchars(
      isset($meta_description) ? $meta_description : $default_desc
  ); ?>">
  <meta name="keywords"    content="electrician Dover PA, electrical contractor York County PA, Kohler generator installer, panel upgrade, emergency electrician, generator installation Pennsylvania">
  <meta name="robots"      content="index, follow">
  <title><?php echo isset($page_title)
      ? htmlspecialchars($page_title) . ' | GBR Electrical Services, LLC'
      : 'GBR Electrical Services, LLC – Electrical & Kohler Generator Installation, Dover PA';
  ?></title>

  <!-- Open Graph -->
  <meta property="og:type"        content="website">
  <meta property="og:site_name"   content="GBR Electrical Services, LLC">
  <meta property="og:title"       content="<?php echo isset($page_title) ? htmlspecialchars($page_title) : 'GBR Electrical Services, LLC'; ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars(isset($meta_description) ? $meta_description : $default_desc); ?>">
  <meta property="og:image"       content="assets/images/logo.png">

  <!-- Local-business structured data -->
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"ElectricalContractor",
    "name":"GBR Electrical Services, LLC",
    "image":"assets/images/logo.png",
    "telephone":["717-292-1338","717-515-1504"],
    "email":"gbrelectricalservices@gmail.com",
    "address":{
      "@type":"PostalAddress",
      "streetAddress":"5605 Fish and Game Road",
      "addressLocality":"Dover",
      "addressRegion":"PA",
      "postalCode":"17315",
      "addressCountry":"US"
    },
    "url":"https://gbrelectricalservices.com",
    "openingHoursSpecification":[
      {"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday"],"opens":"07:00","closes":"18:00"}
    ],
    "areaServed":"York County, PA",
    "priceRange":"$$"
  }
  </script>

  <!-- Tailwind CDN + brand colour config -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'navy':         '#050505',
            'navy-light':   '#0a0a0a',
            'navy-mid':     '#111111',
            'navy-card':    '#1a1a1a',
            'power-red':    '#B31217',
            'power-red-dk': '#8f0d11',
            'steel':        '#7A818C',
            'silver':       '#D9DDE3',
            'silver-lt':    '#f0f2f5',
          },
          fontFamily: {
            'heading': ['Oswald','Impact','Arial Narrow','sans-serif'],
            'body':    ['Inter','system-ui','sans-serif'],
          },
          minHeight: { '11':'2.75rem','12':'3rem','13':'3.25rem' },
          height:    { '11':'2.75rem','12':'3rem','13':'3.25rem','18':'4.5rem' },
        },
      },
    };
  </script>

  <!-- Google Fonts: Oswald (headings) + Inter (body) — font-display:swap -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome 6 SVG icons (no emoji as icons — ui-ux-pro-max rule) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous">

  <style>
    /* ── Base ── */
    *, *::before, *::after { box-sizing:border-box; }
    html  { scroll-behavior:smooth; }
    body  { font-family:'Inter',system-ui,sans-serif; background:#fff; color:#1a1a1a; }
    h1,h2,h3,h4,h5,h6 { font-family:'Oswald',Impact,sans-serif; line-height:1.05; }

    /* ── Respect reduced-motion ── */
    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after { animation-duration:.01ms !important; transition-duration:.01ms !important; }
    }

    /* ── Section title accent bar ── */
    .title-accent::after {
      content:''; display:block; width:52px; height:4px;
      background:#B31217; border-radius:2px; margin-top:10px;
    }
    .title-accent.center::after { margin-left:auto; margin-right:auto; }

    /* ── Buttons (min-height 44px for touch targets, rounded corners) ── */
    .btn-red {
      display:inline-flex; align-items:center; justify-content:center; gap:8px;
      min-height:44px;
      background:#B31217; color:#fff;
      font-family:'Oswald',sans-serif; font-size:1rem; font-weight:600;
      letter-spacing:.1em; text-transform:uppercase;
      padding:12px 28px;
      border:2px solid #B31217;
      border-radius:8px;
      text-decoration:none; cursor:pointer;
      transition:background .22s ease, box-shadow .22s ease, transform .18s ease;
    }
    .btn-red:hover {
      background:#8f0d11; border-color:#8f0d11;
      box-shadow:0 8px 28px rgba(179,18,23,.38);
      transform:translateY(-2px);
    }
    .btn-red:focus-visible {
      outline:3px solid #fff; outline-offset:3px;
    }
    .btn-outline-white {
      display:inline-flex; align-items:center; justify-content:center; gap:8px;
      min-height:44px;
      background:transparent; color:#fff;
      font-family:'Oswald',sans-serif; font-size:1rem; font-weight:600;
      letter-spacing:.1em; text-transform:uppercase;
      padding:12px 28px;
      border:2px solid rgba(255,255,255,.5);
      border-radius:8px;
      text-decoration:none; cursor:pointer;
      transition:background .22s ease, border-color .22s ease;
    }
    .btn-outline-white:hover { background:rgba(255,255,255,.1); border-color:#fff; }
    .btn-outline-white:focus-visible { outline:3px solid #B31217; outline-offset:3px; }
    .btn-outline-red {
      display:inline-flex; align-items:center; justify-content:center; gap:8px;
      min-height:44px;
      background:transparent; color:#B31217;
      font-family:'Oswald',sans-serif; font-size:1rem; font-weight:600;
      letter-spacing:.1em; text-transform:uppercase;
      padding:12px 28px;
      border:2px solid #B31217;
      border-radius:8px;
      text-decoration:none; cursor:pointer;
      transition:background .22s ease, color .22s ease;
    }
    .btn-outline-red:hover  { background:#B31217; color:#fff; }
    .btn-outline-red:focus-visible { outline:3px solid #050505; outline-offset:3px; }

    /* ── Card lift ── */
    .card-lift { transition:transform .25s ease, box-shadow .25s ease; }
    .card-lift:hover { transform:translateY(-5px); box-shadow:0 20px 40px rgba(0,0,0,.12); }

    /* ── Dot grid background ── */
    .dot-grid {
      background-image:radial-gradient(circle, rgba(255,255,255,.055) 1px, transparent 1px);
      background-size:28px 28px;
    }

    /* ── Mobile nav slide ── */
    #mobile-nav { max-height:0; overflow:hidden; transition:max-height .35s ease; }
    #mobile-nav.open { max-height:680px; }

    /* ── Focus rings for non-button elements ── */
    a:focus-visible, button:focus-visible, [role="button"]:focus-visible {
      outline:3px solid #B31217; outline-offset:2px;
    }

    /* ── Input focus ── */
    input:focus-visible, textarea:focus-visible, select:focus-visible {
      outline:2px solid #B31217; outline-offset:0;
    }
  </style>
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
        <span><i class="fas fa-envelope text-power-red mr-1.5" aria-hidden="true"></i>gbrelectricalservices@gmail.com</span>
      </div>
      <div class="flex items-center gap-5 text-steel">
        <span class="flex items-center gap-1.5"><i class="fas fa-shield-halved text-power-red" aria-hidden="true"></i> Licensed &amp; Insured</span>
        <span class="flex items-center gap-1.5"><i class="fas fa-certificate text-power-red" aria-hidden="true"></i> Certified Kohler Installer</span>
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
          ['href'=>'index.php#about',      'label'=>'About'],
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
        <a href="tel:7172921338"
           class="flex items-center gap-2 text-silver hover:text-white transition-colors cursor-pointer group min-h-[44px]">
          <div class="w-9 h-9 bg-power-red/15 rounded-full flex items-center justify-center
                      group-hover:bg-power-red/25 transition-colors flex-shrink-0">
            <i class="fas fa-phone text-power-red text-xs" aria-hidden="true"></i>
          </div>
          <div class="leading-none">
            <div class="text-[10px] text-steel uppercase tracking-widest">Call Now</div>
            <div class="font-heading text-sm text-white tracking-wide">717-292-1338</div>
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
        <a href="index.php#about"      class="block px-4 min-h-[44px] flex items-center font-heading text-sm tracking-widest uppercase text-silver hover:text-white hover:bg-white/5 transition-all cursor-pointer">About</a>
        <a href="contact.php"          class="block px-4 min-h-[44px] flex items-center font-heading text-sm tracking-widest uppercase text-silver hover:text-white hover:bg-white/5 transition-all cursor-pointer">Contact</a>
      </div>
      <div class="px-4 pb-5 pt-3 border-t border-white/10 space-y-3">
        <a href="tel:7172921338" class="flex items-center gap-3 min-h-[44px] cursor-pointer">
          <i class="fas fa-phone text-power-red w-4" aria-hidden="true"></i>
          <span class="font-heading tracking-wide text-white">717-292-1338 (Office)</span>
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
