<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-muted" aria-label="Service coverage">
  <div class="container stack">
    <h2 class="section-title" data-anim="from-bottom">Proudly serving</h2>
    <p data-anim="from-bottom" data-anim-delay="80">Our crews reach neighborhoods throughout <?php echo htmlspecialchars($City); ?> and nearby communities.</p>
    <ul class="list-clean service-area-list">
      <?php foreach ($ServiceAreas as $index => $area): ?>
        <li class="card" data-anim="zoom" data-anim-delay="<?php echo $index * 60; ?>" style="margin-bottom:var(--spacing-2); padding:var(--spacing-3);">&bull; <?php echo htmlspecialchars($area); ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
