<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-light" aria-label="Featured services">
  <div class="container stack">
    <div class="flex flex-between" style="gap:var(--spacing-4); flex-wrap:wrap;">
      <h2 class="section-title" data-anim="from-bottom">Solutions built for impact</h2>
      <p class="text-muted" data-anim="from-bottom" data-anim-delay="80">Choose the package that fits your schedule and budget.</p>
    </div>
    <div class="grid grid-3">
      <?php foreach ($ServicesByIndustry[$ActiveIndustry] as $index => $service): ?>
        <article class="card" data-anim="zoom" data-anim-delay="<?php echo $index * 70; ?>">
          <span class="badge">Step <?php echo $index + 1; ?></span>
          <h3><?php echo htmlspecialchars($service['title']); ?></h3>
          <p><?php echo htmlspecialchars($service['desc']); ?></p>
          <a class="btn btn-primary" href="<?php echo htmlspecialchars($BaseURL); ?>templates/<?php echo htmlspecialchars($ActiveHome); ?>/all-services.php">View details</a>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
