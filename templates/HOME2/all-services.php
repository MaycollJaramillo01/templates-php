<?php
require __DIR__ . '/../../text.php';
require __DIR__ . '/../../partials/head.php';
?>
<main id="main-content" class="section section-light">
  <div class="container stack">
    <header data-anim="from-bottom">
      <h1 class="section-title"><?php echo htmlspecialchars(ucfirst($ActiveIndustry)); ?> service catalog</h1>
      <p class="text-muted">Flexible offerings for residential, commercial, and municipal projects.</p>
    </header>
    <div class="grid grid-3" aria-label="Detailed services">
      <?php foreach ($ServicesByIndustry[$ActiveIndustry] as $index => $service): ?>
        <article class="card" data-anim="zoom" data-anim-delay="<?php echo $index * 80; ?>">
          <h2><?php echo htmlspecialchars($service['title']); ?></h2>
          <p><?php echo htmlspecialchars($service['desc']); ?></p>
          <p class="text-muted">Includes planning support, scheduling, and warranty follow-up.</p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</main>
<?php include __DIR__ . '/../../partials/footer.php'; ?>
