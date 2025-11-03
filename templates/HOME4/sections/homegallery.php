<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-muted" aria-label="Gallery">
  <div class="container stack">
    <h2 class="section-title" data-anim="from-bottom">Featured work</h2>
    <div class="grid grid-3">
      <?php foreach ($Gallery as $index => $item): ?>
        <figure class="card" style="padding:0; overflow:hidden;" data-anim="zoom" data-anim-delay="<?php echo $index * 70; ?>">
          <img src="<?php echo htmlspecialchars($item['src']); ?>" alt="<?php echo htmlspecialchars($item['alt']); ?>">
          <figcaption style="padding:var(--spacing-3);">Client result: <?php echo htmlspecialchars($item['alt']); ?></figcaption>
        </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>
