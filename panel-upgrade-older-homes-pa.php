<?php
$page_title       = 'Electrical Panel Upgrades for Older Homes in PA — Warning Signs & Insurance';
$meta_description = 'Outdated electrical panel in your older Dover, PA or York County home? GBR Electrical explains the warning signs, why Federal Pacific and Zinsco panels get flagged, and what a panel upgrade involves.';
$canonical        = 'https://lightsonpa.com/panel-upgrade-older-homes-pa.php';
$og_type          = 'article';
$article_date     = '2026-06-28';
$breadcrumbs      = [
  ['name' => 'Home',                'url' => 'index.php'],
  ['name' => 'Articles',            'url' => 'blog.php'],
  ['name' => 'Panel Upgrades for Older Homes'],
];

require_once 'includes/header.php';

$schema = [
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Electrical Panel Upgrades for Older Homes in PA — Warning Signs, Insurance Issues, and What an Upgrade Involves',
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
  'keywords' => 'electrical panel upgrade older home PA, Federal Pacific panel replacement Dover PA, Zinsco panel replacement York County, knob and tube wiring PA, outdated electrical panel insurance',
];
echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT) . '</script>';

$faq_items = [
  [
    'q' => 'How do I know if I have a Federal Pacific or Zinsco panel?',
    'a' => 'Open the panel door and check the manufacturer label, usually printed inside the cover or on the main breaker. "Federal Pacific Electric," "FPE," "Stab-Lok," "Zinsco," and "Sylvania" (which acquired Zinsco) are the names to look for. If you\'re not sure, a licensed electrician can identify it during a panel inspection.',
  ],
  [
    'q' => 'Will my homeowners insurance cover a home with an old panel?',
    'a' => 'It depends on the insurer. Many homeowners insurance companies flag Federal Pacific or Zinsco panels, knob-and-tube wiring, or aluminum branch wiring during underwriting or a 4-point inspection, and may require replacement, charge a higher premium, or decline coverage until the issue is corrected. Check with your specific insurer rather than assuming either way.',
  ],
  [
    'q' => 'Do I need a permit for a panel upgrade in Pennsylvania?',
    'a' => 'Most PA municipalities require an electrical permit for a panel upgrade, and many require utility company coordination for the service disconnect and reconnect. GBR handles permitting and utility scheduling as part of the project.',
  ],
  [
    'q' => 'How long does a panel upgrade take?',
    'a' => 'A straightforward upgrade is often completed in a single day. Projects that also require a utility company service disconnect/reconnect, a permit inspection, or rewiring beyond the panel itself can take longer — this is scoped during the initial assessment, not guessed at.',
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
        <li class="text-silver" aria-current="page">Panel Upgrades for Older Homes</li>
      </ol>
    </nav>

    <div class="flex flex-wrap items-center gap-3 mb-4">
      <div class="h-px w-10 bg-power-red flex-shrink-0" aria-hidden="true"></div>
      <span class="font-heading text-power-red text-sm tracking-widest uppercase">Licensed Electrical Contractor</span>
    </div>

    <h1 class="font-heading text-white text-4xl sm:text-5xl xl:text-6xl uppercase tracking-tight mb-6 max-w-4xl leading-tight">
      Panel Upgrades for <span class="text-power-red">Older Homes</span> in PA
    </h1>

    <div class="flex flex-wrap items-center gap-5 text-steel text-sm">
      <span class="flex items-center gap-2"><i class="fas fa-building text-power-red" aria-hidden="true"></i>GBR Electrical Services, LLC</span>
      <span class="flex items-center gap-2"><i class="fas fa-calendar text-power-red" aria-hidden="true"></i>June 28, 2026</span>
      <span class="flex items-center gap-2"><i class="fas fa-clock text-power-red" aria-hidden="true"></i>8 min read</span>
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
          <p>York County has plenty of housing stock built well before modern electrical demand existed — homes wired for a handful of lamps and a radio, now running HVAC, multiple TVs, computers, and kitchen appliances off the same panel installed decades ago. Most of the time the panel keeps working. The problem is that "keeps working" and "safe by current standards" aren't the same thing, and the gap between them is exactly what shows up during a home inspection, an insurance underwriting review, or — worse — an electrical fire investigation.</p>
        </div>

        <!-- TOC -->
        <div class="bg-silver-lt border border-gray-200 rounded-xl p-6 mb-10">
          <h2 class="font-heading text-navy text-lg uppercase tracking-wide mb-4">In This Article</h2>
          <ol class="space-y-2 text-sm">
            <?php
            $toc = [
              '#signs'      => 'Signs Your Panel Is Outdated',
              '#fpe-zinsco' => 'Federal Pacific and Zinsco Panels',
              '#wiring'     => 'Knob-and-Tube and Aluminum Wiring',
              '#insurance'  => 'Insurance and Outdated Panels',
              '#upgrade'    => 'What a Panel Upgrade Involves',
              '#faq'        => 'Frequently Asked Questions',
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

        <h2 id="signs" class="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">Signs Your Panel Is Outdated</h2>
        <div class="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
          <p>A few signs are visible without opening anything up: a fuse box instead of circuit breakers, two-prong outlets throughout the house instead of grounded three-prong outlets, breakers that trip repeatedly under normal use, or a panel rated below 100 amps. A burning smell from an outlet or the panel itself is not a "keep an eye on it" sign — that's a same-day call.</p>
          <p>Other signs only show up when an electrician or inspector opens the panel: double-tapped breakers (two wires under one terminal, which isn't rated for it), missing or improvised parts, or a brand name with a known reliability problem — which brings up the two names that come up constantly in older-home panel inspections.</p>
        </div>

        <h2 id="fpe-zinsco" class="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">Federal Pacific and Zinsco Panels — Why They Get Flagged</h2>
        <div class="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
          <p>Federal Pacific Electric (FPE) "Stab-Lok" panels and Zinsco panels (later sold under the Sylvania name) are two of the most commonly flagged panel brands in older homes. Both have a well-documented history among electricians, home inspectors, and engineering investigators of breakers that may fail to trip under overload or fault conditions — the exact scenario a breaker exists to handle. Neither brand is still manufactured, which also means replacement breakers are scarce and not something to rely on long-term even if the panel seems to be working.</p>
          <p>Finding one of these panels in your home doesn't mean something has already gone wrong. It means the panel is operating on borrowed time with a known weak point, and replacement — not a wait-and-see approach — is the standard recommendation.</p>
        </div>

        <h2 id="wiring" class="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">Knob-and-Tube and Aluminum Wiring</h2>
        <div class="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
          <p>Knob-and-tube wiring, common in homes built before the 1950s, has no ground conductor and wasn't designed for the insulation, attic storage, or modern load levels typical today. Aluminum branch-circuit wiring, used in many homes built roughly between 1965 and 1973 during a copper shortage, carries a specific risk at outlets and switches where the connection can loosen over time unless it was properly treated with anti-oxidant compound or upgraded connectors. Both are common enough in York County's older housing stock that a panel upgrade project often surfaces one or the other once the electrician is already inside the walls.</p>
        </div>

        <h2 id="insurance" class="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">Insurance and Outdated Panels</h2>
        <div class="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
          <p>Homeowners insurance underwriting is where a lot of homeowners first learn their panel is a problem — often during a new policy application, a renewal review, or a 4-point inspection tied to a home sale. Many insurers treat Federal Pacific or Zinsco panels, knob-and-tube wiring, or aluminum branch wiring as a flagged condition, responding with a higher premium, a required repair timeline, or a declined application until it's corrected. Policies and underwriting standards vary by company, so the only reliable answer for your specific situation is to ask your insurer directly — but it's common enough that "find out during underwriting" is a worse position than addressing it proactively.</p>
        </div>

        <h2 id="upgrade" class="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">What a Panel Upgrade Involves</h2>
        <div class="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
          <p>GBR Electrical's panel upgrade process starts with an on-site assessment of the existing panel, wiring, and household load — including whether you're planning ahead for a <a href="ev-charger-installation-pennsylvania.php" class="text-power-red hover:underline font-semibold">future EV charger</a> or a <a href="services.php#generator" class="text-power-red hover:underline font-semibold">whole-home backup generator</a>, since both are easier to plan for during a panel replacement than to retrofit later. From there: permitting, utility coordination for the service disconnect/reconnect, the physical panel swap, and a final inspection before the new panel is energized. Federal Pacific and Zinsco panel replacements (<a href="services.php#panel" class="text-power-red hover:underline font-semibold">listed among GBR's standard panel services</a>) follow the same process as any other upgrade — there's nothing exotic about removing a known-problem panel, just diligence in doing it correctly.</p>
        </div>

        <!-- Inline CTA -->
        <div class="bg-power-red-dk rounded-xl p-8 text-center mb-10">
          <h3 class="font-heading text-white text-2xl uppercase tracking-wide mb-3">Get a Free Panel Inspection</h3>
          <p class="text-red-100 text-sm mb-6">Not sure what panel you have or whether it's a problem? We'll tell you honestly.</p>
          <div class="flex flex-wrap justify-center gap-4">
            <a href="contact.php?service=Panel+Upgrade" class="inline-flex items-center gap-2 bg-white text-power-red-dk font-heading text-sm uppercase tracking-widest px-6 min-h-[44px] py-3 hover:bg-silver-lt transition-colors rounded-lg cursor-pointer">
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
              <i class="fas fa-solar-panel text-power-red text-2xl" aria-hidden="true"></i>
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
            <a href="ev-charger-installation-pennsylvania.php" class="block border border-gray-200 rounded-xl p-5 hover:border-power-red/50 hover:bg-silver-lt transition-all cursor-pointer">
              <div class="font-heading text-power-red text-xs tracking-widest uppercase mb-2">EV Charger Installation</div>
              <div class="font-heading text-navy text-base uppercase leading-snug">EV Charger Installation in PA — Panel Capacity, Permits &amp; Wiring</div>
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
              <i class="fas fa-solar-panel text-power-red text-2xl" aria-hidden="true"></i>
            </div>
            <h3 class="font-heading text-white text-xl uppercase tracking-wide mb-1">Panel Upgrades</h3>
            <p class="text-power-red font-heading text-xs tracking-widest uppercase mb-3">Federal Pacific &amp; Zinsco Replacement</p>
            <p class="text-steel text-sm leading-relaxed mb-5">Free panel inspection, honest assessment, full upgrade handled start to finish.</p>
            <a href="contact.php?service=Panel+Upgrade" class="btn-red w-full justify-center text-sm mb-3">
              <i class="fas fa-solar-panel" aria-hidden="true"></i> Get a Free Inspection
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
                'EV Charger Installation'  => 'ev-charger-installation-pennsylvania.php',
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
