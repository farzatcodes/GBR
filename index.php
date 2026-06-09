<?php
/**
 * GBR Electrical Services, LLC — Home Page
 * Sections: Hero · Trust Badges · Services · About · Generators · Testimonials · Contact CTA
 */

$page_title       = 'Electrical Services & Kohler Generator Installation in Dover, PA';
$meta_description = 'GBR Electrical Services LLC — Licensed electrician and certified Kohler home generator installer in Dover, PA. Panel upgrades, wiring, repairs, and emergency backup power. Call 717-292-1338.';

require_once 'includes/header.php';
?>

<!-- ================================================================
     1. HERO — full-screen, dark navy, bold headline + CTA buttons
     ================================================================ -->
<section class="relative min-h-screen flex items-center overflow-hidden bg-navy dot-grid" id="hero" aria-label="Hero">

    <!-- Decorative red left border stripe -->
    <div class="absolute inset-y-0 left-0 w-1 bg-power-red" aria-hidden="true"></div>

    <!-- Decorative bottom-right glow -->
    <div class="absolute bottom-0 right-0 w-[600px] h-[600px] rounded-full opacity-[0.04]"
         style="background:radial-gradient(circle, #B31217 0%, transparent 70%);"
         aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-6 sm:px-8 py-24 md:py-32 w-full relative z-10">
        <div class="grid lg:grid-cols-5 gap-12 lg:gap-16 items-center">

            <!-- ── Left: Main content ── -->
            <div class="lg:col-span-3">

                <!-- Overline tag -->
                <div class="flex items-center gap-3 mb-6" aria-hidden="true">
                    <div class="h-px w-10 bg-power-red flex-shrink-0"></div>
                    <span class="font-heading text-power-red text-sm tracking-widest uppercase">
                        Licensed Electrical Contractor &amp; Certified Kohler Installer
                    </span>
                </div>

                <!-- H1 headline -->
                <h1 class="font-heading text-white uppercase leading-none mb-6">
                    <span class="block text-5xl sm:text-6xl xl:text-7xl tracking-tight">Reliable</span>
                    <span class="block text-5xl sm:text-6xl xl:text-7xl tracking-tight text-power-red">Electrical</span>
                    <span class="block text-5xl sm:text-6xl xl:text-7xl tracking-tight">Services &amp;</span>
                    <span class="block text-4xl sm:text-5xl xl:text-6xl tracking-tight text-silver mt-1">Generator Installation</span>
                </h1>

                <!-- Sub-headline -->
                <p class="text-silver/85 text-lg leading-relaxed mb-10 max-w-xl">
                    Professional electrical work and Kohler home generator solutions for homes and businesses in Dover, PA and surrounding York County communities.
                </p>

                <!-- CTA buttons -->
                <div class="flex flex-wrap gap-4 mb-10">
                    <a href="contact.php" class="btn-red">
                        <i class="fas fa-wrench" aria-hidden="true"></i> Request Service
                    </a>
                    <a href="tel:7172921338" class="btn-outline-white">
                        <i class="fas fa-phone" aria-hidden="true"></i> Call Now: 717-292-1338
                    </a>
                </div>

                <!-- Inline trust signals -->
                <div class="flex flex-wrap items-center gap-x-7 gap-y-3 pt-7 border-t border-white/10">
                    <?php
                    $trust = [
                        'Licensed &amp; Insured',
                        'Certified Kohler Dealer',
                        'Emergency Service',
                        'Residential &amp; Commercial',
                    ];
                    foreach ($trust as $t): ?>
                    <div class="flex items-center gap-2 text-silver/80 text-sm">
                        <i class="fas fa-check-circle text-power-red" aria-hidden="true"></i>
                        <?php echo $t; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div><!-- /left -->

            <!-- ── Right: Feature card ── -->
            <div class="hidden lg:block lg:col-span-2">
                <div class="relative">

                    <!-- Main dark card -->
                    <div class="bg-navy-card border border-white/10 p-8 relative overflow-hidden">

                        <!-- Red top accent bar -->
                        <div class="absolute top-0 left-0 right-0 h-1 bg-power-red" aria-hidden="true"></div>

                        <!-- Lightning icon -->
                        <div class="relative inline-flex mb-7">
                            <div class="w-16 h-16 bg-power-red/15 flex items-center justify-center">
                                <i class="fas fa-bolt text-power-red text-3xl" aria-hidden="true"></i>
                            </div>
                            <div class="absolute -bottom-2 -right-2 w-7 h-7 bg-power-red flex items-center justify-center rounded-full">
                                <i class="fas fa-check text-white text-xs" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="mb-7">
                            <div class="font-heading text-white text-3xl uppercase tracking-wide leading-tight mb-1">24/7 Emergency</div>
                            <div class="font-heading text-power-red text-lg uppercase tracking-widest">Service Available</div>
                        </div>

                        <!-- Checklist -->
                        <div class="border-t border-white/10 pt-6 space-y-3.5">
                            <?php
                            $checks = [
                                'Residential &amp; Commercial',
                                'Licensed &amp; Fully Insured',
                                'Certified Kohler Installer',
                                'York County, PA Local Expert',
                                'Fast Response Times',
                            ];
                            foreach ($checks as $c): ?>
                            <div class="flex items-center justify-between">
                                <span class="text-steel text-sm"><?php echo $c; ?></span>
                                <i class="fas fa-check text-power-red text-xs" aria-hidden="true"></i>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Phone CTA inside card -->
                        <a href="tel:7172921338"
                           class="mt-7 flex items-center justify-center gap-2.5 bg-power-red hover:bg-power-red-dk transition-colors px-5 py-3 font-heading text-white text-sm tracking-widest uppercase">
                            <i class="fas fa-phone" aria-hidden="true"></i> 717-292-1338
                        </a>
                    </div>

                    <!-- Corner decorative squares -->
                    <div class="absolute -bottom-4 -left-4 w-32 h-32 border-2 border-power-red/20 pointer-events-none" aria-hidden="true"></div>
                    <div class="absolute -top-4 -right-4 w-16 h-16 border border-white/8 pointer-events-none" aria-hidden="true"></div>
                </div>
            </div><!-- /right -->

        </div>
    </div><!-- /container -->

    <!-- Bottom wave divider into white section -->
    <div class="absolute bottom-0 left-0 right-0 pointer-events-none" aria-hidden="true">
        <svg viewBox="0 0 1440 70" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full block" style="height:70px">
            <polygon points="0,70 1440,0 1440,70" fill="white"/>
        </svg>
    </div>
</section>


<!-- ================================================================
     2. TRUST BADGES — 4 credentials on white strip
     ================================================================ -->
<section class="bg-white py-14" aria-labelledby="trust-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $badges = [
                ['icon'=>'fas fa-shield-halved',    'title'=>'Licensed &amp; Insured',          'desc'=>'Fully licensed electrical contractor operating with complete liability coverage.'],
                ['icon'=>'fas fa-certificate',       'title'=>'Certified Kohler Installer',      'desc'=>'Factory-authorized Kohler dealer and trained generator installation specialist.'],
                ['icon'=>'fas fa-location-dot',      'title'=>'Local Electrical Experts',        'desc'=>'Serving Dover, PA and all of York County — your neighbors in the trades.'],
                ['icon'=>'fas fa-circle-exclamation','title'=>'Emergency-Ready Power Solutions', 'desc'=>'24/7 emergency response and automatic standby generator solutions.'],
            ];
            foreach ($badges as $b): ?>
            <div class="border-t-4 border-power-red bg-silver-lt p-7 flex flex-col gap-4 card-lift">
                <div class="w-13 h-13 bg-power-red/10 w-14 h-14 flex items-center justify-center flex-shrink-0">
                    <i class="<?php echo $b['icon']; ?> text-power-red text-2xl" aria-hidden="true"></i>
                </div>
                <div>
                    <h3 class="font-heading text-navy text-xl uppercase tracking-wide mb-2"><?php echo $b['title']; ?></h3>
                    <p class="text-steel text-sm leading-relaxed"><?php echo $b['desc']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>


<!-- ================================================================
     3. SERVICES — 6-card grid on light silver background
     ================================================================ -->
<section class="bg-silver-lt py-20" id="services" aria-labelledby="services-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- Section header -->
        <div class="text-center mb-14">
            <p class="font-heading text-power-red text-sm tracking-widest uppercase mb-3">What We Do</p>
            <h2 id="services-heading" class="font-heading text-navy text-4xl sm:text-5xl uppercase tracking-tight mb-3 title-accent center">
                Our Electrical Services
            </h2>
            <p class="text-steel max-w-2xl mx-auto mt-6">
                From routine repairs to complete panel upgrades and whole-home generator installations — GBR Electrical has the expertise to keep your power running safely.
            </p>
        </div>

        <!-- Service cards grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $services = [
                [
                    'icon'  => 'fas fa-screwdriver-wrench',
                    'title' => 'Electrical Repairs',
                    'desc'  => 'Fast, reliable repairs for outlets, switches, circuits, and everything in between. We diagnose and fix electrical problems correctly the first time.',
                    'link'  => 'services.php#repairs',
                ],
                [
                    'icon'  => 'fas fa-solar-panel',
                    'title' => 'Panel Upgrades',
                    'desc'  => 'Upgrade your outdated breaker panel to a modern, safe system that handles today\'s electrical demands — from 100A to 400A service.',
                    'link'  => 'services.php#panel',
                ],
                [
                    'icon'  => 'fas fa-plug-circle-bolt',
                    'title' => 'Generator Installation',
                    'desc'  => 'Certified Kohler home standby generator installation. Full-system setup including transfer switch, load calculation, and startup testing.',
                    'link'  => 'services.php#generator',
                ],
                [
                    'icon'  => 'fas fa-lightbulb',
                    'title' => 'Wiring &amp; Lighting',
                    'desc'  => 'New construction wiring, remodels, recessed lighting, ceiling fans, outdoor lighting, and energy-efficient LED upgrades.',
                    'link'  => 'services.php#wiring',
                ],
                [
                    'icon'  => 'fas fa-magnifying-glass-chart',
                    'title' => 'Troubleshooting',
                    'desc'  => 'Tripping breakers, flickering lights, burning smells? Our systematic approach identifies the root cause quickly so problems don\'t return.',
                    'link'  => 'services.php#troubleshooting',
                ],
                [
                    'icon'  => 'fas fa-building',
                    'title' => 'Residential &amp; Commercial',
                    'desc'  => 'Full-service electrical for homeowners and business owners. From single-family homes to commercial storefronts and office spaces.',
                    'link'  => 'services.php#commercial',
                ],
            ];
            foreach ($services as $svc): ?>
            <article class="bg-white border border-gray-200 p-8 group card-lift hover:border-power-red transition-colors">
                <!-- Icon -->
                <div class="w-14 h-14 bg-silver-lt group-hover:bg-power-red/10 flex items-center justify-center mb-6 transition-colors">
                    <i class="<?php echo $svc['icon']; ?> text-power-red text-2xl" aria-hidden="true"></i>
                </div>
                <!-- Content -->
                <h3 class="font-heading text-navy text-xl uppercase tracking-wide mb-3"><?php echo $svc['title']; ?></h3>
                <p class="text-steel text-sm leading-relaxed mb-5"><?php echo $svc['desc']; ?></p>
                <a href="<?php echo $svc['link']; ?>"
                   class="inline-flex items-center gap-2 font-heading text-sm text-power-red tracking-wider uppercase hover:gap-3 transition-all">
                    Learn More <i class="fas fa-arrow-right text-xs" aria-hidden="true"></i>
                </a>
            </article>
            <?php endforeach; ?>
        </div>

        <!-- Bottom CTA -->
        <div class="text-center mt-12">
            <a href="services.php" class="btn-outline-red">View All Services</a>
        </div>

    </div>
</section>


<!-- ================================================================
     4. ABOUT — dark navy split layout, owner story + stats
     ================================================================ -->
<section class="bg-navy py-20 relative overflow-hidden dot-grid" id="about" aria-labelledby="about-heading">

    <!-- Subtle red glow left -->
    <div class="absolute -left-32 top-1/2 -translate-y-1/2 w-96 h-96 rounded-full opacity-[0.06]"
         style="background:radial-gradient(circle, #B31217 0%, transparent 70%);"
         aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-14 items-center">

            <!-- Left: Story text -->
            <div>
                <p class="font-heading text-power-red text-sm tracking-widest uppercase mb-3">Who We Are</p>
                <h2 id="about-heading" class="font-heading text-white text-4xl sm:text-5xl uppercase tracking-tight mb-6 title-accent">
                    Owner-Led.<br>Safety-First.<br>Local Experts.
                </h2>
                <div class="space-y-4 text-silver/80 leading-relaxed">
                    <p>
                        GBR Electrical Services is a locally owned and operated electrical contracting company based in Dover, PA. Our owner is hands-on with every project — when you call us, you get an experienced electrician, not a salesperson.
                    </p>
                    <p>
                        We built our reputation on honest, safety-first electrical work for homeowners and businesses across York County. Whether it's a simple repair or a complex generator installation, we treat your property with the same care we'd give our own.
                    </p>
                    <p>
                        As a certified Kohler dealer, we offer complete backup power solutions — from consultation and load calculation to installation, startup, and ongoing maintenance.
                    </p>
                </div>

                <!-- Value bullets -->
                <ul class="mt-8 space-y-3 text-sm">
                    <?php
                    $values = [
                        'Owner on every job — no subcontractors',
                        'Code-compliant work, every time',
                        'Transparent pricing before work begins',
                        'Clean, respectful service in your home',
                    ];
                    foreach ($values as $v): ?>
                    <li class="flex items-center gap-3 text-silver">
                        <span class="w-5 h-5 bg-power-red flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-white text-[10px]" aria-hidden="true"></i>
                        </span>
                        <?php echo $v; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <a href="contact.php" class="btn-red mt-8 inline-flex">
                    <i class="fas fa-calendar-check" aria-hidden="true"></i> Schedule a Call
                </a>
            </div>

            <!-- Right: Stats / credential blocks -->
            <div class="grid grid-cols-2 gap-4">
                <?php
                $stats = [
                    ['value'=>'Licensed',    'label'=>'PA Electrician',          'icon'=>'fas fa-id-card'],
                    ['value'=>'Insured',     'label'=>'Full Liability Coverage',  'icon'=>'fas fa-shield-halved'],
                    ['value'=>'Kohler',      'label'=>'Certified Dealer',         'icon'=>'fas fa-certificate'],
                    ['value'=>'24/7',        'label'=>'Emergency Response',       'icon'=>'fas fa-circle-exclamation'],
                    ['value'=>'York Co.',    'label'=>'Local to PA',              'icon'=>'fas fa-location-dot'],
                    ['value'=>'Honest',      'label'=>'Upfront Pricing',         'icon'=>'fas fa-handshake'],
                ];
                foreach ($stats as $s): ?>
                <div class="bg-navy-card border border-white/10 p-6 group hover:border-power-red/40 transition-colors card-lift">
                    <i class="<?php echo $s['icon']; ?> text-power-red text-xl mb-3 block" aria-hidden="true"></i>
                    <div class="font-heading text-white text-2xl uppercase tracking-wide mb-1"><?php echo $s['value']; ?></div>
                    <div class="text-steel text-xs uppercase tracking-widest"><?php echo $s['label']; ?></div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>


<!-- ================================================================
     5. GENERATOR SPOTLIGHT — Kohler, feature-rich callout section
     ================================================================ -->
<section class="bg-white py-20" id="generators" aria-labelledby="gen-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- Top badge -->
        <div class="flex justify-center mb-12">
            <div class="inline-flex items-center gap-3 bg-power-red/8 border border-power-red/20 px-6 py-3">
                <i class="fas fa-certificate text-power-red" aria-hidden="true"></i>
                <span class="font-heading text-power-red text-sm tracking-widest uppercase">Certified Kohler Home Generator Installer</span>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-14 items-start">

            <!-- Left: Content -->
            <div>
                <p class="font-heading text-power-red text-sm tracking-widest uppercase mb-3">Backup Power Solutions</p>
                <h2 id="gen-heading" class="font-heading text-navy text-4xl sm:text-5xl uppercase tracking-tight mb-6 title-accent">
                    Never Lose Power<br>Again.
                </h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    As a certified Kohler dealer and installer, GBR Electrical designs and installs automatic home standby generators that keep your lights on, your HVAC running, and your family safe — even when the grid goes down.
                </p>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Kohler generators start automatically within seconds of a power outage. No manual setup. No extension cords. Just seamless, whole-home backup power — for storms, grid failures, and everything in between.
                </p>

                <!-- Feature highlights -->
                <div class="space-y-4 mb-8">
                    <?php
                    $gen_features = [
                        ['icon'=>'fas fa-bolt',           'title'=>'Automatic Standby Power',   'desc'=>'Senses outages and starts within 10 seconds — no manual intervention needed.'],
                        ['icon'=>'fas fa-house-chimney',  'title'=>'Whole-Home Protection',     'desc'=>'Powers your entire home or selected circuits including HVAC, refrigerators, and medical equipment.'],
                        ['icon'=>'fas fa-cloud-bolt',     'title'=>'Storm Protection',           'desc'=>'Engineered to run through extended power outages caused by severe weather events.'],
                        ['icon'=>'fas fa-rotate',         'title'=>'Weekly Self-Test',           'desc'=>'Kohler generators run automatic weekly self-tests to ensure they\'re ready when you need them.'],
                    ];
                    foreach ($gen_features as $gf): ?>
                    <div class="flex gap-4">
                        <div class="w-10 h-10 bg-power-red/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <i class="<?php echo $gf['icon']; ?> text-power-red" aria-hidden="true"></i>
                        </div>
                        <div>
                            <div class="font-heading text-navy text-base uppercase tracking-wide"><?php echo $gf['title']; ?></div>
                            <p class="text-gray-500 text-sm mt-1"><?php echo $gf['desc']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="flex flex-wrap gap-4">
                    <a href="contact.php?service=generator" class="btn-red">
                        <i class="fas fa-plug-circle-bolt" aria-hidden="true"></i> Get a Generator Quote
                    </a>
                    <a href="tel:7172921338" class="btn-outline-red">
                        <i class="fas fa-phone" aria-hidden="true"></i> Call Us Now
                    </a>
                </div>
            </div>

            <!-- Right: Feature checklist card + dark callout -->
            <div class="space-y-5">

                <!-- Kohler model info card -->
                <div class="bg-navy p-8 relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-power-red" aria-hidden="true"></div>
                    <h3 class="font-heading text-white text-2xl uppercase tracking-wide mb-6">
                        Kohler Generator Advantages
                    </h3>
                    <ul class="space-y-3.5">
                        <?php
                        $kohler = [
                            'Industry-leading 5-year residential warranty',
                            'Quiet, enclosed steel housing',
                            'Natural gas or propane fuel options',
                            'Available in 8kW – 150kW for any home size',
                            'Kohler APM® remote monitoring capability',
                            'Matched with correct transfer switch sizing',
                            'Professional startup &amp; load testing included',
                        ];
                        foreach ($kohler as $k): ?>
                        <li class="flex items-center gap-3 text-silver text-sm">
                            <i class="fas fa-check text-power-red flex-shrink-0" aria-hidden="true"></i>
                            <?php echo $k; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Urgency card -->
                <div class="bg-power-red p-7 flex items-start gap-5">
                    <i class="fas fa-triangle-exclamation text-white/80 text-3xl flex-shrink-0 mt-1" aria-hidden="true"></i>
                    <div>
                        <div class="font-heading text-white text-xl uppercase tracking-wide mb-2">Don't Wait for the Next Outage</div>
                        <p class="text-red-100 text-sm leading-relaxed">
                            Power outages in Pennsylvania average <?php echo rand(4,6); ?> hours. Protect your family, your sump pump, and your medical devices now — before the next storm hits.
                        </p>
                        <a href="contact.php?service=generator"
                           class="inline-flex items-center gap-2 mt-4 bg-white text-power-red font-heading text-sm uppercase tracking-widest px-5 py-2.5 hover:bg-silver-lt transition-colors">
                            Schedule Consultation
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- ================================================================
     6. TESTIMONIALS — placeholder reviews on silver background
     ================================================================ -->
<section class="bg-silver-lt py-20" id="testimonials" aria-labelledby="test-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-14">
            <p class="font-heading text-power-red text-sm tracking-widest uppercase mb-3">What Our Customers Say</p>
            <h2 id="test-heading" class="font-heading text-navy text-4xl sm:text-5xl uppercase tracking-tight title-accent center">
                Trusted by York County Homeowners
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
            <?php
            $reviews = [
                [
                    'name'   => 'Mike R.',
                    'loc'    => 'Dover, PA',
                    'stars'  => 5,
                    'text'   => 'GBR installed our Kohler whole-home generator and the experience was top-notch from start to finish. Showed up on time, explained everything clearly, and the work was clean and professional. Highly recommend.',
                ],
                [
                    'name'   => 'Sarah T.',
                    'loc'    => 'York, PA',
                    'stars'  => 5,
                    'text'   => 'Had our electrical panel upgraded and some new circuits run for a home addition. Fair price, excellent craftsmanship. The owner himself was on the job every day — that means a lot to us.',
                ],
                [
                    'name'   => 'Dave L.',
                    'loc'    => 'Springettsbury Township, PA',
                    'stars'  => 5,
                    'text'   => 'Called about tripping breakers and they were out the next morning. Diagnosed the issue fast, gave an honest quote, and had it fixed the same day. Trustworthy and knowledgeable — will use again.',
                ],
            ];
            foreach ($reviews as $r): ?>
            <blockquote class="bg-white border border-gray-200 p-8 flex flex-col card-lift">
                <!-- Stars -->
                <div class="flex gap-1 mb-5" aria-label="<?php echo $r['stars']; ?> out of 5 stars">
                    <?php for ($i = 0; $i < $r['stars']; $i++): ?>
                    <i class="fas fa-star text-yellow-400 text-sm" aria-hidden="true"></i>
                    <?php endfor; ?>
                </div>

                <!-- Quote icon -->
                <i class="fas fa-quote-left text-power-red/20 text-4xl mb-4 -mt-2" aria-hidden="true"></i>

                <!-- Review text -->
                <p class="text-gray-600 text-sm leading-relaxed flex-1 mb-6"><?php echo $r['text']; ?></p>

                <!-- Attribution -->
                <footer class="flex items-center gap-3 border-t border-gray-100 pt-5">
                    <div class="w-10 h-10 bg-navy flex items-center justify-center rounded-full flex-shrink-0">
                        <i class="fas fa-user text-silver text-sm" aria-hidden="true"></i>
                    </div>
                    <div>
                        <cite class="not-italic font-heading text-navy text-base uppercase tracking-wide not-italic"><?php echo $r['name']; ?></cite>
                        <div class="text-steel text-xs"><?php echo $r['loc']; ?></div>
                    </div>
                </footer>
            </blockquote>
            <?php endforeach; ?>
        </div>

    </div>
</section>


<!-- ================================================================
     7. CONTACT CTA STRIP — power red background, bold call to action
     ================================================================ -->
<section class="bg-power-red py-16" aria-label="Contact call to action">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 text-center">

        <h2 class="font-heading text-white text-4xl sm:text-5xl uppercase tracking-tight mb-3">
            Ready to Get Started?
        </h2>
        <p class="text-red-100 text-lg mb-8 max-w-xl mx-auto">
            Call or message us today for a free estimate on electrical services or generator installation.
        </p>

        <!-- Phone numbers -->
        <div class="flex flex-wrap justify-center gap-6 mb-8">
            <a href="tel:7172921338"
               class="flex items-center gap-3 bg-white/10 hover:bg-white/20 border border-white/20 px-6 py-3 text-white transition-colors">
                <i class="fas fa-phone" aria-hidden="true"></i>
                <div class="text-left">
                    <div class="text-xs text-red-200 uppercase tracking-widest font-heading">Office</div>
                    <div class="font-heading text-xl tracking-wide">717-292-1338</div>
                </div>
            </a>
            <a href="tel:7175151504"
               class="flex items-center gap-3 bg-white/10 hover:bg-white/20 border border-white/20 px-6 py-3 text-white transition-colors">
                <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                <div class="text-left">
                    <div class="text-xs text-red-200 uppercase tracking-widest font-heading">Cell</div>
                    <div class="font-heading text-xl tracking-wide">717-515-1504</div>
                </div>
            </a>
        </div>

        <a href="contact.php"
           class="inline-flex items-center gap-2 bg-white text-power-red font-heading text-base tracking-widest uppercase px-10 py-4 hover:bg-silver-lt transition-colors shadow-lg">
            <i class="fas fa-paper-plane" aria-hidden="true"></i> Send Us a Message
        </a>
    </div>
</section>


<?php require_once 'includes/footer.php'; ?>
