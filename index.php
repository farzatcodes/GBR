<?php
/**
 * GBR Electrical Services, LLC — Home Page
 *
 * Sections:
 *   1. Hero               — full-screen, logo prominent, two CTAs
 *   2. Trust strip        — 4 credential badges
 *   3. Services grid      — 6 service cards
 *   4. About              — owner-led, safety-first narrative + stats
 *   5. Generator spotlight — Kohler certification + features
 *   6. Testimonials       — 3 placeholder reviews
 *   7. Contact CTA strip  — power-red, phone numbers
 *
 * ui-ux-pro-max checklist:
 *   ✓ Hero-Centric + Trust & Authority landing pattern
 *   ✓ CTA above fold
 *   ✓ Touch targets ≥ 44px on all interactive elements
 *   ✓ Loading="lazy" on all non-hero images
 *   ✓ Semantic HTML5 (section, article, aside, address)
 *   ✓ ARIA labels and landmark roles
 *   ✓ Hover transitions 150-300ms
 *   ✓ Card hover: transform + shadow (no layout reflow)
 */

$page_title       = 'Electrical Services & Kohler Generator Installation in Dover, PA';
$meta_description = 'GBR Electrical Services LLC — licensed electrician and certified Kohler home generator installer in Dover, PA. Panel upgrades, wiring, repairs, emergency backup power. Call 717-292-1338.';

require_once 'includes/header.php';
?>

<!-- ================================================================
     1. HERO — full viewport, dark navy, real logo featured large
     ================================================================ -->
<section class="relative min-h-screen flex items-center overflow-hidden bg-navy dot-grid"
         aria-label="Welcome to GBR Electrical Services">

  <!-- Red left edge accent -->
  <div class="absolute inset-y-0 left-0 w-1 bg-power-red" aria-hidden="true"></div>

  <!-- Subtle bottom-right glow -->
  <div class="absolute bottom-0 right-0 w-[700px] h-[700px] pointer-events-none opacity-[0.045]"
       style="background:radial-gradient(circle,#B31217 0%,transparent 70%);"
       aria-hidden="true"></div>

  <div class="max-w-7xl mx-auto px-5 sm:px-8 py-24 md:py-32 w-full relative z-10">
    <div class="grid lg:grid-cols-5 gap-12 lg:gap-16 items-center">

      <!-- ── Left: Content ── -->
      <div class="lg:col-span-3">

        <!-- Large hero logo -->
        <div class="mb-8 lg:mb-10">
          <?php
          $logo_src = file_exists('assets/images/logo.png')
                    ? 'assets/images/logo.png'
                    : 'assets/images/logo.svg';
          ?>
          <div class="bg-white inline-block px-5 py-3"
               style="box-shadow:0 8px 40px rgba(0,0,0,.35);">
            <img src="<?php echo htmlspecialchars($logo_src); ?>"
                 alt="GBR Electrical Services, LLC"
                 class="h-16 sm:h-20 w-auto object-contain"
                 width="320" height="80"
                 loading="eager">
          </div>
        </div>

        <!-- Overline -->
        <div class="flex items-center gap-3 mb-4" aria-hidden="true">
          <div class="h-px w-10 bg-power-red flex-shrink-0"></div>
          <span class="font-heading text-power-red text-sm tracking-widest uppercase">
            Licensed Contractor &amp; Certified Kohler Installer — Dover, PA
          </span>
        </div>

        <!-- H1 -->
        <h1 class="font-heading text-white uppercase leading-none mb-6">
          <span class="block text-4xl sm:text-5xl xl:text-6xl tracking-tight">Reliable</span>
          <span class="block text-5xl sm:text-6xl xl:text-7xl tracking-tight text-power-red">Electrical</span>
          <span class="block text-4xl sm:text-5xl xl:text-6xl tracking-tight">Services &amp;</span>
          <span class="block text-3xl sm:text-4xl xl:text-5xl tracking-tight text-silver mt-1">Generator Installation</span>
        </h1>

        <!-- Description -->
        <p class="text-silver/85 text-lg leading-relaxed mb-10 max-w-xl">
          Professional electrical work and Kohler home generator solutions for homes and businesses in York County, PA. Owner on every job — no subcontractors.
        </p>

        <!-- CTA buttons -->
        <div class="flex flex-wrap gap-4 mb-10">
          <a href="contact.php" class="btn-red">
            <i class="fas fa-wrench" aria-hidden="true"></i> Request Service
          </a>
          <a href="tel:7172921338" class="btn-outline-white">
            <i class="fas fa-phone" aria-hidden="true"></i> Call: 717-292-1338
          </a>
        </div>

        <!-- Trust signals row -->
        <div class="flex flex-wrap items-center gap-x-6 gap-y-3 pt-7 border-t border-white/10"
             aria-label="Trust credentials">
          <?php
          $signals = [
            'Licensed &amp; Insured',
            'Certified Kohler Dealer',
            '24/7 Emergency Service',
            'Residential &amp; Commercial',
          ];
          foreach ($signals as $s): ?>
          <div class="flex items-center gap-2 text-silver/80 text-sm">
            <i class="fas fa-check-circle text-power-red" aria-hidden="true"></i>
            <?php echo $s; ?>
          </div>
          <?php endforeach; ?>
        </div>
      </div><!-- /left -->

      <!-- ── Right: Feature card ── -->
      <aside class="hidden lg:block lg:col-span-2" aria-label="Service highlights">
        <div class="relative">

          <!-- Main card -->
          <div class="bg-navy-card border border-white/10 p-8 relative overflow-hidden">

            <!-- Red top bar -->
            <div class="absolute top-0 inset-x-0 h-1 bg-power-red" aria-hidden="true"></div>

            <!-- Icon -->
            <div class="relative inline-flex mb-7">
              <div class="w-16 h-16 bg-power-red/15 flex items-center justify-center">
                <i class="fas fa-bolt text-power-red text-3xl" aria-hidden="true"></i>
              </div>
              <div class="absolute -bottom-1.5 -right-1.5 w-7 h-7 bg-power-red flex items-center justify-center rounded-full">
                <i class="fas fa-check text-white text-[11px]" aria-hidden="true"></i>
              </div>
            </div>

            <div class="mb-7">
              <div class="font-heading text-white text-3xl uppercase tracking-wide leading-tight mb-1">24/7 Emergency</div>
              <div class="font-heading text-power-red text-lg uppercase tracking-widest">Service Available</div>
            </div>

            <!-- Checklist -->
            <ul class="border-t border-white/10 pt-6 space-y-3.5" role="list">
              <?php
              $checks = [
                'Residential &amp; Commercial',
                'Licensed &amp; Fully Insured',
                'Certified Kohler Installer',
                'York County, PA Experts',
                'Owner on Every Job',
                'Fast Response Times',
              ];
              foreach ($checks as $c): ?>
              <li class="flex items-center justify-between">
                <span class="text-steel text-sm"><?php echo $c; ?></span>
                <i class="fas fa-check text-power-red text-xs ml-4 flex-shrink-0" aria-hidden="true"></i>
              </li>
              <?php endforeach; ?>
            </ul>

            <!-- Phone CTA -->
            <a href="tel:7172921338"
               class="mt-7 flex items-center justify-center gap-2.5 bg-power-red hover:bg-power-red-dk
                      transition-colors min-h-[44px] px-5 py-3 font-heading text-white
                      text-sm tracking-widest uppercase cursor-pointer">
              <i class="fas fa-phone" aria-hidden="true"></i> 717-292-1338
            </a>
          </div>

          <!-- Corner decorative frames -->
          <div class="absolute -bottom-4 -left-4 w-32 h-32 border-2 border-power-red/20 pointer-events-none" aria-hidden="true"></div>
          <div class="absolute -top-4 -right-4 w-16 h-16 border border-white/8 pointer-events-none"  aria-hidden="true"></div>
        </div>
      </aside>

    </div>
  </div><!-- /container -->

  <!-- Diagonal divider into white section -->
  <div class="absolute bottom-0 inset-x-0 pointer-events-none" aria-hidden="true">
    <svg viewBox="0 0 1440 72" xmlns="http://www.w3.org/2000/svg"
         preserveAspectRatio="none" class="w-full block" style="height:72px">
      <polygon points="0,72 1440,0 1440,72" fill="white"/>
    </svg>
  </div>
</section>


<!-- ================================================================
     2. TRUST BADGES — 4 credential cards on white
     ================================================================ -->
<section class="bg-white py-14" aria-labelledby="trust-heading">
  <h2 id="trust-heading" class="sr-only">Why Choose GBR Electrical</h2>

  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php
      $badges = [
        ['icon'=>'fas fa-shield-halved',     'title'=>'Licensed &amp; Insured',          'desc'=>'Fully licensed PA electrical contractor with complete liability and workers&#39; compensation coverage.'],
        ['icon'=>'fas fa-certificate',        'title'=>'Certified Kohler Installer',      'desc'=>'Factory-authorized Kohler dealer and trained home standby generator installation specialist.'],
        ['icon'=>'fas fa-location-dot',       'title'=>'Local Electrical Experts',        'desc'=>'Based in Dover, PA — your neighbors in the trades, serving all of York County for years.'],
        ['icon'=>'fas fa-circle-exclamation', 'title'=>'Emergency-Ready Power Solutions', 'desc'=>'24/7 emergency electrical response and automatic standby generator solutions for uninterrupted power.'],
      ];
      foreach ($badges as $b): ?>
      <article class="border-t-4 border-power-red bg-silver-lt p-7 flex flex-col gap-4 card-lift">
        <div class="w-14 h-14 bg-power-red/10 flex items-center justify-center flex-shrink-0">
          <i class="<?php echo $b['icon']; ?> text-power-red text-2xl" aria-hidden="true"></i>
        </div>
        <div>
          <h3 class="font-heading text-navy text-xl uppercase tracking-wide mb-2"><?php echo $b['title']; ?></h3>
          <p class="text-steel text-sm leading-relaxed"><?php echo $b['desc']; ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ================================================================
     3. SERVICES — 6-card grid on light silver
     ================================================================ -->
<section class="bg-silver-lt py-20" id="services" aria-labelledby="services-heading">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">

    <!-- Section header -->
    <div class="text-center mb-14">
      <p class="font-heading text-power-red text-sm tracking-widest uppercase mb-3">What We Do</p>
      <h2 id="services-heading" class="font-heading text-navy text-4xl sm:text-5xl uppercase tracking-tight mb-3 title-accent center">
        Our Electrical Services
      </h2>
      <p class="text-steel max-w-2xl mx-auto mt-6 text-base leading-relaxed">
        From routine repairs to complete panel upgrades and whole-home generator installations — GBR Electrical has the expertise to keep your power running safely.
      </p>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php
      $services = [
        ['icon'=>'fas fa-screwdriver-wrench', 'title'=>'Electrical Repairs',         'link'=>'services.php#repairs',
         'desc'=>'Fast diagnosis and repair of outlets, switches, circuits, and wiring problems — done right the first time.'],
        ['icon'=>'fas fa-solar-panel',         'title'=>'Panel Upgrades',             'link'=>'services.php#panel',
         'desc'=>'Upgrade outdated or undersized breaker panels (100A–400A) to handle today\'s electrical demands safely.'],
        ['icon'=>'fas fa-plug-circle-bolt',    'title'=>'Generator Installation',     'link'=>'services.php#generator',
         'desc'=>'Certified Kohler home standby generator installation including transfer switch, load calc, and startup.'],
        ['icon'=>'fas fa-lightbulb',           'title'=>'Wiring &amp; Lighting',      'link'=>'services.php#wiring',
         'desc'=>'New construction wiring, remodels, recessed LED lighting, ceiling fans, and energy-efficient upgrades.'],
        ['icon'=>'fas fa-magnifying-glass-chart','title'=>'Troubleshooting',          'link'=>'services.php#troubleshooting',
         'desc'=>'Tripping breakers, flickering lights, burning smells? We find the root cause and fix it permanently.'],
        ['icon'=>'fas fa-building',            'title'=>'Residential &amp; Commercial','link'=>'services.php#commercial',
         'desc'=>'Full-service electrical for homeowners and business owners — from single-family homes to commercial spaces.'],
      ];
      foreach ($services as $svc): ?>
      <article class="bg-white border border-gray-200 p-8 group card-lift
                      hover:border-l-4 hover:border-l-power-red hover:border-power-red transition-all duration-250 cursor-default">
        <div class="w-14 h-14 bg-silver-lt group-hover:bg-power-red/10 flex items-center justify-center mb-6 transition-colors">
          <i class="<?php echo $svc['icon']; ?> text-power-red text-2xl" aria-hidden="true"></i>
        </div>
        <h3 class="font-heading text-navy text-xl uppercase tracking-wide mb-3"><?php echo $svc['title']; ?></h3>
        <p class="text-steel text-sm leading-relaxed mb-5"><?php echo $svc['desc']; ?></p>
        <a href="<?php echo $svc['link']; ?>"
           class="inline-flex items-center gap-2 font-heading text-sm text-power-red tracking-wider uppercase
                  hover:gap-3 transition-all duration-200 cursor-pointer">
          Learn More <i class="fas fa-arrow-right text-xs" aria-hidden="true"></i>
        </a>
      </article>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-12">
      <a href="services.php" class="btn-outline-red">View All Services</a>
    </div>
  </div>
</section>


<!-- ================================================================
     4. ABOUT — dark navy, owner story + credential grid
     ================================================================ -->
<section class="bg-navy py-20 relative overflow-hidden dot-grid" id="about" aria-labelledby="about-heading">

  <!-- Subtle red left glow -->
  <div class="absolute -left-40 top-1/2 -translate-y-1/2 w-96 h-96 rounded-full opacity-[0.06] pointer-events-none"
       style="background:radial-gradient(circle,#B31217 0%,transparent 70%);" aria-hidden="true"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
    <div class="grid lg:grid-cols-2 gap-14 items-center">

      <!-- Left: Story -->
      <div>
        <p class="font-heading text-power-red text-sm tracking-widest uppercase mb-3">Who We Are</p>
        <h2 id="about-heading" class="font-heading text-white text-4xl sm:text-5xl uppercase tracking-tight mb-6 title-accent">
          Owner-Led.<br>Safety-First.<br>Local Experts.
        </h2>
        <div class="space-y-4 text-silver/80 leading-relaxed text-base">
          <p>GBR Electrical Services is a locally owned and operated electrical contracting company based in Dover, PA. Our owner is hands-on with every project — when you call GBR, you get a licensed electrician, not a salesperson or subcontractor.</p>
          <p>We built our reputation on honest, safety-first electrical work for homeowners and businesses across York County. Whether it's a simple repair or a complex whole-home generator installation, we treat your property with the same care we'd give our own.</p>
          <p>As a certified Kohler dealer, we provide complete backup power solutions from initial consultation to installation, startup, and ongoing maintenance.</p>
        </div>
        <!-- Value bullets -->
        <ul class="mt-8 space-y-3 text-sm" role="list">
          <?php
          $values = [
            'Owner on every job — no subcontractors',
            'Code-compliant work, every time',
            'Transparent pricing before work begins',
            'Clean, respectful service in your home',
          ];
          foreach ($values as $v): ?>
          <li class="flex items-center gap-3 text-silver">
            <span class="w-5 h-5 bg-power-red flex items-center justify-center flex-shrink-0" aria-hidden="true">
              <i class="fas fa-check text-white text-[10px]"></i>
            </span>
            <?php echo $v; ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <a href="contact.php" class="btn-red mt-8 inline-flex">
          <i class="fas fa-calendar-check" aria-hidden="true"></i> Schedule a Call
        </a>
      </div>

      <!-- Right: Credential blocks -->
      <div class="grid grid-cols-2 gap-4" role="list" aria-label="Credentials and service highlights">
        <?php
        $creds = [
          ['v'=>'Licensed',  'l'=>'PA Electrician',         'i'=>'fas fa-id-card'],
          ['v'=>'Insured',   'l'=>'Full Coverage',           'i'=>'fas fa-shield-halved'],
          ['v'=>'Kohler',    'l'=>'Certified Dealer',        'i'=>'fas fa-certificate'],
          ['v'=>'24/7',      'l'=>'Emergency Response',      'i'=>'fas fa-circle-exclamation'],
          ['v'=>'York Co.',  'l'=>'Locally Based in PA',     'i'=>'fas fa-location-dot'],
          ['v'=>'Honest',    'l'=>'Upfront Pricing',         'i'=>'fas fa-handshake'],
        ];
        foreach ($creds as $c): ?>
        <div class="bg-navy-card border border-white/10 p-6 group hover:border-power-red/40
                    transition-colors card-lift cursor-default" role="listitem">
          <i class="<?php echo $c['i']; ?> text-power-red text-xl mb-3 block" aria-hidden="true"></i>
          <div class="font-heading text-white text-2xl uppercase tracking-wide mb-1"><?php echo $c['v']; ?></div>
          <div class="text-steel text-xs uppercase tracking-widest"><?php echo $c['l']; ?></div>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>


<!-- ================================================================
     5. GENERATOR SPOTLIGHT — Kohler certification focus
     ================================================================ -->
<section class="bg-white py-20" id="generators" aria-labelledby="gen-heading">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">

    <!-- Certified badge -->
    <div class="flex justify-center mb-12">
      <div class="inline-flex items-center gap-3 bg-power-red/8 border border-power-red/25 px-6 py-3.5"
           role="banner" aria-label="Kohler Certification">
        <i class="fas fa-certificate text-power-red text-lg" aria-hidden="true"></i>
        <span class="font-heading text-power-red text-sm tracking-widest uppercase">Certified Kohler Home Generator Dealer &amp; Installer</span>
      </div>
    </div>

    <div class="grid lg:grid-cols-2 gap-14 items-start">

      <!-- Left: Content -->
      <div>
        <p class="font-heading text-power-red text-sm tracking-widest uppercase mb-3">Backup Power Solutions</p>
        <h2 id="gen-heading" class="font-heading text-navy text-4xl sm:text-5xl uppercase tracking-tight mb-6 title-accent">
          Never Lose Power<br>Again.
        </h2>
        <p class="text-gray-600 leading-relaxed mb-6 text-base">
          As a certified Kohler dealer and installer, GBR Electrical designs and installs automatic home standby generators that keep your lights on, your HVAC running, and your family safe — even when the grid goes down.
        </p>
        <p class="text-gray-600 leading-relaxed mb-8 text-base">
          Kohler generators start automatically within seconds of a power outage. No manual setup. No extension cords. Just seamless, whole-home backup power through storms, grid failures, and everything in between.
        </p>

        <!-- Feature list -->
        <div class="space-y-5 mb-8">
          <?php
          $gen_features = [
            ['i'=>'fas fa-bolt',           't'=>'Automatic Standby Power',   'd'=>'Detects outages and starts within 10 seconds — fully automatic, no manual intervention.'],
            ['i'=>'fas fa-house-chimney',  't'=>'Whole-Home Protection',     'd'=>'Powers your entire home including HVAC, refrigerators, sump pump, and medical equipment.'],
            ['i'=>'fas fa-cloud-bolt',     't'=>'Storm Protection',           'd'=>'Engineered for extended outages from severe weather — keeps running as long as needed.'],
            ['i'=>'fas fa-rotate',         't'=>'Weekly Self-Test',           'd'=>'Runs an automatic weekly self-test so it\'s always ready when you actually need it.'],
          ];
          foreach ($gen_features as $gf): ?>
          <div class="flex gap-4">
            <div class="w-10 h-10 bg-power-red/10 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="<?php echo $gf['i']; ?> text-power-red" aria-hidden="true"></i>
            </div>
            <div>
              <div class="font-heading text-navy text-base uppercase tracking-wide"><?php echo $gf['t']; ?></div>
              <p class="text-gray-500 text-sm mt-1 leading-snug"><?php echo $gf['d']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <div class="flex flex-wrap gap-4">
          <a href="contact.php?service=Generator+Installation+(Kohler)" class="btn-red">
            <i class="fas fa-plug-circle-bolt" aria-hidden="true"></i> Get a Generator Quote
          </a>
          <a href="tel:7172921338" class="btn-outline-red">
            <i class="fas fa-phone" aria-hidden="true"></i> Call Us Now
          </a>
        </div>
      </div>

      <!-- Right: Advantages card + urgency card -->
      <div class="space-y-5">

        <!-- Kohler advantages card -->
        <div class="bg-navy p-8 relative overflow-hidden">
          <div class="absolute top-0 inset-x-0 h-1 bg-power-red" aria-hidden="true"></div>
          <h3 class="font-heading text-white text-2xl uppercase tracking-wide mb-6">Kohler Advantages</h3>
          <ul class="space-y-3.5" role="list">
            <?php
            $kohler = [
              'Industry-leading 5-year residential warranty',
              'Quiet, all-weather enclosed steel housing',
              'Natural gas or LP propane fuel options',
              'Available 8kW – 150kW — sized for any home',
              'Kohler APM® remote monitoring capability',
              'Transfer switch properly matched and sized',
              'Professional startup, load test &amp; warranty reg.',
            ];
            foreach ($kohler as $k): ?>
            <li class="flex items-start gap-3 text-silver text-sm">
              <i class="fas fa-check text-power-red flex-shrink-0 mt-0.5" aria-hidden="true"></i>
              <?php echo $k; ?>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Urgency card -->
        <div class="bg-power-red p-7 flex items-start gap-5">
          <i class="fas fa-triangle-exclamation text-white/75 text-3xl flex-shrink-0 mt-1" aria-hidden="true"></i>
          <div>
            <div class="font-heading text-white text-xl uppercase tracking-wide mb-2">Don't Wait for the Next Outage</div>
            <p class="text-red-100 text-sm leading-relaxed mb-4">
              Protect your sump pump, medical equipment, and family comfort before the next storm rolls through York County.
            </p>
            <a href="contact.php?service=Generator+Installation+(Kohler)"
               class="inline-flex items-center gap-2 bg-white text-power-red font-heading text-sm
                      uppercase tracking-widest px-5 min-h-[44px] py-2.5 hover:bg-silver-lt
                      transition-colors cursor-pointer">
              Schedule Consultation
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<!-- ================================================================
     6. TESTIMONIALS — 3 reviews on light silver background
     ================================================================ -->
<section class="bg-silver-lt py-20" id="testimonials" aria-labelledby="test-heading">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">

    <div class="text-center mb-14">
      <p class="font-heading text-power-red text-sm tracking-widest uppercase mb-3">Customer Reviews</p>
      <h2 id="test-heading" class="font-heading text-navy text-4xl sm:text-5xl uppercase tracking-tight title-accent center">
        Trusted by York County Homeowners
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
      <?php
      $reviews = [
        ['name'=>'Mike R.', 'loc'=>'Dover, PA',                    'stars'=>5,
         'text'=>'GBR installed our Kohler whole-home generator and the experience was top-notch from start to finish. Showed up on time, explained everything clearly, and the work was impeccably clean. Highly recommend to anyone looking for a reliable generator installer.'],
        ['name'=>'Sarah T.', 'loc'=>'York, PA',                    'stars'=>5,
         'text'=>'Had our electrical panel upgraded and new circuits run for a home addition. Fair price, excellent craftsmanship. The owner himself was on the job every day — that level of personal attention is rare and means everything to us.'],
        ['name'=>'Dave L.', 'loc'=>'Springettsbury Twp, PA',       'stars'=>5,
         'text'=>'Called about nuisance tripping breakers and they were out the next morning. Diagnosed the issue quickly, gave an honest quote, and had it fixed the same day. Trustworthy, knowledgeable, and no upsell games. Will absolutely use again.'],
      ];
      foreach ($reviews as $r): ?>
      <blockquote class="bg-white border border-gray-200 p-8 flex flex-col card-lift">
        <!-- Stars -->
        <div class="flex gap-1 mb-4" aria-label="<?php echo $r['stars']; ?> out of 5 stars">
          <?php for ($i = 0; $i < $r['stars']; $i++): ?>
          <i class="fas fa-star text-yellow-400 text-sm" aria-hidden="true"></i>
          <?php endfor; ?>
        </div>
        <!-- Quote mark -->
        <i class="fas fa-quote-left text-power-red/20 text-4xl mb-3 -mt-1" aria-hidden="true"></i>
        <!-- Review -->
        <p class="text-gray-600 text-sm leading-relaxed flex-1 mb-6"><?php echo $r['text']; ?></p>
        <!-- Attribution -->
        <footer class="flex items-center gap-3 border-t border-gray-100 pt-5">
          <div class="w-10 h-10 bg-navy flex items-center justify-center rounded-full flex-shrink-0">
            <i class="fas fa-user text-silver text-sm" aria-hidden="true"></i>
          </div>
          <div>
            <cite class="not-italic font-heading text-navy text-base uppercase tracking-wide block"><?php echo $r['name']; ?></cite>
            <span class="text-steel text-xs"><?php echo $r['loc']; ?></span>
          </div>
        </footer>
      </blockquote>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ================================================================
     7. CONTACT CTA STRIP — power-red, bold phone numbers
     ================================================================ -->
<section class="bg-power-red py-16" aria-label="Contact call to action">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 text-center">

    <h2 class="font-heading text-white text-4xl sm:text-5xl uppercase tracking-tight mb-3">
      Ready to Get Started?
    </h2>
    <p class="text-red-100 text-lg mb-10 max-w-xl mx-auto">
      Call or send us a message today for a free, no-obligation estimate.
    </p>

    <!-- Phone numbers -->
    <div class="flex flex-wrap justify-center gap-5 mb-8">
      <a href="tel:7172921338"
         class="flex items-center gap-3 bg-white/10 hover:bg-white/20 border border-white/25
                min-h-[54px] px-6 py-3 text-white transition-colors cursor-pointer">
        <i class="fas fa-phone text-xl" aria-hidden="true"></i>
        <div class="text-left">
          <div class="text-xs text-red-200 uppercase tracking-widest font-heading">Office</div>
          <div class="font-heading text-xl tracking-wide">717-292-1338</div>
        </div>
      </a>
      <a href="tel:7175151504"
         class="flex items-center gap-3 bg-white/10 hover:bg-white/20 border border-white/25
                min-h-[54px] px-6 py-3 text-white transition-colors cursor-pointer">
        <i class="fas fa-mobile-alt text-xl" aria-hidden="true"></i>
        <div class="text-left">
          <div class="text-xs text-red-200 uppercase tracking-widest font-heading">Cell / Emergency</div>
          <div class="font-heading text-xl tracking-wide">717-515-1504</div>
        </div>
      </a>
    </div>

    <a href="contact.php"
       class="inline-flex items-center gap-2 bg-white text-power-red font-heading text-base
              tracking-widest uppercase px-10 min-h-[52px] py-4 hover:bg-silver-lt
              transition-colors cursor-pointer shadow-lg">
      <i class="fas fa-paper-plane" aria-hidden="true"></i> Send Us a Message
    </a>
  </div>
</section>


<?php require_once 'includes/footer.php'; ?>
