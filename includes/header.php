<?php
/**
 * GBR Electrical Services, LLC
 * Reusable page header — outputs complete <html><head> + sticky nav
 *
 * Variables consumed (set before including this file):
 *   $page_title        string  — browser tab / <title> prefix
 *   $meta_description  string  — <meta name="description">
 */

$current_page = basename($_SERVER['PHP_SELF']);
$default_desc = 'GBR Electrical Services LLC – Licensed electrical contractor '
              . 'and certified Kohler home generator installer serving Dover, PA '
              . 'and surrounding York County communities.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ── SEO meta ── -->
    <meta name="description" content="<?php echo htmlspecialchars(
        isset($meta_description) ? $meta_description : $default_desc
    ); ?>">
    <meta name="keywords"    content="electrician Dover PA, electrical contractor York County, Kohler generator installer Pennsylvania, panel upgrade, emergency electrician, residential commercial electrical">
    <meta name="robots"      content="index, follow">

    <title><?php echo isset($page_title)
        ? htmlspecialchars($page_title) . ' | GBR Electrical Services, LLC'
        : 'GBR Electrical Services, LLC – Electrical & Kohler Generator Installation, Dover PA';
    ?></title>

    <!-- ── Open Graph ── -->
    <meta property="og:type"        content="website">
    <meta property="og:site_name"   content="GBR Electrical Services, LLC">
    <meta property="og:title"       content="<?php echo isset($page_title) ? htmlspecialchars($page_title) : 'GBR Electrical Services, LLC'; ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars(isset($meta_description) ? $meta_description : $default_desc); ?>">

    <!-- ── Local business schema ── -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ElectricalContractor",
      "name": "GBR Electrical Services, LLC",
      "telephone": ["717-292-1338", "717-515-1504"],
      "email": "gbrelectricalservices@gmail.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "5605 Fish and Game Road",
        "addressLocality": "Dover",
        "addressRegion": "PA",
        "postalCode": "17315",
        "addressCountry": "US"
      },
      "url": "https://gbrelectricalservices.com",
      "openingHours": "Mo-Fr 07:00-18:00",
      "areaServed": "York County, PA"
    }
    </script>

    <!-- ── Tailwind CSS CDN ── -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      /* Brand colour palette + font stack registered as Tailwind utilities */
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'navy':         '#0B1320',
              'navy-light':   '#0f1a2e',
              'navy-mid':     '#162138',
              'navy-card':    '#1b2845',
              'power-red':    '#B31217',
              'power-red-dk': '#8f0d11',
              'steel':        '#7A818C',
              'silver':       '#D9DDE3',
              'silver-lt':    '#f0f2f5',
            },
            fontFamily: {
              'heading': ['Oswald', 'Impact', 'Arial Narrow', 'sans-serif'],
              'body':    ['Inter', 'system-ui', 'sans-serif'],
            },
          },
        },
      };
    </script>

    <!-- ── Google Fonts: Oswald (headings) + Inter (body) ── -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- ── Font Awesome 6 icons ── -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous">

    <style>
        /* ── Global reset / base ── */
        *, *::before, *::after { box-sizing: border-box; }
        html  { scroll-behavior: smooth; }
        body  { font-family: 'Inter', system-ui, sans-serif; background:#fff; color:#1a1a1a; }
        h1,h2,h3,h4,h5,h6 { font-family:'Oswald', Impact, sans-serif; line-height:1.05; }

        /* ── Section title red-bar accent ── */
        .title-accent::after {
            content:'';
            display:block;
            width:52px; height:4px;
            background:#B31217;
            border-radius:2px;
            margin-top:10px;
        }
        .title-accent.center::after { margin-left:auto; margin-right:auto; }

        /* ── CTA buttons ── */
        .btn-red {
            display:inline-flex; align-items:center; justify-content:center; gap:8px;
            background:#B31217; color:#fff;
            font-family:'Oswald',sans-serif; font-size:1rem; font-weight:600;
            letter-spacing:.1em; text-transform:uppercase;
            padding:14px 30px;
            border:2px solid #B31217;
            text-decoration:none;
            transition:all .22s ease;
            cursor:pointer;
        }
        .btn-red:hover {
            background:#8f0d11; border-color:#8f0d11;
            box-shadow:0 8px 28px rgba(179,18,23,.38);
            transform:translateY(-2px);
        }
        .btn-outline-white {
            display:inline-flex; align-items:center; justify-content:center; gap:8px;
            background:transparent; color:#fff;
            font-family:'Oswald',sans-serif; font-size:1rem; font-weight:600;
            letter-spacing:.1em; text-transform:uppercase;
            padding:14px 30px;
            border:2px solid rgba(255,255,255,.45);
            text-decoration:none;
            transition:all .22s ease;
            cursor:pointer;
        }
        .btn-outline-white:hover {
            background:rgba(255,255,255,.08);
            border-color:#fff;
        }
        .btn-outline-red {
            display:inline-flex; align-items:center; justify-content:center; gap:8px;
            background:transparent; color:#B31217;
            font-family:'Oswald',sans-serif; font-size:1rem; font-weight:600;
            letter-spacing:.1em; text-transform:uppercase;
            padding:14px 30px;
            border:2px solid #B31217;
            text-decoration:none;
            transition:all .22s ease;
            cursor:pointer;
        }
        .btn-outline-red:hover {
            background:#B31217; color:#fff;
        }

        /* ── Card hover lift ── */
        .card-lift { transition:transform .25s ease, box-shadow .25s ease; }
        .card-lift:hover { transform:translateY(-5px); box-shadow:0 20px 40px rgba(0,0,0,.12); }

        /* ── Subtle dot-grid background (evokes circuit boards) ── */
        .dot-grid {
            background-image: radial-gradient(circle, rgba(255,255,255,.06) 1px, transparent 1px);
            background-size: 28px 28px;
        }

        /* ── Mobile nav slide-in ── */
        #mobile-nav { max-height:0; overflow:hidden; transition:max-height .35s ease; }
        #mobile-nav.open { max-height:640px; }

        /* ── Diagonal section divider ── */
        .clip-angle-down { clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%); }
        .clip-angle-up   { clip-path: polygon(0 15%, 100% 0, 100% 100%, 0 100%); }
    </style>
</head>
<body>

<!-- ================================================================
     HEADER — sticky, deep navy, logo + desktop nav + mobile toggle
     ================================================================ -->
<header id="site-header" class="bg-navy sticky top-0 z-50 shadow-md">

    <!-- ── Slim top info bar (desktop only) ── -->
    <div class="hidden lg:block bg-navy-light border-b border-white/5 text-xs">
        <div class="max-w-7xl mx-auto px-6 h-9 flex items-center justify-between">
            <div class="flex items-center gap-6 text-steel">
                <span><i class="fas fa-map-marker-alt text-power-red mr-1"></i>5605 Fish and Game Rd, Dover, PA 17315</span>
                <span><i class="fas fa-envelope text-power-red mr-1"></i>gbrelectricalservices@gmail.com</span>
            </div>
            <div class="flex items-center gap-5 text-steel">
                <span><i class="fas fa-shield-halved text-power-red mr-1"></i>Licensed &amp; Insured</span>
                <span><i class="fas fa-certificate text-power-red mr-1"></i>Certified Kohler Installer</span>
            </div>
        </div>
    </div>

    <!-- ── Main nav bar ── -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <nav class="flex items-center justify-between h-18 py-3" aria-label="Main navigation">

            <!-- Logo -->
            <a href="index.php" class="flex items-center gap-3 group flex-shrink-0" aria-label="GBR Electrical Services – home">
                <div class="w-11 h-11 bg-power-red flex items-center justify-center flex-shrink-0 transition-colors group-hover:bg-power-red-dk">
                    <i class="fas fa-bolt text-white text-lg" aria-hidden="true"></i>
                </div>
                <div class="leading-tight">
                    <div class="font-heading text-white text-xl tracking-wide uppercase font-bold leading-none">GBR Electrical</div>
                    <div class="text-steel text-[10px] tracking-widest uppercase mt-0.5">Services, LLC</div>
                </div>
            </a>

            <!-- Desktop nav links -->
            <ul class="hidden md:flex items-center gap-1" role="list">
                <?php
                $nav = [
                    ['href'=>'index.php',           'label'=>'Home'],
                    ['href'=>'services.php',         'label'=>'Services'],
                    ['href'=>'index.php#generators', 'label'=>'Generators'],
                    ['href'=>'index.php#about',      'label'=>'About'],
                    ['href'=>'contact.php',          'label'=>'Contact'],
                ];
                foreach ($nav as $item):
                    $active = (basename($item['href']) === $current_page);
                    $cls    = $active
                        ? 'text-white font-bold'
                        : 'text-silver/80 hover:text-white';
                ?>
                <li>
                    <a href="<?php echo $item['href']; ?>"
                       class="font-heading text-sm tracking-widest uppercase px-3 py-2 transition-colors <?php echo $cls; ?>"
                       <?php if($active) echo 'aria-current="page"'; ?>>
                        <?php echo $item['label']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>

            <!-- Desktop call + CTA -->
            <div class="hidden md:flex items-center gap-4">
                <a href="tel:7172921338" class="flex items-center gap-2.5 text-silver hover:text-white transition-colors group">
                    <div class="w-9 h-9 bg-power-red/15 rounded-full flex items-center justify-center group-hover:bg-power-red/25 transition-colors">
                        <i class="fas fa-phone text-power-red text-xs" aria-hidden="true"></i>
                    </div>
                    <div class="leading-none">
                        <div class="text-[10px] text-steel uppercase tracking-widest">Call Now</div>
                        <div class="font-heading text-sm text-white tracking-wide">717-292-1338</div>
                    </div>
                </a>
                <a href="contact.php" class="btn-red text-sm py-2.5 px-5">Request Service</a>
            </div>

            <!-- Mobile hamburger -->
            <button id="menu-btn"
                    class="md:hidden p-2 text-white focus:outline-none focus:ring-2 focus:ring-power-red rounded"
                    aria-label="Toggle navigation" aria-expanded="false" aria-controls="mobile-nav">
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
                <a href="index.php"             class="block px-4 py-3 font-heading text-sm tracking-widest uppercase text-silver hover:text-white hover:bg-white/5 transition-all">Home</a>
                <a href="services.php"          class="block px-4 py-3 font-heading text-sm tracking-widest uppercase text-silver hover:text-white hover:bg-white/5 transition-all">Services</a>
                <a href="index.php#generators"  class="block px-4 py-3 font-heading text-sm tracking-widest uppercase text-silver hover:text-white hover:bg-white/5 transition-all">Generators</a>
                <a href="index.php#about"       class="block px-4 py-3 font-heading text-sm tracking-widest uppercase text-silver hover:text-white hover:bg-white/5 transition-all">About</a>
                <a href="contact.php"           class="block px-4 py-3 font-heading text-sm tracking-widest uppercase text-silver hover:text-white hover:bg-white/5 transition-all">Contact</a>
            </div>
            <div class="px-4 pb-5 pt-3 border-t border-white/10 space-y-3">
                <a href="tel:7172921338" class="flex items-center gap-3 text-silver">
                    <i class="fas fa-phone text-power-red w-4" aria-hidden="true"></i>
                    <span class="font-heading tracking-wide text-white">717-292-1338</span>
                </a>
                <a href="tel:7175151504" class="flex items-center gap-3 text-silver">
                    <i class="fas fa-mobile-alt text-power-red w-4" aria-hidden="true"></i>
                    <span class="font-heading tracking-wide text-white">717-515-1504</span>
                </a>
                <a href="contact.php" class="btn-red w-full mt-2">Request Service</a>
            </div>
        </div>
    </div><!-- /max-w-7xl -->

</header>

<script>
/* Mobile menu toggle */
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
    /* Deepen shadow on scroll */
    window.addEventListener('scroll', function(){
        document.getElementById('site-header').style.boxShadow =
            window.scrollY > 50 ? '0 4px 30px rgba(0,0,0,.5)' : '';
    }, {passive:true});
})();
</script>
