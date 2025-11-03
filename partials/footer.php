<?php require_once __DIR__ . '/../text.php'; ?>
<footer role="contentinfo">
  <div class="container grid grid-2" style="row-gap:var(--spacing-8);">
    <div class="stack" data-anim="from-bottom">
      <h2 class="section-title">Ready to start?</h2>
      <p>Call us at <a href="tel:<?php echo htmlspecialchars($PhoneRef); ?>"><?php echo htmlspecialchars($Phone); ?></a> or email <a href="mailto:<?php echo htmlspecialchars($Mail); ?>"><?php echo htmlspecialchars($Mail); ?></a>.</p>
      <p><?php echo htmlspecialchars($Address); ?>, <?php echo htmlspecialchars($City . ', ' . $State . ' ' . $Zip); ?></p>
      <p>&copy; <span data-current-year></span> <?php echo htmlspecialchars($Company); ?>. All rights reserved.</p>
    </div>
    <div class="stack" data-anim="from-bottom" data-anim-delay="120">
      <h3>Connect with us</h3>
      <div class="stack" style="flex-direction:row; flex-wrap:wrap; gap:var(--spacing-3);">
        <?php echo render_social_icons($Social); ?>
      </div>
      <h3>Service areas</h3>
      <ul class="list-clean service-area-list">
        <?php foreach ($ServiceAreas as $area): ?>
          <li data-anim="from-bottom"><?php echo htmlspecialchars($area); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</footer>
</body>
</html>
