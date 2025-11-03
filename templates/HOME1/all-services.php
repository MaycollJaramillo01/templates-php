<?php
require __DIR__ . '/../../text.php';
require __DIR__ . '/../../partials/head.php';
?>
<main id="main-content" class="section section-light">
  <div class="container stack">
    <header data-anim="from-bottom">
      <h1 class="section-title">Comprehensive <?php echo htmlspecialchars($ActiveIndustry); ?> services</h1>
      <p class="text-muted">Custom packages built for residential, commercial, and industrial clients.</p>
    </header>
    <section class="grid grid-2" aria-label="Service catalog">
      <?php foreach ($ServicesByIndustry[$ActiveIndustry] as $index => $service): ?>
        <article class="card" data-anim="zoom" data-anim-delay="<?php echo $index * 90; ?>">
          <h2><?php echo htmlspecialchars($service['title']); ?></h2>
          <p><?php echo htmlspecialchars($service['desc']); ?></p>
          <ul class="list-clean stack" style="gap:var(--spacing-2);">
            <li data-anim="from-bottom">Detailed scope planning</li>
            <li data-anim="from-bottom" data-anim-delay="60">Certified specialists on site</li>
            <li data-anim="from-bottom" data-anim-delay="120">Quality assurance walkthrough</li>
          </ul>
        </article>
      <?php endforeach; ?>
    </section>
  </div>
</main>
<?php include __DIR__ . '/../../partials/footer.php'; ?>
