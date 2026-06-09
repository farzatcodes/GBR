<?php
/**
 * GBR Electrical Services, LLC — Contact Page
 * Displays contact form, contact details, and handles flash messages
 * from process-contact.php redirects.
 */

$page_title       = 'Contact Us';
$meta_description = 'Contact GBR Electrical Services LLC in Dover, PA. Request a free estimate for electrical repairs, panel upgrades, or Kohler generator installation. Call 717-292-1338 or send a message online.';

/* ── Read flash message set by process-contact.php ── */
$flash_status  = isset($_GET['status'])  ? $_GET['status']  : '';
$flash_message = isset($_GET['message']) ? urldecode($_GET['message']) : '';

/* ── Pre-fill service from query string (e.g. from generator CTA) ── */
$preselect_service = isset($_GET['service']) ? htmlspecialchars($_GET['service']) : '';

require_once 'includes/header.php';
?>

<!-- ================================================================
     PAGE HERO — compact navy banner
     ================================================================ -->
<section class="relative bg-navy overflow-hidden dot-grid py-20 md:py-24" aria-label="Contact page hero">
    <div class="absolute inset-y-0 left-0 w-1 bg-power-red" aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
        <nav aria-label="Breadcrumb" class="mb-6">
            <ol class="flex items-center gap-2 text-steel text-xs font-heading tracking-widest uppercase">
                <li><a href="index.php" class="hover:text-white transition-colors">Home</a></li>
                <li aria-hidden="true"><i class="fas fa-chevron-right text-[9px]"></i></li>
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
        <p class="text-silver/80 text-lg max-w-2xl">
            Request a free estimate, ask a question, or schedule service. We respond promptly to all inquiries.
        </p>
    </div>

    <div class="absolute bottom-0 left-0 right-0 pointer-events-none" aria-hidden="true">
        <svg viewBox="0 0 1440 50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full block" style="height:50px">
            <polygon points="0,50 1440,0 1440,50" fill="white"/>
        </svg>
    </div>
</section>


<!-- ================================================================
     CONTACT GRID — form (left) + info sidebar (right)
     ================================================================ -->
<section class="bg-white py-16 md:py-20" id="form" aria-labelledby="contact-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="grid lg:grid-cols-3 gap-12 lg:gap-16">

            <!-- ── Contact Form (2/3 width) ── -->
            <div class="lg:col-span-2">
                <p class="font-heading text-power-red text-sm tracking-widest uppercase mb-2">Free Estimate</p>
                <h2 id="contact-heading" class="font-heading text-navy text-4xl uppercase tracking-tight mb-2 title-accent">
                    Send Us a Message
                </h2>
                <p class="text-gray-500 text-sm mt-5 mb-8">
                    Fill out the form below and we'll get back to you within one business day.
                    For urgent or emergency requests, please call us directly.
                </p>

                <!-- ── Flash message ── -->
                <?php if ($flash_status === 'success'): ?>
                <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-8 flex items-start gap-3" role="alert">
                    <i class="fas fa-circle-check text-green-600 mt-0.5 flex-shrink-0" aria-hidden="true"></i>
                    <div>
                        <strong class="font-heading text-green-800 uppercase tracking-wide text-sm block mb-1">Message Sent!</strong>
                        <p class="text-green-700 text-sm">
                            <?php echo htmlspecialchars($flash_message ?: 'Thank you! We received your message and will be in touch shortly.'); ?>
                        </p>
                    </div>
                </div>
                <?php elseif ($flash_status === 'error'): ?>
                <div class="bg-red-50 border-l-4 border-power-red p-4 mb-8 flex items-start gap-3" role="alert">
                    <i class="fas fa-circle-exclamation text-power-red mt-0.5 flex-shrink-0" aria-hidden="true"></i>
                    <div>
                        <strong class="font-heading text-red-800 uppercase tracking-wide text-sm block mb-1">Something Went Wrong</strong>
                        <p class="text-red-700 text-sm">
                            <?php echo htmlspecialchars($flash_message ?: 'Your message could not be sent. Please call us at 717-292-1338.'); ?>
                        </p>
                    </div>
                </div>
                <?php endif; ?>

                <!-- ── Contact Form ── -->
                <form action="process-contact.php" method="POST" novalidate
                      class="space-y-6" aria-label="Contact form">

                    <!-- Honeypot anti-spam field (hidden from real users) -->
                    <div class="absolute" style="left:-9999px; top:-9999px;" aria-hidden="true">
                        <input type="text" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    <!-- Row: Name + Phone -->
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label for="name" class="block font-heading text-navy text-xs tracking-widest uppercase mb-2">
                                Full Name <span class="text-power-red" aria-label="required">*</span>
                            </label>
                            <input type="text" id="name" name="name"
                                   required maxlength="100"
                                   placeholder="John Smith"
                                   class="w-full border border-gray-300 px-4 py-3 text-sm focus:outline-none focus:border-power-red focus:ring-1 focus:ring-power-red transition-colors"
                                   value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : ''; ?>">
                        </div>
                        <div>
                            <label for="phone" class="block font-heading text-navy text-xs tracking-widest uppercase mb-2">
                                Phone Number <span class="text-power-red" aria-label="required">*</span>
                            </label>
                            <input type="tel" id="phone" name="phone"
                                   required maxlength="20"
                                   placeholder="717-555-0100"
                                   class="w-full border border-gray-300 px-4 py-3 text-sm focus:outline-none focus:border-power-red focus:ring-1 focus:ring-power-red transition-colors"
                                   value="<?php echo isset($_GET['phone']) ? htmlspecialchars($_GET['phone']) : ''; ?>">
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block font-heading text-navy text-xs tracking-widest uppercase mb-2">
                            Email Address
                        </label>
                        <input type="email" id="email" name="email"
                               maxlength="150"
                               placeholder="john@example.com"
                               class="w-full border border-gray-300 px-4 py-3 text-sm focus:outline-none focus:border-power-red focus:ring-1 focus:ring-power-red transition-colors"
                               value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>">
                    </div>

                    <!-- Service type -->
                    <div>
                        <label for="service" class="block font-heading text-navy text-xs tracking-widest uppercase mb-2">
                            Service Requested
                        </label>
                        <select id="service" name="service"
                                class="w-full border border-gray-300 px-4 py-3 text-sm bg-white focus:outline-none focus:border-power-red focus:ring-1 focus:ring-power-red transition-colors appearance-none cursor-pointer">
                            <option value="">— Select a service —</option>
                            <?php
                            $service_opts = [
                                'Electrical Repairs',
                                'Panel Upgrade',
                                'Generator Installation (Kohler)',
                                'Wiring &amp; Lighting',
                                'Troubleshooting / Diagnostics',
                                'Commercial Electrical',
                                'Residential Electrical',
                                'Other / Not Listed',
                            ];
                            foreach ($service_opts as $opt):
                                $optVal   = htmlspecialchars(html_entity_decode($opt));
                                $selected = ($preselect_service === $optVal) ? 'selected' : '';
                            ?>
                            <option value="<?php echo $optVal; ?>" <?php echo $selected; ?>><?php echo $opt; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Address / Location -->
                    <div>
                        <label for="address" class="block font-heading text-navy text-xs tracking-widest uppercase mb-2">
                            Service Address or City
                        </label>
                        <input type="text" id="address" name="address"
                               maxlength="200"
                               placeholder="123 Main St, Dover PA or just 'York, PA'"
                               class="w-full border border-gray-300 px-4 py-3 text-sm focus:outline-none focus:border-power-red focus:ring-1 focus:ring-power-red transition-colors">
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block font-heading text-navy text-xs tracking-widest uppercase mb-2">
                            Message / Project Details <span class="text-power-red" aria-label="required">*</span>
                        </label>
                        <textarea id="message" name="message"
                                  required minlength="10" maxlength="2000"
                                  rows="6"
                                  placeholder="Describe your project or issue. The more detail you can share, the better we can help."
                                  class="w-full border border-gray-300 px-4 py-3 text-sm focus:outline-none focus:border-power-red focus:ring-1 focus:ring-power-red transition-colors resize-y"></textarea>
                    </div>

                    <!-- How did you hear about us -->
                    <div>
                        <label for="source" class="block font-heading text-navy text-xs tracking-widest uppercase mb-2">
                            How Did You Hear About Us?
                        </label>
                        <select id="source" name="source"
                                class="w-full border border-gray-300 px-4 py-3 text-sm bg-white focus:outline-none focus:border-power-red focus:ring-1 focus:ring-power-red transition-colors appearance-none cursor-pointer">
                            <option value="">— Select one —</option>
                            <option>Google Search</option>
                            <option>Word of Mouth / Referral</option>
                            <option>Facebook / Social Media</option>
                            <option>Yard Sign / Truck</option>
                            <option>Returning Customer</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <!-- Submit -->
                    <div class="pt-2">
                        <button type="submit" class="btn-red w-full justify-center text-base py-4">
                            <i class="fas fa-paper-plane" aria-hidden="true"></i> Send Message
                        </button>
                        <p class="text-steel text-xs mt-3 text-center">
                            We respond within one business day. Your info is never shared or sold.
                        </p>
                    </div>

                </form>
            </div><!-- /form -->


            <!-- ── Contact Info Sidebar (1/3 width) ── -->
            <aside class="lg:col-span-1 space-y-6" aria-label="Contact information">

                <!-- Info card -->
                <div class="bg-navy p-7 relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-power-red" aria-hidden="true"></div>

                    <h3 class="font-heading text-white text-xl uppercase tracking-wide mb-6">
                        Contact Information
                    </h3>

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
                                <div class="font-heading text-silver text-xs tracking-widest uppercase mb-1">Office Phone</div>
                                <a href="tel:7172921338" class="text-silver hover:text-white transition-colors text-base font-heading tracking-wide">717-292-1338</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-9 h-9 bg-power-red/20 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-mobile-alt text-power-red text-sm" aria-hidden="true"></i>
                            </div>
                            <div>
                                <div class="font-heading text-silver text-xs tracking-widest uppercase mb-1">Cell / Emergency</div>
                                <a href="tel:7175151504" class="text-silver hover:text-white transition-colors text-base font-heading tracking-wide">717-515-1504</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-9 h-9 bg-power-red/20 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-power-red text-sm" aria-hidden="true"></i>
                            </div>
                            <div>
                                <div class="font-heading text-silver text-xs tracking-widest uppercase mb-1">Email</div>
                                <a href="mailto:gbrelectricalservices@gmail.com"
                                   class="text-steel hover:text-white transition-colors break-all text-sm leading-snug">
                                    gbrelectricalservices@gmail.com
                                </a>
                            </div>
                        </div>

                    </address>

                    <!-- Service area -->
                    <div class="mt-6 pt-6 border-t border-white/10">
                        <div class="font-heading text-silver text-xs tracking-widest uppercase mb-2">Service Area</div>
                        <p class="text-steel text-sm leading-relaxed">
                            Dover, York, Spring Grove, Gettysburg, Shrewsbury, Red Lion, and throughout York County, PA.
                        </p>
                    </div>
                </div>

                <!-- Hours card -->
                <div class="bg-silver-lt border border-gray-200 p-6">
                    <h3 class="font-heading text-navy text-lg uppercase tracking-wide mb-4 flex items-center gap-2">
                        <i class="fas fa-clock text-power-red" aria-hidden="true"></i> Business Hours
                    </h3>
                    <dl class="space-y-2 text-sm">
                        <?php
                        $hours = [
                            'Monday – Friday' => '7:00 AM – 6:00 PM',
                            'Saturday'        => 'By Appointment',
                            'Sunday'          => 'Emergency Only',
                        ];
                        foreach ($hours as $day => $time): ?>
                        <div class="flex justify-between items-center py-1.5 border-b border-gray-200 last:border-0">
                            <dt class="text-gray-700"><?php echo $day; ?></dt>
                            <dd class="font-medium text-navy"><?php echo $time; ?></dd>
                        </div>
                        <?php endforeach; ?>
                    </dl>
                    <div class="mt-4 bg-power-red/8 border border-power-red/20 p-3 flex items-center gap-2 text-sm">
                        <i class="fas fa-circle-exclamation text-power-red flex-shrink-0" aria-hidden="true"></i>
                        <span class="text-gray-700">For emergencies outside business hours, call <a href="tel:7175151504" class="text-power-red font-semibold">717-515-1504</a>.</span>
                    </div>
                </div>

                <!-- Quick call card -->
                <div class="bg-power-red p-6 text-center">
                    <i class="fas fa-phone text-white/70 text-3xl mb-3 block" aria-hidden="true"></i>
                    <div class="font-heading text-white text-lg uppercase tracking-wide mb-1">Prefer to Call?</div>
                    <p class="text-red-100 text-sm mb-4">Skip the form — we love talking to customers directly.</p>
                    <a href="tel:7172921338"
                       class="block bg-white text-power-red font-heading text-base tracking-widest uppercase px-5 py-3 hover:bg-silver-lt transition-colors mb-2">
                        <i class="fas fa-phone mr-1" aria-hidden="true"></i> 717-292-1338
                    </a>
                    <a href="tel:7175151504"
                       class="block border border-white/40 text-white font-heading text-sm tracking-widest uppercase px-5 py-2.5 hover:bg-white/10 transition-colors">
                        <i class="fas fa-mobile-alt mr-1" aria-hidden="true"></i> 717-515-1504
                    </a>
                </div>

            </aside><!-- /sidebar -->

        </div>
    </div>
</section>


<!-- ================================================================
     MAP PLACEHOLDER — styled navy block with address
     ================================================================ -->
<section class="bg-silver-lt py-12" aria-label="Location map">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="bg-navy-mid border border-white/10 flex flex-col items-center justify-center py-16 text-center relative overflow-hidden">
            <div class="absolute inset-0 dot-grid opacity-50" aria-hidden="true"></div>
            <div class="relative z-10">
                <i class="fas fa-map-location-dot text-power-red text-5xl mb-5" aria-hidden="true"></i>
                <h3 class="font-heading text-white text-2xl uppercase tracking-wide mb-2">Find Us in Dover, PA</h3>
                <p class="text-steel mb-5">5605 Fish and Game Road, Dover, PA 17315</p>
                <a href="https://maps.google.com/?q=5605+Fish+and+Game+Road+Dover+PA+17315"
                   target="_blank" rel="noopener noreferrer"
                   class="btn-red text-sm py-2.5 px-6">
                    <i class="fas fa-directions" aria-hidden="true"></i> Get Directions
                </a>
            </div>
        </div>
    </div>
</section>


<?php require_once 'includes/footer.php'; ?>
