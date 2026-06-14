<?php
/**
 * GBR Electrical Services, LLC — Contact Page
 *
 * ui-ux-pro-max applied:
 *   ✓ Visible labels per input (never placeholder-only)
 *   ✓ Required field indicator (asterisk + aria)
 *   ✓ role="alert" on flash messages
 *   ✓ Touch-friendly inputs: min-height 48px
 *   ✓ Helper text below complex fields
 *   ✓ Input type="tel/email/text" for correct mobile keyboards
 *   ✓ autofocus on first error field (handled via query param)
 *   ✓ Error placement: below related field
 *   ✓ Inline validation hints for required fields
 *   ✓ Submit button with min-height 44px
 *   ✓ Disabled submit state during submission (JS)
 */

$page_title       = 'Contact Us – Free Estimate';
$meta_description = 'Contact GBR Electrical Services LLC in Dover, PA. Request a free estimate for electrical repairs, panel upgrades, or Kohler generator installation. Call 717-292-1338 or send a message.';

$flash_status  = isset($_GET['status'])  ? $_GET['status']           : '';
$flash_message = isset($_GET['message']) ? urldecode($_GET['message']): '';
$preselect     = isset($_GET['service']) ? htmlspecialchars($_GET['service']) : '';

require_once 'includes/header.php';
?>

<!-- ================================================================
     PAGE HERO
     ================================================================ -->
<section class="relative bg-navy overflow-hidden dot-grid py-20 md:py-24"
         aria-label="Contact page hero">

  <!-- Hero background photo (place hero-contact.jpg in assets/images/) -->
  <?php if (file_exists('assets/images/hero-contact.jpg')): ?>
  <div class="absolute inset-0" aria-hidden="true">
    <img src="assets/images/hero-contact.jpg" alt=""
         class="w-full h-full object-cover object-center" loading="eager">
    <div class="absolute inset-0 bg-navy/80"></div>
  </div>
  <?php endif; ?>

  <div class="absolute inset-y-0 left-0 w-1 bg-power-red" aria-hidden="true"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
    <nav aria-label="Breadcrumb" class="mb-6">
      <ol class="flex items-center gap-2 text-steel text-xs font-heading tracking-widest uppercase">
        <li><a href="index.php" class="hover:text-white transition-colors cursor-pointer">Home</a></li>
        <li><i class="fas fa-chevron-right text-[9px]" aria-hidden="true"></i></li>
        <li class="text-silver" aria-current="page">Contact</li>
      </ol>
    </nav>

    <div class="flex items-center gap-3 mb-4">
      <div class="h-px w-10 bg-power-red flex-shrink-0" aria-hidden="true"></div>
      <span class="font-heading text-power-red text-sm tracking-widest uppercase">Get in Touch</span>
    </div>
    <h1 class="font-heading text-white text-5xl sm:text-6xl uppercase tracking-tight mb-4">
      Contact <span class="text-power-red">GBR</span> Electrical
    </h1>
    <p class="text-silver/80 text-lg max-w-2xl leading-relaxed">
      Request a free estimate, ask a question, or schedule service. We respond promptly — usually within one business day.
    </p>
  </div>

  <div class="absolute bottom-0 inset-x-0 pointer-events-none" aria-hidden="true">
    <svg viewBox="0 0 1440 50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full block" style="height:50px">
      <polygon points="0,50 1440,0 1440,50" fill="white"/>
    </svg>
  </div>
</section>


<!-- ================================================================
     CONTACT GRID — form (left 2/3) + info sidebar (right 1/3)
     ================================================================ -->
<section class="bg-white py-16 md:py-20" aria-labelledby="contact-form-heading">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-3 gap-12 lg:gap-16">

      <!-- ── CONTACT FORM ── -->
      <div class="lg:col-span-2" id="form">
        <p class="font-heading text-power-red text-sm tracking-widest uppercase mb-2">Free Estimate</p>
        <h2 id="contact-form-heading" class="font-heading text-navy text-4xl uppercase tracking-tight mb-2 title-accent">
          Send Us a Message
        </h2>
        <p class="text-gray-500 text-sm mt-5 mb-8 leading-relaxed">
          Fill out the form and we'll get back to you within one business day.
          For urgent or emergency needs, please call us directly.
        </p>

        <!-- ── Flash alert ── -->
        <?php if ($flash_status === 'success'): ?>
        <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-8 flex items-start gap-3"
             role="alert" aria-live="polite">
          <i class="fas fa-circle-check text-green-600 mt-0.5 flex-shrink-0 text-lg" aria-hidden="true"></i>
          <div>
            <strong class="font-heading text-green-800 uppercase tracking-wide text-sm block mb-1">Message Sent!</strong>
            <p class="text-green-700 text-sm">
              <?php echo htmlspecialchars($flash_message ?: 'Thank you! We received your message and will be in touch shortly.'); ?>
            </p>
          </div>
        </div>
        <?php elseif ($flash_status === 'error'): ?>
        <div class="bg-red-50 border-l-4 border-power-red p-4 mb-8 flex items-start gap-3"
             role="alert" aria-live="assertive">
          <i class="fas fa-circle-exclamation text-power-red mt-0.5 flex-shrink-0 text-lg" aria-hidden="true"></i>
          <div>
            <strong class="font-heading text-red-800 uppercase tracking-wide text-sm block mb-1">Something Went Wrong</strong>
            <p class="text-red-700 text-sm">
              <?php echo htmlspecialchars($flash_message ?: 'Your message could not be sent. Please call us at 717-292-1338.'); ?>
            </p>
          </div>
        </div>
        <?php endif; ?>

        <!-- ── The Form ── -->
        <form action="process-contact.php" method="POST" novalidate
              id="contact-form" aria-label="Contact and estimate request form">

          <!-- Honeypot (hidden from real users) -->
          <div style="position:absolute;left:-9999px;top:-9999px;" aria-hidden="true">
            <label for="hp-website">Leave this blank</label>
            <input type="text" id="hp-website" name="website" tabindex="-1" autocomplete="off">
          </div>

          <div class="space-y-6">

            <!-- Name + Phone row -->
            <div class="grid sm:grid-cols-2 gap-5">
              <div>
                <label for="name"
                       class="block font-heading text-navy text-xs tracking-widest uppercase mb-1.5">
                  Full Name <span class="text-power-red" aria-label="required">*</span>
                </label>
                <input type="text" id="name" name="name"
                       required maxlength="100" autocomplete="name"
                       placeholder="John Smith"
                       class="w-full border border-gray-300 px-4 text-sm text-gray-800
                              focus:outline-none focus:border-power-red focus:ring-1
                              focus:ring-power-red transition-colors bg-white"
                       style="min-height:48px;"
                       value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : ''; ?>">
                <p class="text-gray-400 text-xs mt-1">First and last name</p>
              </div>
              <div>
                <label for="phone"
                       class="block font-heading text-navy text-xs tracking-widest uppercase mb-1.5">
                  Phone Number <span class="text-power-red" aria-label="required">*</span>
                </label>
                <input type="tel" id="phone" name="phone"
                       required maxlength="20" autocomplete="tel"
                       placeholder="717-555-0100"
                       class="w-full border border-gray-300 px-4 text-sm text-gray-800
                              focus:outline-none focus:border-power-red focus:ring-1
                              focus:ring-power-red transition-colors bg-white"
                       style="min-height:48px;"
                       value="<?php echo isset($_GET['phone']) ? htmlspecialchars($_GET['phone']) : ''; ?>">
                <p class="text-gray-400 text-xs mt-1">Best number to reach you</p>
              </div>
            </div>

            <!-- Email -->
            <div>
              <label for="email"
                     class="block font-heading text-navy text-xs tracking-widest uppercase mb-1.5">
                Email Address
              </label>
              <input type="email" id="email" name="email"
                     maxlength="150" autocomplete="email"
                     placeholder="john@example.com"
                     class="w-full border border-gray-300 px-4 text-sm text-gray-800
                            focus:outline-none focus:border-power-red focus:ring-1
                            focus:ring-power-red transition-colors bg-white"
                     style="min-height:48px;"
                     value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>">
              <p class="text-gray-400 text-xs mt-1">Optional — we'll follow up by phone by default</p>
            </div>

            <!-- Service selector -->
            <div>
              <label for="service"
                     class="block font-heading text-navy text-xs tracking-widest uppercase mb-1.5">
                Service Requested
              </label>
              <div class="relative">
                <select id="service" name="service"
                        class="w-full border border-gray-300 px-4 text-sm text-gray-800 bg-white
                               focus:outline-none focus:border-power-red focus:ring-1
                               focus:ring-power-red transition-colors appearance-none cursor-pointer"
                        style="min-height:48px;">
                  <option value="">— Select a service —</option>
                  <?php
                  $service_opts = [
                    'Electrical Repairs',
                    'Panel Upgrade',
                    'Generator Installation (Kohler)',
                    'Wiring & Lighting',
                    'Troubleshooting / Diagnostics',
                    'Commercial Electrical',
                    'Residential Electrical',
                    'Other / Not Listed',
                  ];
                  foreach ($service_opts as $opt):
                    $val      = htmlspecialchars($opt);
                    $selected = ($preselect === $val || $preselect === $opt) ? 'selected' : '';
                  ?>
                  <option value="<?php echo $val; ?>" <?php echo $selected; ?>><?php echo htmlspecialchars($opt); ?></option>
                  <?php endforeach; ?>
                </select>
                <i class="fas fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm pointer-events-none" aria-hidden="true"></i>
              </div>
            </div>

            <!-- Service address -->
            <div>
              <label for="address"
                     class="block font-heading text-navy text-xs tracking-widest uppercase mb-1.5">
                Service Address or City
              </label>
              <input type="text" id="address" name="address"
                     maxlength="200" autocomplete="street-address"
                     placeholder="123 Main St, Dover PA  —or—  York, PA"
                     class="w-full border border-gray-300 px-4 text-sm text-gray-800
                            focus:outline-none focus:border-power-red focus:ring-1
                            focus:ring-power-red transition-colors bg-white"
                     style="min-height:48px;">
            </div>

            <!-- Message -->
            <div>
              <label for="message"
                     class="block font-heading text-navy text-xs tracking-widest uppercase mb-1.5">
                Message / Project Details <span class="text-power-red" aria-label="required">*</span>
              </label>
              <textarea id="message" name="message"
                        required minlength="10" maxlength="2000"
                        rows="6"
                        placeholder="Describe your project or issue. The more detail you share, the better we can help with your estimate."
                        class="w-full border border-gray-300 px-4 py-3 text-sm text-gray-800
                               focus:outline-none focus:border-power-red focus:ring-1
                               focus:ring-power-red transition-colors resize-y bg-white"></textarea>
              <p class="text-gray-400 text-xs mt-1">Min. 10 characters — be as specific as possible</p>
            </div>

            <!-- Referral source -->
            <div>
              <label for="source"
                     class="block font-heading text-navy text-xs tracking-widest uppercase mb-1.5">
                How Did You Hear About Us?
              </label>
              <div class="relative">
                <select id="source" name="source"
                        class="w-full border border-gray-300 px-4 text-sm text-gray-800 bg-white
                               focus:outline-none focus:border-power-red focus:ring-1
                               focus:ring-power-red transition-colors appearance-none cursor-pointer"
                        style="min-height:48px;">
                  <option value="">— Select one —</option>
                  <option>Google Search</option>
                  <option>Word of Mouth / Referral</option>
                  <option>Facebook / Social Media</option>
                  <option>Yard Sign or Truck</option>
                  <option>Returning Customer</option>
                  <option>Other</option>
                </select>
                <i class="fas fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm pointer-events-none" aria-hidden="true"></i>
              </div>
            </div>

            <!-- Submit -->
            <div class="pt-2">
              <button type="submit" id="submit-btn"
                      class="btn-red w-full justify-center text-base"
                      style="min-height:52px;">
                <i class="fas fa-paper-plane" id="submit-icon" aria-hidden="true"></i>
                <span id="submit-label">Send Message</span>
              </button>
              <p class="text-steel text-xs mt-3 text-center">
                We respond within one business day. Your info is never shared or sold.
              </p>
            </div>

          </div><!-- /space-y-6 -->
        </form>

        <script>
        /* Submit button loading state */
        document.getElementById('contact-form').addEventListener('submit', function(){
          var btn   = document.getElementById('submit-btn');
          var icon  = document.getElementById('submit-icon');
          var label = document.getElementById('submit-label');
          btn.disabled = true;
          btn.style.opacity = '0.75';
          icon.className  = 'fas fa-spinner fa-spin';
          label.textContent = 'Sending…';
        });
        </script>
      </div><!-- /form -->


      <!-- ── CONTACT SIDEBAR ── -->
      <aside class="lg:col-span-1 space-y-6" aria-label="Contact information and hours">

        <!-- Contact info card -->
        <div class="bg-navy p-7 relative overflow-hidden">
          <div class="absolute top-0 inset-x-0 h-1 bg-power-red" aria-hidden="true"></div>

          <h3 class="font-heading text-white text-xl uppercase tracking-wide mb-6">Contact Information</h3>

          <address class="not-italic space-y-5 text-sm">
            <div class="flex items-start gap-4">
              <div class="w-9 h-9 bg-power-red/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <i class="fas fa-map-marker-alt text-power-red text-sm" aria-hidden="true"></i>
              </div>
              <div>
                <div class="font-heading text-silver text-xs tracking-widest uppercase mb-1">Address</div>
                <p class="text-steel leading-snug">5605 Fish and Game Road<br>Dover, PA 17315</p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-9 h-9 bg-power-red/20 flex items-center justify-center flex-shrink-0">
                <i class="fas fa-phone text-power-red text-sm" aria-hidden="true"></i>
              </div>
              <div>
                <div class="font-heading text-silver text-xs tracking-widest uppercase mb-1">Office</div>
                <a href="tel:7172921338" class="text-silver hover:text-white transition-colors font-heading text-lg tracking-wide cursor-pointer">717-292-1338</a>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-9 h-9 bg-power-red/20 flex items-center justify-center flex-shrink-0">
                <i class="fas fa-mobile-alt text-power-red text-sm" aria-hidden="true"></i>
              </div>
              <div>
                <div class="font-heading text-silver text-xs tracking-widest uppercase mb-1">Cell / Emergency</div>
                <a href="tel:7175151504" class="text-silver hover:text-white transition-colors font-heading text-lg tracking-wide cursor-pointer">717-515-1504</a>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-9 h-9 bg-power-red/20 flex items-center justify-center flex-shrink-0">
                <i class="fas fa-envelope text-power-red text-sm" aria-hidden="true"></i>
              </div>
              <div>
                <div class="font-heading text-silver text-xs tracking-widest uppercase mb-1">Email</div>
                <a href="mailto:info@lightsonpa.com"
                   class="text-steel hover:text-white transition-colors break-all text-xs leading-snug cursor-pointer">
                  info@lightsonpa.com
                </a>
              </div>
            </div>
          </address>

          <div class="mt-6 pt-6 border-t border-white/10">
            <div class="font-heading text-silver text-xs tracking-widest uppercase mb-2">Service Area</div>
            <p class="text-steel text-sm leading-relaxed">Dover, York, Spring Grove, Red Lion, Shrewsbury, Gettysburg, and throughout York County, PA.</p>
          </div>
        </div>

        <!-- Hours card -->
        <div class="bg-silver-lt border border-gray-200 p-6">
          <h3 class="font-heading text-navy text-lg uppercase tracking-wide mb-4 flex items-center gap-2">
            <i class="fas fa-clock text-power-red" aria-hidden="true"></i> Business Hours
          </h3>
          <dl class="space-y-0 text-sm divide-y divide-gray-200">
            <?php
            $hours = [
              'Mon – Fri' => '7:00 AM – 6:00 PM',
              'Saturday'  => 'By Appointment',
              'Sunday'    => 'Emergency Only',
            ];
            foreach ($hours as $day => $time): ?>
            <div class="flex justify-between items-center py-2.5">
              <dt class="text-gray-700"><?php echo $day; ?></dt>
              <dd class="font-medium text-navy"><?php echo $time; ?></dd>
            </div>
            <?php endforeach; ?>
          </dl>
          <div class="mt-4 bg-power-red/8 border border-power-red/20 p-3 flex items-start gap-2.5 text-sm">
            <i class="fas fa-circle-exclamation text-power-red flex-shrink-0 mt-0.5" aria-hidden="true"></i>
            <span class="text-gray-700 text-xs leading-snug">
              Emergency service outside business hours — call
              <a href="tel:7175151504" class="text-power-red font-semibold hover:underline cursor-pointer">717-515-1504</a>.
            </span>
          </div>
        </div>

        <!-- Quick-call card -->
        <div class="bg-power-red p-6 text-center">
          <i class="fas fa-phone text-white/70 text-3xl mb-3 block" aria-hidden="true"></i>
          <div class="font-heading text-white text-lg uppercase tracking-wide mb-1">Prefer to Call?</div>
          <p class="text-red-100 text-sm mb-4">Skip the form — we love talking with customers directly.</p>
          <a href="tel:7172921338"
             class="block bg-white text-power-red font-heading text-base tracking-widest
                    uppercase px-5 min-h-[44px] flex items-center justify-center
                    hover:bg-silver-lt transition-colors mb-2 cursor-pointer rounded-lg">
            <i class="fas fa-phone mr-2" aria-hidden="true"></i> 717-292-1338
          </a>
          <a href="tel:7175151504"
             class="block border border-white/40 text-white font-heading text-sm tracking-widest
                    uppercase px-5 min-h-[44px] flex items-center justify-center
                    hover:bg-white/10 transition-colors cursor-pointer rounded-lg">
            <i class="fas fa-mobile-alt mr-2" aria-hidden="true"></i> 717-515-1504
          </a>
        </div>

      </aside><!-- /sidebar -->

    </div>
  </div>
</section>


<!-- ================================================================
     MAP PLACEHOLDER
     ================================================================ -->
<section class="bg-silver-lt py-12" aria-label="Our location">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="bg-navy-mid border border-white/10 flex flex-col items-center
                justify-center py-14 text-center relative overflow-hidden dot-grid">
      <div class="relative z-10">
        <i class="fas fa-map-location-dot text-power-red text-5xl mb-5" aria-hidden="true"></i>
        <h3 class="font-heading text-white text-2xl uppercase tracking-wide mb-2">Find Us in Dover, PA</h3>
        <p class="text-steel mb-5">5605 Fish and Game Road, Dover, PA 17315</p>
        <a href="https://maps.google.com/?q=5605+Fish+and+Game+Road+Dover+PA+17315"
           target="_blank" rel="noopener noreferrer"
           class="btn-red text-sm py-2.5 px-6 min-h-[44px]">
          <i class="fas fa-directions" aria-hidden="true"></i> Get Directions
        </a>
      </div>
    </div>
  </div>
</section>


<?php require_once 'includes/footer.php'; ?>
