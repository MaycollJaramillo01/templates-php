<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-muted" aria-label="Service areas">
  <div class="container card" data-anim="from-bottom">
    <h2 class="section-title">Coverage across the region</h2>
    <p>Rapid dispatch crews reach the following neighborhoods and more:</p>
    <div class="grid grid-2">
      <?php foreach ($ServiceAreas as $index => $area): ?>
        <span class="badge" data-anim="zoom" data-anim-delay="<?php echo $index * 50; ?>"><?php echo htmlspecialchars($area); ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>
