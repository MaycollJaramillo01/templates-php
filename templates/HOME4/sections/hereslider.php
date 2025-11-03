<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-muted" aria-label="Hero introduction">
  <div class="container grid grid-2" style="align-items:center;">
    <div class="stack" data-anim="from-bottom">
      <span class="badge">Serving <?php echo htmlspecialchars($City); ?> since 2010</span>
      <h1 class="section-title">Premium <?php echo htmlspecialchars($ActiveIndustry); ?> services without the stress</h1>
      <p>Our specialists coordinate with you every step of the way to deliver stunning outcomes and a spotless site.</p>
      <div class="flex" style="gap:var(--spacing-3); flex-wrap:wrap;">
        <a class="btn btn-primary" href="<?php echo htmlspecialchars($BaseURL); ?>templates/<?php echo htmlspecialchars($ActiveHome); ?>/contact.php" data-anim="from-bottom">Get estimate</a>
        <a class="btn btn-accent" href="<?php echo htmlspecialchars($BaseURL); ?>templates/<?php echo htmlspecialchars($ActiveHome); ?>/testimonials.php" data-anim="from-bottom" data-anim-delay="120">Read reviews</a>
      </div>
    </div>
    <div class="card" data-anim="from-left">
      <h2>Performance snapshot</h2>
      <ul class="list-clean stack" style="gap:var(--spacing-2);">
        <li data-anim="from-bottom">98% on-time project delivery</li>
        <li data-anim="from-bottom" data-anim-delay="80">4.9 average client rating</li>
        <li data-anim="from-bottom" data-anim-delay="160">25+ trained specialists</li>
      </ul>
    </div>
  </div>
</section>
