<?php
$page_title       = 'Kohler Generators: Why GBR Recommends Them for York County Homes';
$meta_description = 'GBR Electrical in Dover, PA recommends Kohler generators for York County homes — American-made quality, superior voltage regulation, and a powerful warranty backed by an authorized dealer.';
$canonical        = 'https://lightsonpa.com/kohler-generators-york-county-pa.php';
$og_type          = 'article';
$article_date     = '2026-06-14';

require_once 'includes/header.php';

$schema = [
  '@context'        => 'https://schema.org',
  '@type'           => 'BlogPosting',
  'headline'        => 'Kohler Generators: Why GBR Electrical Recommends Them for Every York County Home',
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
  'keywords' => 'authorized Kohler generator dealer PA, Kohler generator York County, Kohler generator installer Dover PA, generator installation Pennsylvania, standby generator Central PA',
];
echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT) . '</script>';

$faq_items = [
  [
    'q' => 'Is GBR Electrical a Kohler dealer in PA?',
    'a' => 'Yes. GBR Electrical Services, LLC is an authorized Kohler generator dealer (Dealer #1506430) serving Dover, PA, York County, and Central Pennsylvania. As an authorized dealer, GBR is factory-trained on Kohler equipment and provides full-service sizing, installation, warranty registration, and ongoing maintenance.',
  ],
  [
    'q' => 'What areas in Pennsylvania does GBR Electrical serve as a Kohler dealer?',
    'a' => 'GBR Electrical installs and services Kohler standby generators throughout York County, PA, including Dover, York, Red Lion, Spring Grove, Hanover, Manchester, Dillsburg, Mechanicsburg, and surrounding Central Pennsylvania communities.',
  ],
  [
    'q' => 'Why does GBR Electrical recommend Kohler generators over other brands?',
    'a' => 'GBR Electrical recommends Kohler because of its American-made manufacturing quality, superior voltage regulation under real-world loads, and a comprehensive warranty backed by genuine parts and authorized-dealer support — all factors that matter for long-term reliability in Central Pennsylvania.',
  ],
  [
    'q' => 'How do I get a quote for a Kohler generator installation in York County?',
    'a' => 'Homeowners can request a free, no-pressure consultation by calling GBR Electrical at 717-467-1712 or submitting a request through the contact form at lightsonpa.com. GBR will assess your home\'s electrical load and recommend the right Kohler system for your needs.',
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
<section class="relative bg-navy overflow-hidden dot-grid py-20 md:py-24"
         aria-label="Article hero">
  <div class="absolute inset-y-0 left-0 w-1 bg-power-red" aria-hidden="true"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
    <nav aria-label="Breadcrumb" class="mb-6">
      <ol class="flex items-center flex-wrap gap-2 text-steel text-xs font-heading tracking-widest uppercase">
        <li><a href="index.php" class="hover:text-white transition-colors">Home</a></li>
        <li><i class="fas fa-chevron-right text-[9px]" aria-hidden="true"></i></li>
        <li><a href="blog.php" class="hover:text-white transition-colors">Articles</a></li>
        <li><i class="fas fa-chevron-right text-[9px]" aria-hidden="true"></i></li>
        <li class="text-silver" aria-current="page">Kohler Generators</li>
      </ol>
    </nav>

    <div class="flex items-center gap-3 mb-4">
      <div class="h-px w-10 bg-power-red flex-shrink-0" aria-hidden="true"></div>
      <span class="font-heading text-power-red text-sm tracking-widest uppercase">Kohler Generators</span>
    </div>

    <h1 class="font-heading text-white text-4xl sm:text-5xl xl:text-6xl uppercase tracking-tight mb-6 max-w-4xl leading-tight">
      Kohler Generators: Why GBR Recommends Them for Every <span class="text-power-red">York County Home</span>
    </h1>

    <div class="flex flex-wrap items-center gap-5 text-steel text-sm">
      <span class="flex items-center gap-2"><i class="fas fa-building text-power-red" aria-hidden="true"></i>GBR Electrical Services, LLC</span>
      <span class="flex items-center gap-2"><i class="fas fa-calendar text-power-red" aria-hidden="true"></i>June 14, 2026</span>
      <span class="flex items-center gap-2"><i class="fas fa-clock text-power-red" aria-hidden="true"></i>9 min read</span>
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
          <p>When GBR Electrical Services, LLC sits down with a homeowner in York County to talk about backup power, the conversation about equipment always comes around to the same place: Kohler. It's not a default recommendation driven by a dealer relationship or promotional incentives. It's a conclusion that comes from direct, on-the-ground experience installing and servicing generator systems across Central Pennsylvania — and from knowing exactly what performance looks like under real-world conditions.</p>
          <p>As an <strong>authorized Kohler generator dealer PA</strong>, GBR Electrical has the technical training, genuine parts access, and manufacturer support to speak about this equipment with real authority. What follows is the honest explanation of why Kohler stands out, what the authorized dealer relationship means for you as a homeowner, and why the choice of generator isn't just about brand preference — it's about long-term reliability in a region where that reliability genuinely matters.</p>
        </div>

        <!-- TOC -->
        <div class="bg-silver-lt border border-gray-200 rounded-xl p-6 mb-10">
          <h2 class="font-heading text-navy text-lg uppercase tracking-wide mb-4">In This Article</h2>
          <ol class="space-y-2 text-sm">
            <?php
            $toc = [
              '#american'  => 'American-Made Quality Built to Last',
              '#voltage'   => 'Voltage Regulation — Why It\'s More Important Than You Think',
              '#warranty'  => 'The Kohler Warranty — Real Protection, Not Fine Print',
              '#dealer'    => 'What It Means to Be an Authorized Kohler Dealer',
              '#sizing'    => 'Sizing Matters — Getting the Right Kohler System for Your Home',
              '#value'     => 'Making the Investment — A Straightforward Look at Value',
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


        <h2 id="american" class="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">American-Made Quality Built to Last</h2>
        <div class="text-gray-700 leading-relaxed text-base space-y-5 mb-8">
          <p>There's a reason Kohler has been a respected name in power generation since 1920. The company was founded in Kohler, Wisconsin, and standby generator systems sold under the Kohler Home Energy brand continue that tradition — engineered and assembled with a commitment to quality that reflects over a century of manufacturing experience.</p>
          <p>In an era when many products are engineered to a price point and built to be replaced rather than repaired, Kohler generators represent a different approach. These are machines designed to start when they're called upon, run reliably for extended periods, and hold up through years of weekly self-tests and actual emergency cycles without degrading.</p>
          <p>The American-made heritage matters beyond patriotism. It means engineering decisions aren't being made around cost-cutting priorities that compromise long-term reliability. It means parts and service infrastructure are well-established and accessible. And it means that when you invest in a Kohler system, you're investing in a product backed by the kind of institutional knowledge and manufacturing discipline that only comes from doing something — and doing it well — for a very long time.</p>
          <p>For York County homeowners making a significant investment in their property's infrastructure, that track record is meaningful. Backup power systems aren't replaced frequently. You're choosing equipment you intend to live with for 15 to 20 years. Choosing a company with over 100 years of power generation experience behind its products is a reasonable starting point.</p>
        </div>


        <h2 id="voltage" class="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">Voltage Regulation — Why It's More Important Than You Think</h2>
        <div class="text-gray-700 leading-relaxed text-base space-y-5 mb-8">
          <p>Homeowners evaluating generators typically focus on wattage: is this unit big enough to power my whole house? That's an important question. But there's a second technical dimension that matters just as much — and that often gets overlooked until it's too late — and that's voltage regulation.</p>
          <p>Voltage regulation refers to a generator's ability to maintain a stable output voltage regardless of changes in load. Every time an appliance cycles on or off — a refrigerator compressor starting, a well pump kicking in, an air conditioning unit beginning its cycle — it creates a demand fluctuation on the generator. A generator with poor voltage regulation will respond with voltage spikes or sags that pass through to your home's electrical system.</p>
          <p>Modern electronics are sensitive. Variable-frequency drives in HVAC equipment, the sophisticated control boards in modern refrigerators, medical devices, home office equipment, smart home systems — all of these can be damaged or disrupted by unstable power. A generator that technically "works" but delivers poor voltage regulation can damage the very appliances it's supposed to protect.</p>
          <p>Kohler's generator systems are engineered with tight voltage regulation as a design priority. Kohler's Decision-Maker controller technology manages load changes with precision, maintaining voltage stability that protects sensitive electronics and ensures consistent performance. When GBR Electrical recommends Kohler for <strong>standby generator Central PA</strong> installations, voltage regulation is always part of the explanation.</p>
        </div>


        <h2 id="warranty" class="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">The Kohler Warranty — Real Protection, Not Fine Print</h2>
        <div class="text-gray-700 leading-relaxed text-base space-y-5 mb-8">
          <p>Standby generator systems are significant investments. A properly sized whole-home standby generator for a typical Central Pennsylvania home represents a substantial cost — and that cost justifies careful evaluation of what happens if something goes wrong.</p>
          <p>Kohler's standby generator warranty is one of the strongest in the industry. Residential standby generators from Kohler are backed by a <strong>5-year, 2,000-hour warranty on the complete unit</strong>, covering parts and labor. That's not a warranty on just the engine or just the alternator — it's comprehensive coverage on the entire generator system.</p>
          <p>But a warranty is only as good as the company and the dealer standing behind it. This is where the authorized dealer relationship becomes critically important for <strong>generator installation Pennsylvania</strong> homeowners.</p>
          <p>Kohler warranties are administered through authorized dealers. When GBR Electrical installs your Kohler generator, your system is properly registered with Kohler and your warranty is documented. A generator purchased through an unauthorized dealer, installed by an uncertified installer, or registered improperly may have its warranty voided before the unit ever runs. That's not a technicality — it's a meaningful financial risk on a piece of equipment you're counting on to protect your home.</p>
        </div>


        <h2 id="dealer" class="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">What It Means to Be an Authorized Kohler Dealer</h2>
        <div class="text-gray-700 leading-relaxed text-base space-y-5 mb-8">
          <p>The designation "authorized Kohler generator dealer PA" isn't a marketing title that any electrical contractor can claim. It's a formal relationship that requires training, certification, demonstrated technical competence, and ongoing compliance with Kohler's standards.</p>
          <p><strong>Factory training.</strong> GBR Electrical's technicians have completed Kohler's manufacturer training programs, which cover system design, installation procedures, troubleshooting methodology, and maintenance requirements. This isn't generic generator knowledge — it's product-specific expertise on the exact systems being installed.</p>
          <p><strong>Genuine parts access.</strong> When a Kohler generator requires a part — whether during installation, routine service, or a warranty repair — authorized dealers have direct access to Kohler's genuine parts supply. Aftermarket or substitute parts can compromise performance and potentially void warranty coverage.</p>
          <p><strong>Technical support access.</strong> Kohler's technical support infrastructure is available to authorized dealers in ways it isn't to general contractors or homeowners. When an unusual diagnostic situation arises, GBR Electrical can get manufacturer-level guidance, which translates to faster, more accurate problem resolution.</p>
          <p><strong>Warranty administration.</strong> GBR Electrical handles the registration and documentation that activates your warranty coverage. You don't have to navigate that process on your own.</p>
          <p><strong>Direct quotes and sizing.</strong> Rather than guessing at the right generator capacity for your home's specific load profile, GBR Electrical uses Kohler's systematic approach to ensure the system you install is genuinely right-sized. You can also explore Kohler's free quote process at <a href="https://www.kohlerhomeenergy.rehlko.com/get-a-free-quote" target="_blank" rel="noopener noreferrer" class="text-power-red hover:underline">kohlerhomeenergy.rehlko.com</a> to get started.</p>
        </div>


        <h2 id="sizing" class="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">Sizing Matters — Getting the Right Kohler System for Your Home</h2>
        <div class="text-gray-700 leading-relaxed text-base space-y-5 mb-8">
          <p>One of the most common mistakes homeowners make when approaching generator installation is focusing too narrowly on a single number — typically, the largest wattage system they can afford — without considering what their home actually requires.</p>
          <p>Standby generators are sized by kilowatts, and the right size depends on your home's square footage, HVAC system type, whether you have a well pump, how many refrigerators and freezers you're protecting, and what electrical loads you consider essential versus optional.</p>
          <p>An undersized generator will start, but it won't be able to handle all the loads your home demands, particularly during startup surges from motors in HVAC equipment and well pumps. An oversized generator runs inefficiently and costs more to install and maintain than the situation justifies.</p>
          <p>GBR Electrical's consultation process for <strong>backup power York County PA</strong> homeowners begins with a proper load assessment — walking through your home's electrical profile systematically. Kohler's residential generator lineup covers a wide range of capacities, from units appropriate for partial-home coverage up to systems capable of powering large homes with demanding electrical loads without compromise.</p>
          <p>The Kohler 20kW air-cooled unit is a common choice for well-equipped Central Pennsylvania homes. Larger homes or those with high electrical demands often step up to Kohler's liquid-cooled lineup. GBR Electrical will guide you to the right solution for your specific situation — not the most expensive option, and not the cheapest, but the one that's genuinely correct for how you live in your home.</p>
        </div>


        <h2 id="value" class="font-heading text-navy text-3xl uppercase tracking-tight mb-4 mt-10">Making the Investment — A Straightforward Look at Value</h2>
        <div class="text-gray-700 leading-relaxed text-base space-y-5 mb-10">
          <p>Whole-home generator installation is a meaningful investment. GBR Electrical doesn't pretend otherwise, and homeowners deserve a straightforward conversation about value rather than vague reassurances about peace of mind.</p>
          <p><strong>Property value.</strong> Real estate professionals consistently report that standby generator systems add measurable value to homes in regions with significant outage history. In a market like Central Pennsylvania, where power disruptions are a known and recurring reality, that value is real and documented.</p>
          <p><strong>Avoided losses.</strong> A single extended outage — a basement flood from a failed sump pump, a refrigerator and freezer full of food, damage to sensitive electronics from a portable generator's unstable power output — can represent thousands of dollars in losses. The cumulative avoided loss over a system's 15 to 20 year lifespan is a legitimate part of the financial calculus.</p>
          <p><strong>Insurance implications.</strong> Some insurers offer premium adjustments for homes with standby generators, particularly in regions with documented flood or storm exposure. It's worth asking your carrier.</p>
          <p><strong>Quality of life.</strong> When you've invested in a Kohler standby generator installed by a <a href="index.php#about" class="text-power-red hover:underline font-semibold">licensed electrician York County</a> homeowners trust, you stop watching weather forecasts with a knot of anxiety. The next storm is just a storm. That's not a trivial benefit.</p>
          <p>GBR Electrical offers consultations to walk through the investment, answer technical questions, and provide clear, honest estimates. There's no pressure and no sales pitch — just information from a contractor whose reputation depends on giving you the right answer.</p>
        </div>

        <!-- Inline CTA -->
        <div class="bg-power-red rounded-xl p-8 text-center mb-10">
          <h3 class="font-heading text-white text-2xl uppercase tracking-wide mb-3">Get Your Free Kohler Quote</h3>
          <p class="text-red-100 text-sm mb-6">GBR Electrical — York County's authorized Kohler generator dealer and installer. No pressure, honest pricing.</p>
          <div class="flex flex-wrap justify-center gap-4">
            <a href="contact.php?service=Generator+Installation+(Kohler)" class="inline-flex items-center gap-2 bg-white text-power-red font-heading text-sm uppercase tracking-widest px-6 min-h-[44px] py-3 hover:bg-silver-lt transition-colors rounded-lg cursor-pointer">
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
              <i class="fas fa-certificate text-power-red text-2xl" aria-hidden="true"></i>
            </div>
            <div>
              <h3 class="font-heading text-navy text-xl uppercase tracking-wide mb-2">About GBR Electrical Services, LLC</h3>
              <address class="not-italic text-gray-600 text-sm leading-relaxed space-y-1">
                <p>Authorized Kohler generator dealer and licensed electrical contractor serving Dover, PA and all of York County for over 40 years. Military &amp; First Responder discounts available.</p>
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
            <a href="central-pa-whole-home-generators.php" class="block border border-gray-200 rounded-xl p-5 hover:border-power-red/50 hover:bg-silver-lt transition-all cursor-pointer">
              <div class="font-heading text-power-red text-xs tracking-widest uppercase mb-2">Generator Installation</div>
              <div class="font-heading text-navy text-base uppercase leading-snug">Why Central PA Homeowners Are Investing in Whole-Home Generators</div>
            </a>
            <a href="power-outages-dover-pa-generators.php" class="block border border-gray-200 rounded-xl p-5 hover:border-power-red/50 hover:bg-silver-lt transition-all cursor-pointer">
              <div class="font-heading text-power-red text-xs tracking-widest uppercase mb-2">Outage Preparedness</div>
              <div class="font-heading text-navy text-base uppercase leading-snug">How Dover, PA Families Stay Prepared for Power Outages</div>
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
              <i class="fas fa-certificate text-power-red text-2xl" aria-hidden="true"></i>
            </div>
            <h3 class="font-heading text-white text-xl uppercase tracking-wide mb-1">Kohler Authorized Dealer</h3>
            <p class="text-power-red font-heading text-xs tracking-widest uppercase mb-3">Dealer #1506430</p>
            <p class="text-steel text-sm leading-relaxed mb-5">Factory-trained, certified installer for York County. We size, install, register, and service your Kohler generator.</p>
            <a href="contact.php?service=Generator+Installation+(Kohler)" class="btn-red w-full justify-center text-sm mb-3">
              <i class="fas fa-plug-circle-bolt" aria-hidden="true"></i> Get a Generator Quote
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
                'Generator Installation'   => 'services.php#generator',
                'Generator Maintenance'    => 'services.php#generator',
                'Panel Upgrades'           => 'services.php#panel',
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
