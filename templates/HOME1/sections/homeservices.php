<?php require __DIR__ . '/../../../text.php'; ?>
<section id="services" class="section section-light" aria-label="Service overview">
  <div class="container stack">
    <h2 class="section-title" data-anim="from-bottom">Signature services</h2>
    <p class="text-muted" data-anim="from-bottom" data-anim-delay="80">Select offerings for our <?php echo htmlspecialchars($ActiveIndustry); ?> clients.</p>
    <div class="grid grid-2" style="gap:var(--spacing-4);">
      <?php foreach ($ServicesByIndustry[$ActiveIndustry] as $index => $service): ?>
        <article class="card" data-anim="zoom" data-anim-delay="<?php echo $index * 90; ?>">
          <h3><?php echo htmlspecialchars($service['title']); ?></h3>
          <p><?php echo htmlspecialchars($service['desc']); ?></p>
          <a class="btn btn-primary" href="<?php echo htmlspecialchars($BaseURL); ?>templates/<?php echo htmlspecialchars($ActiveHome); ?>/all-services.php">Learn more</a>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
