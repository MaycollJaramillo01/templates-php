<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-light" aria-label="Coverage map">
  <div class="container grid grid-2" style="align-items:center;">
    <div class="stack" data-anim="from-bottom">
      <h2 class="section-title">We’re local to you</h2>
      <p>Our rapid response teams cover the metro area and surrounding suburbs.</p>
      <ul class="list-clean stack" style="gap:var(--spacing-2);">
        <?php foreach ($ServiceAreas as $index => $area): ?>
          <li data-anim="from-bottom" data-anim-delay="<?php echo $index * 60; ?>">• <?php echo htmlspecialchars($area); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="card" data-anim="from-left">
      <h3>On-call availability</h3>
      <p>Emergency service windows available evenings and weekends for urgent needs.</p>
    </div>
  </div>
</section>
