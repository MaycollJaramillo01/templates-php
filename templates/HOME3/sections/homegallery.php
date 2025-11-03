<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-light" aria-label="Gallery">
  <div class="container stack">
    <h2 class="section-title" data-anim="from-bottom">Across multiple industries</h2>
    <p data-anim="from-bottom" data-anim-delay="100">See how we adapt workflows for roofing, painting, remodeling, concrete, and cleaning engagements.</p>
    <div class="grid grid-2" style="gap:var(--spacing-4);">
      <?php foreach (array_slice($Gallery, 0, 4) as $index => $item): ?>
        <figure class="card" style="padding:0; overflow:hidden;" data-anim="zoom" data-anim-delay="<?php echo $index * 60; ?>">
          <img src="<?php echo htmlspecialchars($item['src']); ?>" alt="<?php echo htmlspecialchars($item['alt']); ?>">
          <figcaption style="padding:var(--spacing-3);">Industry highlight: <?php echo htmlspecialchars($item['alt']); ?></figcaption>
        </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>
