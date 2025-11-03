<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-light" aria-label="Gallery highlights">
  <div class="container stack">
    <h2 class="section-title" data-anim="from-bottom">Visual proof of excellence</h2>
    <div class="grid grid-2" style="gap:var(--spacing-4);">
      <?php foreach (array_slice($Gallery, 0, 4) as $index => $item): ?>
        <figure class="card" style="padding:0; overflow:hidden;" data-anim="zoom" data-anim-delay="<?php echo $index * 90; ?>">
          <img src="<?php echo htmlspecialchars($item['src']); ?>" alt="<?php echo htmlspecialchars($item['alt']); ?>">
          <figcaption style="padding:var(--spacing-3);">
            <strong><?php echo htmlspecialchars($item['alt']); ?></strong>
            <p class="text-muted">Completed in <?php echo htmlspecialchars($City); ?></p>
          </figcaption>
        </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>
