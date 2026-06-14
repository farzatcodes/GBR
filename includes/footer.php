<!-- ================================================================
     FOOTER — deep navy 4-column layout
     Closes </main>, outputs footer HTML, closes </body></html>
     ================================================================ -->
</main><!-- /main#main-content -->

<?php
$logo_src = file_exists(__DIR__ . '/../assets/images/logo.png')
          ? 'assets/images/logo.png'
          : 'assets/images/logo.svg';
?>

<footer class="bg-navy text-silver" aria-label="Site footer">

  <!-- ── Upper footer ── -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-16">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8">

      <!-- Col 1: Brand + tagline -->
      <div class="lg:col-span-1">
        <a href="index.php" class="inline-block mb-5 cursor-pointer" aria-label="GBR Electrical Services — home">
          <img src="<?php echo htmlspecialchars($logo_src); ?>"
               alt="GBR Electrical Services, LLC logo"
               class="h-12 w-auto object-contain" width="240" height="48"
               loading="lazy">
        </a>
        <p class="text-steel text-sm leading-relaxed mb-5">
          Licensed electrical contractor and certified Kohler home generator installer proudly serving Dover, PA and the greater York County area.
        </p>
        <div class="flex flex-wrap gap-2 mb-4">
          <span class="inline-flex items-center gap-1.5 bg-navy-mid border border-white/10
                       text-silver text-xs font-heading tracking-wide uppercase px-3 py-1.5">
            <i class="fas fa-shield-halved text-power-red" aria-hidden="true"></i>Licensed &amp; Insured
          </span>
          <span class="inline-flex items-center gap-1.5 bg-navy-mid border border-white/10
                       text-silver text-xs font-heading tracking-wide uppercase px-3 py-1.5">
            <i class="fas fa-certificate text-power-red" aria-hidden="true"></i>Kohler Dealer #1506430
          </span>
        </div>

        <?php
        $keystone_badge = file_exists(__DIR__ . '/../assets/images/keystone-badge.png')
                        ? 'assets/images/keystone-badge.png'
                        : (file_exists(__DIR__ . '/../assets/images/keystone-badge.jpg')
                          ? 'assets/images/keystone-badge.jpg'
                          : null);
        if ($keystone_badge): ?>
        <a href="https://keystonebcollective.com" target="_blank" rel="noopener noreferrer"
           class="inline-block cursor-pointer"
           aria-label="Member of Keystone B Collective">
          <img src="<?php echo $keystone_badge; ?>"
               alt="Member of Keystone B Collective"
               class="h-10 w-auto object-contain drop-shadow-lg"
               loading="lazy">
        </a>
        <?php endif; ?>
      </div>

      <!-- Col 2: Quick links -->
      <div>
        <h3 class="font-heading text-white text-lg tracking-wide uppercase mb-5 title-accent">Quick Links</h3>
        <ul class="space-y-2.5 text-sm" role="list">
          <?php
          $links = [
            'index.php'            => 'Home',
            'services.php'         => 'Services',
            'index.php#generators' => 'Generator Installation',
            'index.php#about'      => 'About Us',
            'contact.php'          => 'Contact',
            'contact.php#form'     => 'Free Estimate',
          ];
          foreach ($links as $href => $label): ?>
          <li>
            <a href="<?php echo $href; ?>"
               class="flex items-center gap-2 text-steel hover:text-white hover:translate-x-0.5
                      transition-all duration-200 cursor-pointer">
              <i class="fas fa-chevron-right text-power-red text-[10px] flex-shrink-0" aria-hidden="true"></i>
              <?php echo $label; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Col 3: Services list -->
      <div>
        <h3 class="font-heading text-white text-lg tracking-wide uppercase mb-5 title-accent">Our Services</h3>
        <ul class="space-y-2.5 text-sm text-steel" role="list">
          <?php
          $svcs = [
            'Electrical Repairs',
            'Panel Upgrades',
            'Generator Installation',
            'Wiring &amp; Lighting',
            'Troubleshooting',
            'Residential Electrical',
            'Commercial Electrical',
          ];
          foreach ($svcs as $s): ?>
          <li class="flex items-center gap-2">
            <i class="fas fa-bolt text-power-red text-[10px] flex-shrink-0" aria-hidden="true"></i>
            <?php echo $s; ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Col 4: Contact + emergency -->
      <div>
        <h3 class="font-heading text-white text-lg tracking-wide uppercase mb-5 title-accent">Contact Us</h3>
        <address class="not-italic space-y-4 text-sm">
          <div class="flex items-start gap-3">
            <i class="fas fa-map-marker-alt text-power-red mt-0.5 w-4 flex-shrink-0" aria-hidden="true"></i>
            <span class="text-steel leading-snug">5605 Fish and Game Road<br>Dover, PA 17315</span>
          </div>
          <div class="flex items-center gap-3">
            <i class="fas fa-phone text-power-red w-4 flex-shrink-0" aria-hidden="true"></i>
            <a href="tel:7174671712" class="text-silver hover:text-white transition-colors cursor-pointer">717-467-1712 (Office)</a>
          </div>
          <div class="flex items-center gap-3">
            <i class="fas fa-mobile-alt text-power-red w-4 flex-shrink-0" aria-hidden="true"></i>
            <a href="tel:7175151504" class="text-silver hover:text-white transition-colors cursor-pointer">717-515-1504 (Cell)</a>
          </div>
          <div class="flex items-center gap-3">
            <i class="fas fa-envelope text-power-red w-4 flex-shrink-0" aria-hidden="true"></i>
            <a href="mailto:info@lightsonpa.com"
               class="text-steel hover:text-white transition-colors cursor-pointer break-all">
              info@lightsonpa.com
            </a>
          </div>
        </address>
        <!-- 24/7 emergency pill -->
        <div class="mt-6 bg-power-red/10 border border-power-red/30 p-3 flex items-center gap-3">
          <i class="fas fa-circle-exclamation text-power-red flex-shrink-0" aria-hidden="true"></i>
          <div>
            <div class="font-heading text-white text-xs tracking-widest uppercase mb-0.5">24/7 Emergency</div>
            <a href="tel:7175151504"
               class="text-power-red text-sm font-semibold hover:text-red-400 transition-colors cursor-pointer">
              Call: 717-515-1504
            </a>
          </div>
        </div>
      </div>

    </div><!-- /grid -->
  </div>

  <!-- ── Bottom bar ── -->
  <div class="border-t border-white/8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-5 flex flex-col sm:flex-row
                items-center justify-between gap-3 text-xs text-steel">
      <span>&copy; <?php echo date('Y'); ?> GBR Electrical Services, LLC. All rights reserved.</span>
      <span class="flex items-center gap-1.5">
        <i class="fas fa-bolt text-power-red" aria-hidden="true"></i>
        Dover, PA &bull; York County &bull; Licensed &amp; Insured
      </span>
    </div>
  </div>

</footer>

</body>
</html>
