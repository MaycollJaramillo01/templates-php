<?php
require __DIR__ . '/../../text.php';
require __DIR__ . '/../../partials/head.php';
?>
<main id="main-content" class="section section-muted">
  <div class="container stack">
    <header data-anim="from-bottom">
      <h1 class="section-title">Project portfolio</h1>
      <p class="text-muted">Capturing standout moments from our job sites.</p>
    </header>
    <div class="grid grid-3">
      <?php foreach ($Gallery as $index => $item): ?>
        <figure class="card" style="padding:0; overflow:hidden;" data-anim="zoom" data-anim-delay="<?php echo $index * 60; ?>">
          <img src="<?php echo htmlspecialchars($item['src']); ?>" alt="<?php echo htmlspecialchars($item['alt']); ?>">
          <figcaption style="padding:var(--spacing-3);">Project <?php echo $index + 1; ?> &mdash; <?php echo htmlspecialchars($item['alt']); ?></figcaption>
        </figure>
      <?php endforeach; ?>
    </div>
  </div>
</main>
<?php include __DIR__ . '/../../partials/footer.php'; ?>
