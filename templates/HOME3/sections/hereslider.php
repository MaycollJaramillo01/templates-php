<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-light" aria-label="Hero spotlight">
  <div class="container stack">
    <div class="card" data-anim="from-bottom" style="background:var(--color-primary); color:#fff;">
      <div class="stack" style="gap:var(--spacing-4);">
        <h1 class="section-title" style="color:#fff;">Dependable <?php echo htmlspecialchars($ActiveIndustry); ?> crews on standby</h1>
        <p>We deploy certified professionals with clear schedules, clean job sites, and proactive communication.</p>
        <div class="flex" style="gap:var(--spacing-3); flex-wrap:wrap;">
          <a class="btn btn-accent" href="<?php echo htmlspecialchars($BaseURL); ?>templates/<?php echo htmlspecialchars($ActiveHome); ?>/contact.php" data-anim="from-bottom">Start your project</a>
          <a class="btn btn-primary" style="background:var(--color-primary-dark);" href="#services" data-anim="from-bottom" data-anim-delay="120">View services</a>
        </div>
      </div>
    </div>
    <div class="grid grid-3">
      <?php foreach ($HeroImages as $index => $image): ?>
        <figure class="card" style="padding:0; overflow:hidden;" data-anim="zoom" data-anim-delay="<?php echo $index * 80; ?>">
          <img src="<?php echo htmlspecialchars($image); ?>" alt="Featured project <?php echo htmlspecialchars($index + 1); ?>">
        </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>
