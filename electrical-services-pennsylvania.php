<?php
/**
 * GBR Electrical Services, LLC — Electrical Services in Pennsylvania (resource hub)
 */

$page_title       = 'Electrical Services in Pennsylvania';
$meta_description = 'A complete guide to electrical services in Pennsylvania from GBR Electrical Services, LLC — licensed electrician and authorized Kohler dealer serving Dover, PA, York County, and Central Pennsylvania.';
$canonical        = 'https://lightsonpa.com/electrical-services-pennsylvania.php';
$breadcrumbs      = [
  ['name' => 'Home', 'url' => 'index.php'],
  ['name' => 'Electrical Services Pennsylvania'],
];

require_once 'includes/header.php';

$service_links = [
  [
    'icon'    => 'fas fa-screwdriver-wrench',
    'heading' => 'Electrical Repairs',
    'desc'    => 'Fast, code-compliant repairs for outlets, switches, breakers, wiring, and flickering lights.',
    'href'    => 'services.php#repairs',
  ],
  [
    'icon'    => 'fas fa-solar-panel',
    'heading' => 'Panel Upgrades',
    'desc'    => '100A–400A service upgrades, Federal Pacific and Zinsco replacement, subpanels, and EV charger prep.',
    'href'    => 'services.php#panel',
  ],
  [
    'icon'    => 'fas fa-plug-circle-bolt',
    'heading' => 'Generator Installation',
    'desc'    => 'Authorized Kohler dealer — whole-home standby generator sizing, installation, and maintenance plans.',
    'href'    => 'services.php#generator',
  ],
  [
    'icon'    => 'fas fa-lightbulb',
    'heading' => 'Wiring &amp; Lighting',
    'desc'    => 'New construction, remodels, recessed lighting, ceiling fans, and smart home device installation.',
    'href'    => 'services.php#wiring',
  ],
  [
    'icon'    => 'fas fa-magnifying-glass-chart',
    'heading' => 'Troubleshooting',
    'desc'    => 'Root-cause diagnostics for nuisance tripping, hot outlets, and intermittent power loss.',
    'href'    => 'services.php#troubleshooting',
  ],
  [
    'icon'    => 'fas fa-building',
    'heading' => 'Residential &amp; Commercial',
    'desc'    => 'Full-service electrical for homes and businesses, including panel upgrades and tenant fit-outs.',
    'href'    => 'services.php#commercial',
  ],
];

$area_links = [
  'Dover, PA', 'York, PA', 'Dillsburg, PA', 'Mechanicsburg, PA', 'Red Lion, PA',
  'Spring Grove, PA', 'Hanover, PA', 'Manchester, PA', 'New Cumberland, PA',
  'Lewisberry, PA', 'Wrightsville, PA', 'East Berlin, PA', 'Camp Hill, PA', 'Etters, PA',
];

$resource_links = [
  [
    'href' => 'kohler-generator-dealer-pennsylvania.php',
    'cat'  => 'Kohler Generators',
    'h2'   => 'Kohler Generator Dealer in PA — What Homeowners Should Know',
  ],
  [
    'href' => 'kohler-generators-york-county-pa.php',
    'cat'  => 'Kohler Generators',
    'h2'   => 'Why GBR Electrical Recommends Kohler for Every York County Home',
  ],
  [
    'href' => 'central-pa-whole-home-generators.php',
    'cat'  => 'Generator Installation',
    'h2'   => 'Why Central PA Homeowners Are Investing in Whole-Home Generators',
  ],
  [
    'href' => 'power-outages-dover-pa-generators.php',
    'cat'  => 'Outage Preparedness',
    'h2'   => 'How Dover, PA Families Stay Prepared for Power Outages',
  ],
];

$faq_items = [
  [
    'q' => 'What electrical services does GBR Electrical offer in Pennsylvania?',
    'a' => 'GBR Electrical provides electrical repairs, panel upgrades, Kohler generator installation and maintenance, wiring and lighting, troubleshooting and diagnostics, and residential and commercial electrical work across Dover, PA, York County, and Central Pennsylvania.',
  ],
  [
    'q' => 'Is GBR Electrical a licensed electrical contractor in PA?',
    'a' => 'Yes. GBR Electrical Services, LLC is a licensed and insured electrical contractor based in Dover, PA, and is also an authorized Kohler generator dealer (Dealer #1506430).',
  ],
  [
    'q' => 'What areas of Pennsylvania does GBR Electrical serve?',
    'a' => 'GBR Electrical primarily serves York County, PA, including Dover, York, Red Lion, Spring Grove, Hanover, Manchester, Dillsburg, Mechanicsburg, and the surrounding Central Pennsylvania region.',
  ],
  [
    'q' => 'How do I request an estimate for electrical work in PA?',
    'a' => 'Call GBR Electrical at 717-467-1712 or fill out the contact form at lightsonpa.com/contact.php. Estimates are free with no obligation.',
  ],
];
$faq_schema = [
  '@context' => 'https://schema.org',
  '@type'    => 'FAQPage',
  'mainEntity' => array_map(function ($item) {
    return [
      '@type' => 'Question',
      'name'  => $item['q'],
      'acceptedAnswer' => [
        '@type' => 'Answer',
        'text'  => $item['a'],
      ],
    ];
  }, $faq_items),
];
echo '<script type="application/ld+json">' . json_encode($faq_schema, JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT) . '</script>';
?>

<!-- ================================================================
     PAGE HERO
     ================================================================ -->
<section class="relative bg-navy overflow-hidden dot-grid py-20 md:py-24" aria-label="Electrical services Pennsylvania hero">
  <div class="absolute inset-y-0 left-0 w-1 bg-power-red" aria-hidden="true"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
    <nav aria-label="Breadcrumb" class="mb-6">
      <ol class="flex items-center gap-2 text-steel text-xs font-heading tracking-widest uppercase">
        <li><a href="index.php" class="hover:text-white transition-colors cursor-pointer">Home</a></li>
        <li><i class="fas fa-chevron-right text-[9px]" aria-hidden="true"></i></li>
        <li class="text-silver" aria-current="page">Electrical Services Pennsylvania</li>
      </ol>
    </nav>

    <div class="flex flex-wrap items-center gap-3 mb-4">
      <div class="h-px w-10 bg-power-red flex-shrink-0" aria-hidden="true"></div>
      <span class="font-heading text-power-red text-sm tracking-widest uppercase">Licensed Electrical Contractor</span>
      <span class="inline-flex items-center gap-1.5 bg-power-red/15 border border-power-red/35 px-3 py-1 rounded-lg text-power-red font-heading text-xs tracking-widest uppercase">
        <i class="fas fa-certificate" aria-hidden="true"></i> Kohler Authorized Dealer #1506430
      </span>
    </div>
    <h1 class="font-heading text-white text-5xl sm:text-6xl uppercase tracking-tight mb-4">
      Electrical Services in <span class="text-power-red">Pennsylvania</span>
    </h1>
    <p class="text-silver/80 text-lg max-w-2xl leading-relaxed">
      A complete guide to GBR Electrical's services, service area, and resources for homeowners and businesses across Dover, PA, York County, and Central Pennsylvania.
    </p>
  </div>

  <div class="absolute bottom-0 inset-x-0 pointer-events-none" aria-hidden="true">
    <svg viewBox="0 0 1440 50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full block" style="height:50px">
      <polygon points="0,50 1440,0 1440,50" fill="white"/>
    </svg>
  </div>
</section>


<!-- ================================================================
     SERVICES GRID
     ================================================================ -->
<section class="bg-white py-20" aria-labelledby="services-heading">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14">
      <p class="font-heading text-power-red text-sm tracking-widest uppercase mb-3">What We Do</p>
      <h2 id="services-heading" class="font-heading text-navy text-3xl sm:text-4xl uppercase tracking-tight title-accent center">
        Electrical Services Across PA
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($service_links as $s): ?>
      <a href="<?php echo $s['href']; ?>" class="block bg-silver-lt border border-gray-200 rounded-xl p-7 card-lift cursor-pointer">
        <div class="w-14 h-14 bg-power-red/10 flex items-center justify-center rounded-xl mb-5">
          <i class="<?php echo $s['icon']; ?> text-power-red text-2xl" aria-hidden="true"></i>
        </div>
        <h3 class="font-heading text-navy text-xl uppercase tracking-wide mb-2"><?php echo $s['heading']; ?></h3>
        <p class="text-gray-600 text-sm leading-relaxed"><?php echo $s['desc']; ?></p>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ================================================================
     SERVICE AREA
     ================================================================ -->
<section class="bg-silver-lt py-16" aria-labelledby="area-heading">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10">
      <p class="font-heading text-power-red text-sm tracking-widest uppercase mb-3">Service Area</p>
      <h2 id="area-heading" class="font-heading text-navy text-3xl sm:text-4xl uppercase tracking-tight title-accent center">
        Serving Communities Across Central PA
      </h2>
    </div>
    <div class="flex flex-wrap justify-center gap-3 max-w-4xl mx-auto">
      <?php foreach ($area_links as $area): ?>
      <span class="bg-white border border-gray-200 rounded-lg px-4 py-2 text-navy text-sm font-heading tracking-wide uppercase">
        <i class="fas fa-location-dot text-power-red mr-1.5" aria-hidden="true"></i><?php echo htmlspecialchars($area); ?>
      </span>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ================================================================
     RESOURCES / ARTICLES
     ================================================================ -->
<section class="bg-white py-20" aria-labelledby="resources-heading">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14">
      <p class="font-heading text-power-red text-sm tracking-widest uppercase mb-3">Learn More</p>
      <h2 id="resources-heading" class="font-heading text-navy text-3xl sm:text-4xl uppercase tracking-tight title-accent center">
        Resources &amp; Articles
      </h2>
    </div>
    <div class="grid sm:grid-cols-2 gap-6 max-w-4xl mx-auto">
      <?php foreach ($resource_links as $r): ?>
      <a href="<?php echo $r['href']; ?>" class="block border border-gray-200 rounded-xl p-6 hover:border-power-red/50 hover:bg-silver-lt transition-all cursor-pointer">
        <div class="font-heading text-power-red text-xs tracking-widest uppercase mb-2"><?php echo htmlspecialchars($r['cat']); ?></div>
        <div class="font-heading text-navy text-base uppercase leading-snug"><?php echo htmlspecialchars($r['h2']); ?></div>
      </a>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-10">
      <a href="blog.php" class="btn-outline-red"><i class="fas fa-book-open" aria-hidden="true"></i> View All Articles</a>
    </div>
  </div>
</section>


<!-- ================================================================
     FAQ
     ================================================================ -->
<section class="bg-silver-lt py-20" aria-labelledby="faq-heading">
  <div class="max-w-4xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-12">
      <p class="font-heading text-power-red text-sm tracking-widest uppercase mb-3">Common Questions</p>
      <h2 id="faq-heading" class="font-heading text-navy text-3xl sm:text-4xl uppercase tracking-tight title-accent center">
        Frequently Asked Questions
      </h2>
    </div>
    <div class="space-y-4">
      <?php foreach ($faq_items as $item): ?>
      <div class="bg-white border border-gray-200 rounded-xl p-6">
        <h3 class="font-heading text-navy text-base uppercase tracking-wide mb-2"><?php echo htmlspecialchars($item['q']); ?></h3>
        <p class="text-gray-600 text-sm leading-relaxed"><?php echo htmlspecialchars($item['a']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ================================================================
     BOTTOM CTA
     ================================================================ -->
<section class="bg-navy py-16 dot-grid" aria-label="Request an estimate">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
    <p class="font-heading text-power-red text-sm tracking-widest uppercase mb-3">Ready to Work Together?</p>
    <h2 class="font-heading text-white text-4xl sm:text-5xl uppercase tracking-tight mb-4">
      Request Your Free Estimate
    </h2>
    <p class="text-silver/80 mb-4 max-w-xl mx-auto">
      No pressure, no obligation. Describe your project and we'll get back to you promptly with honest pricing.
    </p>
    <p class="text-silver/60 text-sm mb-10">
      <i class="fas fa-medal text-power-red mr-1.5" aria-hidden="true"></i>
      Military &amp; First Responder discounts available — mention it when you reach out!
    </p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="contact.php" class="btn-red"><i class="fas fa-paper-plane" aria-hidden="true"></i> Contact Us</a>
      <a href="tel:7174671712" class="btn-outline-white"><i class="fas fa-phone" aria-hidden="true"></i> 717-467-1712</a>
    </div>
  </div>
</section>


<?php require_once 'includes/footer.php'; ?>
