<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-muted" aria-label="Gallery">
  <div class="container stack">
    <h2 class="section-title" data-anim="from-bottom">Project highlights</h2>
    <div class="grid grid-2">
      <?php foreach (array_slice($Gallery, 0, 4) as $index => $item): ?>
        <figure class="card" style="padding:0; overflow:hidden;" data-anim="zoom" data-anim-delay="<?php echo $index * 70; ?>">
          <img src="<?php echo htmlspecialchars($item['src']); ?>" alt="<?php echo htmlspecialchars($item['alt']); ?>">
          <figcaption style="padding:var(--spacing-3);">Spotlight: <?php echo htmlspecialchars($item['alt']); ?></figcaption>
        </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>
