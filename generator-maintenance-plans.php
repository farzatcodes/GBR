<?php
/**
 * GBR Electrical Services, LLC — Whole House Generator Maintenance Program
 */

$page_title       = 'Whole House Generator Maintenance Program — Plans & Pricing';
$meta_description = 'GBR Electrical\'s Whole House Generator Maintenance Program keeps your Kohler standby generator ready year-round. Compare Essential, Advanced, and Premium Care plans for Dover, PA and York County homes.';
$canonical        = 'https://lightsonpa.com/generator-maintenance-plans.php';
$breadcrumbs      = [
  ['name' => 'Home',       'url' => 'index.php'],
  ['name' => 'Generators', 'url' => 'index.php#generators'],
  ['name' => 'Maintenance Plans'],
];

require_once 'includes/header.php';

$hero_bg = file_exists('assets/images/hero-maintenance.jpg') ? 'assets/images/hero-maintenance.jpg' : null;

$plans = [
  [
    'tier'     => 'GOOD',
    'name'     => 'Essential Care',
    'price'    => '225',
    'desc'     => 'Reliable annual protection for peace of mind.',
    'popular'  => false,
    'icon'     => 'fas fa-shield',
    'includes' => [
      'Annual service visit',
      'Oil &amp; filter change',
      'Air filter inspection',
      'Spark plug inspection',
      'System performance test',
      'Battery test',
      'Visual inspection',
    ],
    'bottom'   => 'Reliable protection. Built for peace of mind.',
  ],
  [
    'tier'     => 'BETTER',
    'name'     => 'Advanced Care',
    'price'    => '325',
    'desc'     => 'Enhanced coverage and priority service.',
    'popular'  => true,
    'icon'     => 'fas fa-shield-halved',
    'includes' => [
      'Everything in GOOD',
      'Priority scheduling',
      'Coolant system check',
      'Fuel system inspection',
      'Battery load test',
      'Transfer switch test',
      'Firmware update check',
      'Detailed service report',
    ],
    'bottom'   => 'More value. More coverage. Better protection.',
  ],
  [
    'tier'     => 'BEST',
    'name'     => 'Premium Care',
    'price'    => '425',
    'desc'     => 'Maximum protection. Premium support.',
    'popular'  => false,
    'icon'     => 'fas fa-crown',
    'includes' => [
      'Everything in BETTER',
      'Bi-annual service visits (2x per year)',
      'Extended runtime test',
      'Transfer switch load test',
      'Fuel quality test &amp; stabilization',
      'Battery replacement (if needed)',
      '24/7 Priority support',
      '10% off repairs &amp; parts',
    ],
    'bottom'   => 'The ultimate protection. Because your home deserves the best.',
  ],
];

$benefits = [
  ['icon' => 'fas fa-user-gear',        'label' => 'Expert Technicians'],
  ['icon' => 'fas fa-award',            'label' => 'Genuine Parts &amp; Quality Service'],
  ['icon' => 'fas fa-gauge-high',       'label' => 'Peak Performance Year-Round'],
  ['icon' => 'fas fa-bolt',             'label' => 'Emergency Ready'],
  ['icon' => 'fas fa-circle-check',     'label' => 'No Surprises. Just Reliability.'],
];
?>

<!-- ================================================================
     PAGE HERO
     ================================================================ -->
<section class="relative bg-navy overflow-hidden dot-grid py-20 md:py-28" aria-label="Generator maintenance program hero">

  <?php if ($hero_bg): ?>
  <div class="absolute inset-0" aria-hidden="true">
    <img src="<?php echo $hero_bg; ?>" alt="" class="w-full h-full object-cover object-center" loading="eager"
         width="1920" height="1080">
    <div class="absolute inset-0 bg-navy/85"></div>
  </div>
  <?php endif; ?>

  <div class="absolute inset-y-0 left-0 w-1 bg-power-red" aria-hidden="true"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
    <nav aria-label="Breadcrumb" class="mb-6">
      <ol class="flex items-center gap-2 text-steel text-xs font-heading tracking-widest uppercase">
        <li><a href="index.php" class="hover:text-white transition-colors cursor-pointer">Home</a></li>
        <li><i class="fas fa-chevron-right text-[9px]" aria-hidden="true"></i></li>
        <li><a href="index.php#generators" class="hover:text-white transition-colors cursor-pointer">Generators</a></li>
        <li><i class="fas fa-chevron-right text-[9px]" aria-hidden="true"></i></li>
        <li class="text-silver" aria-current="page">Maintenance Plans</li>
      </ol>
    </nav>

    <div class="flex items-center gap-3 mb-4">
      <div class="h-px w-10 bg-power-red flex-shrink-0" aria-hidden="true"></div>
      <span class="font-heading text-power-red text-sm tracking-widest uppercase">GBR Electrical Services, LLC</span>
    </div>

    <h1 class="font-heading text-white text-4xl sm:text-5xl md:text-6xl uppercase tracking-tight mb-5 max-w-4xl">
      Whole House Generator <span class="text-power-red">Maintenance Program</span>
    </h1>

    <p class="font-heading text-silver text-lg sm:text-xl tracking-wide uppercase mb-4">
      Reliable Power. Peace of Mind. Year After Year.
    </p>

    <p class="text-silver/80 text-lg max-w-2xl leading-relaxed">
      &ldquo;Regular maintenance keeps your generator ready so your home stays powered when it matters most.&rdquo;
    </p>
  </div>

  <div class="absolute bottom-0 inset-x-0 pointer-events-none" aria-hidden="true">
    <svg viewBox="0 0 1440 50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full block" style="height:50px">
      <polygon points="0,50 1440,0 1440,50" fill="#f4f5f6"/>
    </svg>
  </div>
</section>


<!-- ================================================================
     TRUST BADGE BAR
     ================================================================ -->
<section class="bg-silver-lt py-5" aria-label="Trust statement">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
    <p class="font-heading text-navy text-sm sm:text-base tracking-widest uppercase">
      <i class="fas fa-bolt text-power-red mr-2" aria-hidden="true"></i>
      Power You Can Count On. Service You Can Trust.
    </p>
  </div>
</section>


<!-- ================================================================
     PRICING TIERS
     ================================================================ -->
<section class="bg-white py-20" aria-labelledby="pricing-heading">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">

    <div class="text-center mb-14">
      <p class="font-heading text-power-red text-sm tracking-widest uppercase mb-3">Choose Your Plan</p>
      <h2 id="pricing-heading" class="font-heading text-navy text-3xl sm:text-4xl uppercase tracking-tight title-accent center">
        Generator Maintenance Plans &amp; Pricing
      </h2>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-6 items-start">
      <?php foreach ($plans as $p): ?>
      <div class="relative rounded-xl overflow-hidden flex flex-col h-full
                  <?php echo $p['popular']
                    ? 'bg-navy border-2 border-power-red lg:-translate-y-4 shadow-2xl'
                    : 'bg-silver-lt border border-gray-200'; ?>">

        <?php if ($p['popular']): ?>
        <div class="absolute top-0 inset-x-0 bg-power-red text-white text-center text-xs font-heading tracking-widest uppercase py-2">
          <i class="fas fa-star mr-1.5" aria-hidden="true"></i>Most Popular
        </div>
        <?php endif; ?>

        <div class="p-8 flex flex-col flex-1 <?php echo $p['popular'] ? 'pt-14' : ''; ?>">

          <div class="flex items-center gap-3 mb-5">
            <div class="w-12 h-12 flex items-center justify-center rounded-xl flex-shrink-0
                        <?php echo $p['popular'] ? 'bg-power-red/20' : 'bg-power-red/10'; ?>">
              <i class="<?php echo $p['icon']; ?> text-power-red text-xl" aria-hidden="true"></i>
            </div>
            <div>
              <div class="font-heading text-power-red text-xs tracking-widest uppercase"><?php echo $p['tier']; ?></div>
              <div class="font-heading text-xl uppercase tracking-wide <?php echo $p['popular'] ? 'text-white' : 'text-navy'; ?>"><?php echo $p['name']; ?></div>
            </div>
          </div>

          <div class="mb-2">
            <span class="font-heading text-4xl <?php echo $p['popular'] ? 'text-white' : 'text-navy'; ?>">$<?php echo $p['price']; ?></span>
            <span class="font-heading text-sm tracking-widest uppercase <?php echo $p['popular'] ? 'text-silver/70' : 'text-steel-dark'; ?>"> / Year</span>
          </div>

          <p class="text-sm leading-relaxed mb-6 <?php echo $p['popular'] ? 'text-silver/80' : 'text-steel-dark'; ?>">
            <?php echo $p['desc']; ?>
          </p>

          <ul class="space-y-3 mb-8 flex-1" role="list">
            <?php foreach ($p['includes'] as $inc): ?>
            <li class="flex items-start gap-2.5 text-sm <?php echo $p['popular'] ? 'text-silver/90' : 'text-steel-dark'; ?>">
              <i class="fas fa-check text-power-red mt-0.5 flex-shrink-0" aria-hidden="true"></i>
              <span><?php echo $inc; ?></span>
            </li>
            <?php endforeach; ?>
          </ul>

          <a href="contact.php?service=Generator+Maintenance+Plan+(<?php echo urlencode($p['name']); ?>)"
             class="<?php echo $p['popular'] ? 'btn-red' : 'btn-outline-red'; ?> w-full justify-center mb-4">
            Get Your Plan Today
          </a>

          <p class="text-xs text-center italic <?php echo $p['popular'] ? 'text-silver/60' : 'text-steel-dark'; ?>">
            &ldquo;<?php echo $p['bottom']; ?>&rdquo;
          </p>

        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ================================================================
     BENEFITS / FEATURES ROW
     ================================================================ -->
<section class="bg-silver-lt py-16" aria-label="Program benefits">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
      <?php foreach ($benefits as $b): ?>
      <div class="bg-white border border-gray-200 rounded-xl p-6 text-center card-lift">
        <div class="w-12 h-12 bg-power-red/10 flex items-center justify-center rounded-full mx-auto mb-4">
          <i class="<?php echo $b['icon']; ?> text-power-red text-lg" aria-hidden="true"></i>
        </div>
        <p class="font-heading text-navy text-sm tracking-wide uppercase leading-snug"><?php echo $b['label']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ================================================================
     BOTTOM CTA
     ================================================================ -->
<section class="bg-navy py-16 dot-grid relative overflow-hidden" aria-label="Maintenance plan call to action">
  <div class="absolute bottom-0 right-0 w-[600px] h-[600px] pointer-events-none opacity-[0.05]"
       style="background:radial-gradient(circle,#FC0D15 0%,transparent 70%);" aria-hidden="true"></div>

  <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center relative z-10">
    <h2 class="font-heading text-white text-3xl sm:text-4xl md:text-5xl uppercase tracking-tight mb-2">
      Don&rsquo;t Wait For The Next Outage.
    </h2>
    <h3 class="font-heading text-power-red text-2xl sm:text-3xl md:text-4xl uppercase tracking-tight mb-8">
      Keep Your Generator Ready.
    </h3>

    <div class="flex flex-wrap justify-center gap-4 mb-5">
      <a href="contact.php?service=Generator+Maintenance+Plan" class="btn-red">
        <i class="fas fa-calendar-check" aria-hidden="true"></i> Get Your Plan Today!
      </a>
      <a href="tel:7174671712" class="btn-outline-white">
        <i class="fas fa-phone" aria-hidden="true"></i> 717-467-1712
      </a>
    </div>

    <p class="text-silver/70 font-heading text-sm tracking-widest uppercase">
      Stay powered. Stay protected.
    </p>
  </div>
</section>


<?php require_once 'includes/footer.php'; ?>
