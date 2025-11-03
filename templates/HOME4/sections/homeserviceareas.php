<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-light" aria-label="Service areas">
  <div class="container stack">
    <h2 class="section-title" data-anim="from-bottom">Where we work</h2>
    <p data-anim="from-bottom" data-anim-delay="100">We cover the metro region and surrounding communities.</p>
    <div class="grid grid-3">
      <?php foreach ($ServiceAreas as $index => $area): ?>
        <div class="card card-border" data-anim="zoom" data-anim-delay="<?php echo $index * 60; ?>">
          <strong><?php echo htmlspecialchars($area); ?></strong>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
