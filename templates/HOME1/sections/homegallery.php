<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-muted" aria-label="Project gallery">
  <div class="container stack">
    <h2 class="section-title" data-anim="from-bottom">Recent transformations</h2>
    <p class="text-muted" data-anim="from-bottom" data-anim-delay="80">Preview the craftsmanship our team delivers across industries.</p>
    <div class="grid grid-3">
      <?php foreach ($Gallery as $index => $item): ?>
        <figure class="card" style="padding:0; overflow:hidden;" data-anim="zoom" data-anim-delay="<?php echo $index * 70; ?>">
          <img src="<?php echo htmlspecialchars($item['src']); ?>" alt="<?php echo htmlspecialchars($item['alt']); ?>">
          <figcaption style="padding:var(--spacing-3);"><?php echo htmlspecialchars($item['alt']); ?></figcaption>
        </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>
