<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-light" aria-label="Signature services">
  <div class="container stack">
    <h2 class="section-title" data-anim="from-bottom">End-to-end offerings</h2>
    <div class="grid grid-2" style="gap:var(--spacing-4);">
      <?php foreach ($ServicesByIndustry[$ActiveIndustry] as $index => $service): ?>
        <article class="card" data-anim="zoom" data-anim-delay="<?php echo $index * 60; ?>">
          <h3><?php echo htmlspecialchars($service['title']); ?></h3>
          <p><?php echo htmlspecialchars($service['desc']); ?></p>
          <a class="btn btn-primary" href="<?php echo htmlspecialchars($BaseURL); ?>templates/<?php echo htmlspecialchars($ActiveHome); ?>/all-services.php">Discover more</a>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
