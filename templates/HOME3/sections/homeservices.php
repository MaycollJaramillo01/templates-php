<?php require __DIR__ . '/../../../text.php'; ?>
<section id="services" class="section section-muted" aria-label="Service tiers">
  <div class="container stack">
    <h2 class="section-title" data-anim="from-bottom">Service playbooks</h2>
    <div class="grid grid-2" style="gap:var(--spacing-4);">
      <?php foreach ($ServicesByIndustry[$ActiveIndustry] as $index => $service): ?>
        <article class="card" data-anim="zoom" data-anim-delay="<?php echo $index * 80; ?>">
          <h3><?php echo htmlspecialchars($service['title']); ?></h3>
          <p><?php echo htmlspecialchars($service['desc']); ?></p>
          <ul class="list-clean stack" style="gap:var(--spacing-2);">
            <li data-anim="from-bottom">Dedicated project coordinator</li>
            <li data-anim="from-bottom" data-anim-delay="60">Detailed digital progress reports</li>
            <li data-anim="from-bottom" data-anim-delay="120">Post-service maintenance guide</li>
          </ul>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
