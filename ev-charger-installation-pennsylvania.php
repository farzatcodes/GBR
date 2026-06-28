<?php
$page_title       = 'EV Charger Installation in PA — Home Charger Wiring & Panel Upgrades';
$meta_description = 'EV charger installation in Dover, PA and York County from GBR Electrical Services, LLC — dedicated circuit wiring, panel capacity review, and permitting for Level 2 home EV chargers.';
$canonical        = 'https://lightsonpa.com/ev-charger-installation-pennsylvania.php';
$og_type          = 'article';
$article_date     = '2026-06-28';
$breadcrumbs      = [
  ['name' => 'Home',                'url' => 'index.php'],
  ['name' => 'Articles',            'url' => 'blog.php'],
  ['name' => 'EV Charger Installation'],
];

require_once 'includes/header.php';

$schema = [
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'EV Charger Installation in PA — What Homeowners Need to Know About Panel Capacity, Permits, and Wiring',
  'description'     => $meta_description,
  'datePublished'   => $article_date,
  'dateModified'    => $article_date,
  'url'             => $canonical,
  'mainEntityOfPage'=> ['@type'=>'WebPage','@id'=>$canonical],
  'author'          => ['@type'=>'Organization','name'=>'GBR Electrical Services, LLC','url'=>'https://lightsonpa.com'],
  'publisher'       => [
    '@type'  => 'Organization',
    'name'   => 'GBR Electrical Services, LLC',
    'logo'   => ['@type'=>'ImageObject','url'=>'https://lightsonpa.com/assets/images/logo.png'],
    'url'    => 'https://lightsonpa.com',
    'telephone' => '717-467-1712',
    'address'=> ['@type'=>'PostalAddress','streetAddress'=>'5605 Fish and Game Road','addressLocality'=>'Dover','addressRegion'=>'PA','postalCode'=>'17315'],
  ],
  'keywords' => 'EV charger installation PA, electric vehicle charger installer Dover PA, Level 2 home charger installation York County, EV charger panel upgrade Pennsylvania',
];
echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT) . '</script>';

$faq_items = [
  [
    'q' => 'Do I need a panel upgrade to install a home EV charger?',
    'a' => 'Not always. It depends on your panel\'s existing capacity and current electrical load. A 200A panel with moderate existing load often has room for a dedicated EV circuit; an older 100A panel already running close to capacity usually needs an upgrade first. A load calculation during the site visit determines which situation applies to your home.',
  ],
  [
    'q' => 'Does GBR Electrical install Level 2 home EV chargers?',
    'a' => 'Yes. GBR Electrical installs dedicated circuits for Level 2 home EV chargers, including panel capacity review, breaker and wiring sizing, and permitting, for homes throughout Dover, PA and York County.',
  ],
  [
    'q' => 'Do I need a permit to install an EV charger in Pennsylvania?',
    'a' => 'Most PA municipalities require an electrical permit for a new dedicated circuit, including EV charger installations. Requirements vary by township, so GBR handles permitting as part of the installation rather than leaving it for the homeowner to track down.',
  ],
  [
    'q' => 'Can I add an EV charger and a backup generator to the same panel?',
    'a' => 'Yes, with a proper load calculation accounting for both. This is one of the most common reasons York County homeowners upgrade an older panel — adding either a generator transfer switch or an EV charger circuit can be the point where existing capacity runs out, and planning for both at once avoids a second project later.',
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
     ARTICLE HERO
     ================================================================ -->
<section class="relative bg-navy overflow-hidden dot-grid py-20 md:py-24" aria-label="Article hero">
  <div class="absolute inset-y-0 left-0 w-1 bg-power-red" aria-hidden="true"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
    <nav aria-label="Breadcrumb" class="mb-6">
      <ol class="flex items-center flex-wrap gap-2 text-steel text-xs font-heading tracking-widest uppercase">
        <li><a href="index.php" class="hover:text-white transition-colors">Home</a></li>
        <li><i class="fas fa-chevron-right text-[9px]" aria-hidden="true"></i></li>
        <li><a href="blog.php" class="hover:text-white transition-colors">Articles</a></li>
        <li><i class="fas fa-chevron-right text-[9px]" aria-hidden="true"></i></li>
        <li class="text-silver" aria-current="page">EV Charger Installation</li>
      </ol>
    </nav>

    <div class="flex flex-wrap items-center gap-3 mb-4">
      <div class="h-px w-10 bg-power-red flex-shrink-0" aria-hidden="true"></div>
      <span class="font-heading text-power-red text-sm tracking-widest uppercase">Licensed Electrical Contractor</span>
    </div>

    <h1 class="font-heading text-white text-4xl sm:text-5xl xl:text-6xl uppercase tracking-tight mb-6 max-w-4xl leading-tight">
      EV Charger Installation in <span class="text-power-red">PA</span> — Panel Capacity, Permits &amp; Wiring
    </h1>

    <div class="flex flex-wrap items-center gap-5 text-steel text-sm">
      <span class="flex items-center gap-2"><i class="fas fa-building text-power-red" aria-hidden="true"></i>GBR Electrical Services, LLC</span>
      <span class="flex items-center gap-2"><i class="fas fa-calendar text-power-red" aria-hidden="true"></i>June 28, 2026</span>
      <span class="flex items-center gap-2"><i class="fas fa-clock text-power-red" aria-hidden="true"></i>7 min read</span>
      <span class="flex items-center gap-2"><i class="fas fa-map-marker-alt text-power-red" aria-hidden="true"></i>Dover, PA — York County</span>
    </div>
  </div>

  <div class="absolute bottom-0 inset-x-0 pointer-events-none" aria-hidden="true">
    <svg viewBox="0 0 1440 50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full block" style="height:50px">
      <polygon points="0,50 1440,0 1440,50" fill="white"/>
    </svg>
  </div>
</section>


<!-- ================================================================
     ARTICLE BODY
     ================================================================ -->
<div class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-3 gap-12">

      <!-- ── Main Content ── -->
      <article class="lg:col-span-2" aria-label="Article content">

        <div class="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
          <p>A standard wall outlet can charge an EV, but slowly — most homeowners switching to an electric vehicle want a <strong>Level 2 home charger</strong>, which charges several times faster and requires its own dedicated 240-volt circuit. Whether your home can support that circuit without further work depends entirely on your existing electrical panel: its total capacity, what's already running on it, and how much room is left.</p>
          <p>GBR Electrical Services, LLC installs dedicated EV charger circuits for homes throughout Dover, PA and York County, starting with a panel capacity review rather than assuming any panel can simply absorb another large circuit.</p>
        </div>

        <!-- TOC -->
        <div class="bg-silver-lt border border-gray-200 rounded-xl p-6 mb-10">
          <h2 class="font-heading text-navy text-lg uppercase tracking-wide mb-4">In This Article</h2>
          <ol class="space-y-2 text-sm">
            <?php
            $toc = [
              '#involved'  => 'What\'s Involved in Installing a Home EV Charger',
              '#capacity'  => 'Does Your Panel Have Capacity?',
              '#permits'   => 'Permits in Pennsylvania',
              '#process'   => 'GBR\'s Installation Process',
              '#generator' => 'Pairing an EV Charger With a Backup Generator',
              '#faq'       => 'Frequently Asked Questions',
            ];
            $n = 1;
            foreach ($toc as $anchor => $label): ?>
            <li>
              <a href="<?php echo $anchor; ?>" class="flex items-start gap-2 text-power-red hover:underline cursor-pointer">
                <span class="font-heading font-bold flex-shrink-0"><?php echo $n++; ?>.</span>
                <?php echo htmlspecialchars($label); ?>
              </a>
            </li>
            <?php endforeach; ?>
          </ol>
        </div>

        <h2 id="involved" class="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">What's Involved in Installing a Home EV Charger</h2>
        <div class="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
          <p>A Level 2 EV charger install centers on running a dedicated 240-volt circuit from your panel to the charger location — typically the garage or driveway — sized to the charger manufacturer's specifications, on its own breaker. The work includes confirming available panel capacity, running the wiring, installing the breaker and either a hardwired connection or a NEMA outlet depending on the charger, and verifying the installation against code before it's energized.</p>
          <p>The part homeowners often don't anticipate is how much the answer depends on the panel itself, not just the charger. A charger purchase is straightforward; the electrical work behind it isn't always.</p>
        </div>

        <h2 id="capacity" class="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">Does Your Panel Have Capacity?</h2>
        <div class="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
          <p>Every panel has a maximum amperage rating, and every circuit already wired into it — HVAC, range, dryer, sump pump, and the rest — draws a share of that capacity. Adding a 40–50 amp EV circuit on top of an already-loaded 100A panel often isn't possible without an upgrade. A panel that's 200A with moderate existing load frequently has the headroom already.</p>
          <p>This is why GBR starts with a load calculation rather than quoting a charger install sight-unseen. If the panel has room, the EV circuit is a contained, predictable job. If it doesn't, a panel upgrade becomes part of the same conversation — better to know that up front than after a charger is already purchased.</p>
        </div>

        <h2 id="permits" class="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">Permits in Pennsylvania</h2>
        <div class="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
          <p>Most Pennsylvania municipalities require an electrical permit for a new dedicated circuit, and EV charger circuits aren't an exception. Exact requirements vary by township, which is part of why DIY or unpermitted EV charger installs are a bad idea even when the wiring itself isn't complicated — an unpermitted installation can complicate an insurance claim or a future home sale. GBR handles permitting as part of the installation rather than leaving it for the homeowner to research township by township.</p>
        </div>

        <h2 id="process" class="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">GBR's Installation Process</h2>
        <div class="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
          <p>The process starts with a free consultation and load calculation at your home. From there, GBR provides an itemized estimate that's clear about whether a panel upgrade is needed, handles permitting with your local municipality, runs the dedicated circuit and installs the breaker, and tests the completed circuit before the charger goes live. The same team that reviews your panel handles the installation — no handoff between an estimator and a separate install crew.</p>
        </div>

        <h2 id="generator" class="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">Pairing an EV Charger With a Backup Generator</h2>
        <div class="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
          <p>Homeowners planning both an EV charger and a <a href="services.php#generator" class="text-power-red hover:underline font-semibold">whole-home backup generator</a> should plan them together rather than as two separate projects months apart. Both add meaningful load to a panel, and a single load calculation that accounts for both avoids paying for a panel upgrade twice. As an <a href="kohler-generator-dealer-pennsylvania.php" class="text-power-red hover:underline font-semibold">authorized Kohler generator dealer</a>, GBR can size a system that accounts for an EV charger already on the panel, or vice versa.</p>
        </div>

        <!-- Inline CTA -->
        <div class="bg-power-red-dk rounded-xl p-8 text-center mb-10">
          <h3 class="font-heading text-white text-2xl uppercase tracking-wide mb-3">Get a Free EV Charger Installation Quote</h3>
          <p class="text-red-100 text-sm mb-6">Panel capacity review included. No pressure, honest pricing.</p>
          <div class="flex flex-wrap justify-center gap-4">
            <a href="contact.php?service=EV+Charger+Installation" class="inline-flex items-center gap-2 bg-white text-power-red-dk font-heading text-sm uppercase tracking-widest px-6 min-h-[44px] py-3 hover:bg-silver-lt transition-colors rounded-lg cursor-pointer">
              <i class="fas fa-calendar-check" aria-hidden="true"></i> Schedule Consultation
            </a>
            <a href="tel:7174671712" class="inline-flex items-center gap-2 border-2 border-white text-white font-heading text-sm uppercase tracking-widest px-6 min-h-[44px] py-3 hover:bg-white/10 transition-colors rounded-lg cursor-pointer">
              <i class="fas fa-phone" aria-hidden="true"></i> 717-467-1712
            </a>
          </div>
        </div>

        <!-- NAP -->
        <div class="border border-gray-200 rounded-xl p-7 bg-silver-lt">
          <div class="flex items-start gap-5">
            <div class="w-14 h-14 bg-power-red/10 flex items-center justify-center rounded-xl flex-shrink-0">
              <i class="fas fa-plug-circle-bolt text-power-red text-2xl" aria-hidden="true"></i>
            </div>
            <div>
              <h3 class="font-heading text-navy text-xl uppercase tracking-wide mb-2">About GBR Electrical Services, LLC</h3>
              <address class="not-italic text-gray-600 text-sm leading-relaxed space-y-1">
                <p>Licensed electrical contractor and authorized Kohler generator dealer serving Dover, PA and all of York County for over 40 years. Military &amp; First Responder discounts available.</p>
                <p class="mt-3">
                  <strong class="text-navy">GBR Electrical Services, LLC</strong><br>
                  5605 Fish and Game Road, Dover, PA 17315<br>
                  <a href="tel:7174671712" class="text-power-red hover:underline">717-467-1712</a> (Office) &nbsp;|&nbsp;
                  <a href="tel:7175151504" class="text-power-red hover:underline">717-515-1504</a> (Cell/Emergency)<br>
                  <a href="mailto:info@lightsonpa.com" class="text-power-red hover:underline">info@lightsonpa.com</a>
                </p>
              </address>
            </div>
          </div>
        </div>

        <!-- FAQ -->
        <div id="faq" class="mt-10">
          <h2 class="font-heading text-navy text-3xl uppercase tracking-tight mb-6">Frequently Asked Questions</h2>
          <div class="space-y-4">
            <?php foreach ($faq_items as $item): ?>
            <div class="border border-gray-200 rounded-xl p-6">
              <h3 class="font-heading text-navy text-base uppercase tracking-wide mb-2"><?php echo htmlspecialchars($item['q']); ?></h3>
              <p class="text-gray-600 text-sm leading-relaxed"><?php echo htmlspecialchars($item['a']); ?></p>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Related articles -->
        <div class="mt-10">
          <h3 class="font-heading text-navy text-2xl uppercase tracking-wide mb-5">Related Articles</h3>
          <div class="grid sm:grid-cols-2 gap-4">
            <a href="kohler-generator-dealer-pennsylvania.php" class="block border border-gray-200 rounded-xl p-5 hover:border-power-red/50 hover:bg-silver-lt transition-all cursor-pointer">
              <div class="font-heading text-power-red text-xs tracking-widest uppercase mb-2">Kohler Generators</div>
              <div class="font-heading text-navy text-base uppercase leading-snug">Kohler Generator Dealer in PA — What Homeowners Should Know</div>
            </a>
            <a href="electrical-services-pennsylvania.php" class="block border border-gray-200 rounded-xl p-5 hover:border-power-red/50 hover:bg-silver-lt transition-all cursor-pointer">
              <div class="font-heading text-power-red text-xs tracking-widest uppercase mb-2">Electrical Services</div>
              <div class="font-heading text-navy text-base uppercase leading-snug">Electrical Services in Pennsylvania — Full Resource Guide</div>
            </a>
          </div>
        </div>

      </article>


      <!-- ── Sticky Sidebar ── -->
      <aside class="lg:col-span-1" aria-label="Sidebar">
        <div class="lg:sticky lg:top-36 space-y-5">

          <div class="bg-navy rounded-xl p-7 relative overflow-hidden">
            <div class="absolute top-0 inset-x-0 h-1 bg-power-red rounded-t-xl" aria-hidden="true"></div>
            <div class="w-14 h-14 bg-power-red/15 flex items-center justify-center rounded-xl mb-5">
              <i class="fas fa-plug-circle-bolt text-power-red text-2xl" aria-hidden="true"></i>
            </div>
            <h3 class="font-heading text-white text-xl uppercase tracking-wide mb-1">EV Charger Installation</h3>
            <p class="text-power-red font-heading text-xs tracking-widest uppercase mb-3">Panel Review Included</p>
            <p class="text-steel text-sm leading-relaxed mb-5">Dedicated circuit wiring, panel capacity review, and permitting for Level 2 home EV chargers.</p>
            <a href="contact.php?service=EV+Charger+Installation" class="btn-red w-full justify-center text-sm mb-3">
              <i class="fas fa-plug-circle-bolt" aria-hidden="true"></i> Get a Free Quote
            </a>
            <a href="tel:7174671712"
               class="flex items-center justify-center gap-2 border border-white/20 hover:border-white/40 hover:bg-white/5 transition-all text-silver font-heading text-sm tracking-widest uppercase min-h-[44px] py-3 cursor-pointer rounded-lg">
              <i class="fas fa-phone" aria-hidden="true"></i> 717-467-1712
            </a>
          </div>

          <div class="border border-gray-200 rounded-xl p-6 bg-silver-lt">
            <h3 class="font-heading text-navy text-base uppercase tracking-wide mb-4">Contact GBR Electrical</h3>
            <address class="not-italic space-y-3 text-sm">
              <div class="flex items-start gap-3">
                <i class="fas fa-map-marker-alt text-power-red mt-0.5 flex-shrink-0 w-4" aria-hidden="true"></i>
                <span class="text-gray-600">5605 Fish and Game Road<br>Dover, PA 17315</span>
              </div>
              <div class="flex items-center gap-3">
                <i class="fas fa-phone text-power-red flex-shrink-0 w-4" aria-hidden="true"></i>
                <a href="tel:7174671712" class="text-power-red hover:underline font-semibold">717-467-1712</a>
              </div>
              <div class="flex items-center gap-3">
                <i class="fas fa-mobile-alt text-power-red flex-shrink-0 w-4" aria-hidden="true"></i>
                <a href="tel:7175151504" class="text-power-red hover:underline">717-515-1504</a>
              </div>
              <div class="flex items-center gap-3">
                <i class="fas fa-globe text-power-red flex-shrink-0 w-4" aria-hidden="true"></i>
                <a href="https://lightsonpa.com" class="text-power-red hover:underline">lightsonpa.com</a>
              </div>
            </address>
          </div>

          <div class="border border-gray-200 rounded-xl p-6">
            <h3 class="font-heading text-navy text-base uppercase tracking-wide mb-4">Our Services</h3>
            <ul class="space-y-2 text-sm">
              <?php
              $svc_links = [
                'Panel Upgrades'           => 'services.php#panel',
                'Generator Installation'   => 'services.php#generator',
                'Generator Maintenance'    => 'generator-maintenance-plans.php',
                'Electrical Repairs'       => 'services.php#repairs',
                'Wiring &amp; Lighting'   => 'services.php#wiring',
                'Troubleshooting'          => 'services.php#troubleshooting',
              ];
              foreach ($svc_links as $label => $href): ?>
              <li>
                <a href="<?php echo $href; ?>" class="flex items-center gap-2 text-gray-600 hover:text-power-red transition-colors cursor-pointer">
                  <i class="fas fa-chevron-right text-power-red text-[10px] flex-shrink-0" aria-hidden="true"></i>
                  <?php echo $label; ?>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>

        </div>
      </aside>

    </div>
  </div>
</div>


<?php require_once 'includes/footer.php'; ?>
