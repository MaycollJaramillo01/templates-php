<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-muted" aria-label="Service areas">
  <div class="container stack">
    <h2 class="section-title" data-anim="from-bottom">Coverage zones</h2>
    <ul class="list-clean service-area-list">
      <?php foreach ($ServiceAreas as $index => $area): ?>
        <li data-anim="from-bottom" data-anim-delay="<?php echo $index * 60; ?>"><?php echo htmlspecialchars($area); ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
