<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-light" aria-label="Hero">
  <div class="container grid grid-2" style="align-items:center;">
    <div class="stack" data-anim="from-bottom">
      <h1 class="section-title">Expert <?php echo htmlspecialchars($ActiveIndustry); ?> pros for every property type</h1>
      <p>We combine craftsmanship with clear communication and flexible scheduling.</p>
      <a class="btn btn-primary" href="<?php echo htmlspecialchars($BaseURL); ?>templates/<?php echo htmlspecialchars($ActiveHome); ?>/contact.php" data-anim="from-bottom" data-anim-delay="80">Request service</a>
    </div>
    <div class="card" data-anim="from-left">
      <h2>Why choose us</h2>
      <ul class="list-clean stack" style="gap:var(--spacing-2);">
        <li data-anim="from-bottom">Comprehensive project planning</li>
        <li data-anim="from-bottom" data-anim-delay="80">Licensed and insured crews</li>
        <li data-anim="from-bottom" data-anim-delay="120">Satisfaction guarantee</li>
      </ul>
    </div>
  </div>
</section>
