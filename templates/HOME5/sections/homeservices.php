<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-light" aria-label="Services">
  <div class="container stack">
    <h2 class="section-title" data-anim="from-bottom">Popular services</h2>
    <div class="grid grid-3">
      <?php foreach ($ServicesByIndustry[$ActiveIndustry] as $index => $service): ?>
        <article class="card" data-anim="zoom" data-anim-delay="<?php echo $index * 80; ?>">
          <h3><?php echo htmlspecialchars($service['title']); ?></h3>
          <p><?php echo htmlspecialchars($service['desc']); ?></p>
          <a class="btn btn-accent" href="<?php echo htmlspecialchars($BaseURL); ?>templates/<?php echo htmlspecialchars($ActiveHome); ?>/all-services.php">Service details</a>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
