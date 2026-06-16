<?php
$page_title       = 'Electrical & Generator Articles for York County Homeowners';
$meta_description = 'Expert articles from GBR Electrical Services, LLC — licensed electrician and Kohler generator dealer in Dover, PA. Tips on generators, outage prep, and electrical safety for York County families.';
$canonical        = 'https://lightsonpa.com/blog.php';
require_once 'includes/header.php';

$articles = [
  [
    'href'    => 'kohler-generator-dealer-pennsylvania.php',
    'date'    => 'June 16, 2026',
    'cat'     => 'Kohler Generators',
    'h1'      => 'Kohler Generator Dealer in PA — What Homeowners Should Know',
    'excerpt' => 'Looking for an authorized Kohler generator dealer in PA? GBR Electrical (Dealer #1506430) explains what authorized dealer status means and how to verify it before you hire anyone.',
    'read'    => '7 min read',
    'icon'    => 'fas fa-certificate',
  ],
  [
    'href'    => 'electrical-services-pennsylvania.php',
    'date'    => 'June 16, 2026',
    'cat'     => 'Electrical Services',
    'h1'      => 'Electrical Services in Pennsylvania — Full Resource Guide',
    'excerpt' => 'A complete guide to GBR Electrical\'s services, service area, and resources for homeowners and businesses across Dover, PA, York County, and Central Pennsylvania.',
    'read'    => '5 min read',
    'icon'    => 'fas fa-bolt',
  ],
  [
    'href'    => 'central-pa-whole-home-generators.php',
    'date'    => 'June 14, 2026',
    'cat'     => 'Generator Installation',
    'h1'      => 'Why Central Pennsylvania Homeowners Are Investing in Whole-Home Generators',
    'excerpt' => 'Central Pennsylvania homeowners are choosing whole-home generators to stay protected during storms and outages. GBR Electrical, a licensed Kohler dealer in Dover, PA, explains why.',
    'read'    => '8 min read',
    'icon'    => 'fas fa-plug-circle-bolt',
  ],
  [
    'href'    => 'kohler-generators-york-county-pa.php',
    'date'    => 'June 14, 2026',
    'cat'     => 'Kohler Generators',
    'h1'      => 'Kohler Generators: Why GBR Electrical Recommends Them for Every York County Home',
    'excerpt' => 'GBR Electrical in Dover, PA recommends Kohler generators for York County homes — American-made quality, superior voltage regulation, and a powerful warranty backed by an authorized dealer.',
    'read'    => '9 min read',
    'icon'    => 'fas fa-certificate',
  ],
  [
    'href'    => 'power-outages-dover-pa-generators.php',
    'date'    => 'June 14, 2026',
    'cat'     => 'Outage Preparedness',
    'h1'      => 'Power Outages Are Getting More Frequent — Here\'s How Dover, PA Families Stay Prepared',
    'excerpt' => 'Power outages in Dover and York County, PA are becoming more frequent and costly. Here\'s what\'s at stake for families — and why a licensed generator installation is the smart solution.',
    'read'    => '9 min read',
    'icon'    => 'fas fa-bolt',
  ],
];
?>

<!-- ================================================================
     PAGE HERO
     ================================================================ -->
<section class="relative bg-navy overflow-hidden dot-grid py-20 md:py-24"
         aria-label="Articles page hero">
  <div class="absolute inset-y-0 left-0 w-1 bg-power-red" aria-hidden="true"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
    <nav aria-label="Breadcrumb" class="mb-6">
      <ol class="flex items-center gap-2 text-steel text-xs font-heading tracking-widest uppercase">
        <li><a href="index.php" class="hover:text-white transition-colors cursor-pointer">Home</a></li>
        <li><i class="fas fa-chevron-right text-[9px]" aria-hidden="true"></i></li>
        <li class="text-silver" aria-current="page">Articles</li>
      </ol>
    </nav>

    <div class="flex items-center gap-3 mb-4">
      <div class="h-px w-10 bg-power-red flex-shrink-0" aria-hidden="true"></div>
      <span class="font-heading text-power-red text-sm tracking-widest uppercase">Expert Electrical Advice</span>
    </div>
    <h1 class="font-heading text-white text-5xl sm:text-6xl uppercase tracking-tight mb-4">
      Generator &amp; Electrical <span class="text-power-red">Articles</span>
    </h1>
    <p class="text-silver/80 text-lg max-w-2xl leading-relaxed">
      Practical information from GBR Electrical Services — licensed electrician and Kohler authorized dealer serving York County, PA for over 40 years.
    </p>
  </div>

  <div class="absolute bottom-0 inset-x-0 pointer-events-none" aria-hidden="true">
    <svg viewBox="0 0 1440 50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full block" style="height:50px">
      <polygon points="0,50 1440,0 1440,50" fill="white"/>
    </svg>
  </div>
</section>


<!-- ================================================================
     ARTICLE GRID
     ================================================================ -->
<section class="bg-white py-16" aria-labelledby="articles-heading">
  <h2 id="articles-heading" class="sr-only">All Articles</h2>
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <?php foreach ($articles as $a): ?>
      <article class="bg-silver-lt border border-gray-200 rounded-xl overflow-hidden card-lift flex flex-col">

        <!-- Card top accent + icon -->
        <div class="bg-navy p-8 flex items-center justify-between">
          <div class="w-14 h-14 bg-power-red/20 flex items-center justify-center rounded-xl">
            <i class="<?php echo $a['icon']; ?> text-power-red text-2xl" aria-hidden="true"></i>
          </div>
          <span class="font-heading text-power-red text-xs tracking-widest uppercase"><?php echo htmlspecialchars($a['cat']); ?></span>
        </div>

        <!-- Content -->
        <div class="p-7 flex flex-col flex-1">
          <div class="flex items-center gap-3 text-steel text-xs mb-4">
            <span><i class="fas fa-calendar text-power-red mr-1" aria-hidden="true"></i><?php echo $a['date']; ?></span>
            <span class="opacity-40">|</span>
            <span><i class="fas fa-clock text-power-red mr-1" aria-hidden="true"></i><?php echo $a['read']; ?></span>
          </div>

          <h2 class="font-heading text-navy text-xl uppercase tracking-wide leading-snug mb-4">
            <?php echo htmlspecialchars($a['h1']); ?>
          </h2>

          <p class="text-steel text-sm leading-relaxed mb-6 flex-1">
            <?php echo htmlspecialchars($a['excerpt']); ?>
          </p>

          <a href="<?php echo $a['href']; ?>"
             class="inline-flex items-center gap-2 font-heading text-sm text-power-red tracking-wider uppercase
                    hover:gap-3 transition-all duration-200 cursor-pointer">
            Read Article <i class="fas fa-arrow-right text-xs" aria-hidden="true"></i>
          </a>
        </div>

      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ================================================================
     BOTTOM CTA
     ================================================================ -->
<section class="bg-navy py-14 dot-grid" aria-label="Contact CTA">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
    <p class="font-heading text-power-red text-sm tracking-widest uppercase mb-3">Ready to Talk?</p>
    <h2 class="font-heading text-white text-4xl sm:text-5xl uppercase tracking-tight mb-4">
      Get a Free Estimate
    </h2>
    <p class="text-silver/80 mb-8 max-w-xl mx-auto">
      GBR Electrical Services, LLC — 5605 Fish and Game Road, Dover, PA 17315<br>
      <a href="tel:7174671712" class="text-power-red hover:text-red-400 transition-colors">717-467-1712</a>
    </p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="contact.php" class="btn-red"><i class="fas fa-paper-plane" aria-hidden="true"></i> Contact Us</a>
      <a href="tel:7174671712" class="btn-outline-white"><i class="fas fa-phone" aria-hidden="true"></i> 717-467-1712</a>
    </div>
  </div>
</section>


<?php require_once 'includes/footer.php'; ?>
