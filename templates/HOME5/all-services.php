<?php
require __DIR__ . '/../../text.php';
require __DIR__ . '/../../partials/head.php';
?>
<main id="main-content" class="section section-light">
  <div class="container stack">
    <header data-anim="from-bottom">
      <h1 class="section-title"><?php echo htmlspecialchars(ucfirst($ActiveIndustry)); ?> services</h1>
      <p class="text-muted">Tailored solutions for residential and commercial clients.</p>
    </header>
    <div class="grid grid-3">
      <?php foreach ($ServicesByIndustry[$ActiveIndustry] as $index => $service): ?>
        <article class="card" data-anim="zoom" data-anim-delay="<?php echo $index * 80; ?>">
          <h2><?php echo htmlspecialchars($service['title']); ?></h2>
          <p><?php echo htmlspecialchars($service['desc']); ?></p>
          <p class="text-muted">Schedule a walkthrough to personalize this package.</p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</main>
<?php include __DIR__ . '/../../partials/footer.php'; ?>
