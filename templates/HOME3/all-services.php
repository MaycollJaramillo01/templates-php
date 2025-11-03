<?php
require __DIR__ . '/../../text.php';
require __DIR__ . '/../../partials/head.php';
?>
<main id="main-content" class="section section-light">
  <div class="container stack">
    <header data-anim="from-bottom">
      <h1 class="section-title">Service menu</h1>
      <p class="text-muted">Select your preferred package and we’ll customize the schedule.</p>
    </header>
    <section class="grid grid-2" aria-label="Service list">
      <?php foreach ($ServicesByIndustry[$ActiveIndustry] as $index => $service): ?>
        <article class="card" data-anim="zoom" data-anim-delay="<?php echo $index * 70; ?>">
          <h2><?php echo htmlspecialchars($service['title']); ?></h2>
          <p><?php echo htmlspecialchars($service['desc']); ?></p>
          <p class="text-muted">Includes site protection, debris removal, and warranty check-ins.</p>
        </article>
      <?php endforeach; ?>
    </section>
  </div>
</main>
<?php include __DIR__ . '/../../partials/footer.php'; ?>
