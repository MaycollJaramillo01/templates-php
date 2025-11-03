<?php
require __DIR__ . '/../../text.php';
require __DIR__ . '/../../partials/head.php';
?>
<main id="main-content" class="section section-muted">
  <div class="container stack">
    <header data-anim="from-bottom">
      <h1 class="section-title">About our firm</h1>
      <p class="text-muted">Detail-driven <?php echo htmlspecialchars($ActiveIndustry); ?> professionals.</p>
    </header>
    <section class="grid grid-2">
      <article class="card" data-anim="from-bottom">
        <h2>Our history</h2>
        <p>Founded by industry veterans, we’ve grown through referrals and long-term partnerships.</p>
      </article>
      <article class="card" data-anim="from-left" data-anim-delay="120">
        <h2>Our people</h2>
        <p>We invest in continuing education, safety certifications, and leadership programs.</p>
      </article>
    </section>
    <section class="card card-border" data-anim="zoom" aria-label="Milestones">
      <h2>Milestones</h2>
      <ul class="list-clean stack" style="gap:var(--spacing-2);">
        <li data-anim="from-bottom">2012 &ndash; Expanded commercial division</li>
        <li data-anim="from-bottom" data-anim-delay="80">2016 &ndash; Launched rapid-response team</li>
        <li data-anim="from-bottom" data-anim-delay="120">2022 &ndash; Achieved 1,000+ completed projects</li>
      </ul>
    </section>
  </div>
</main>
<?php include __DIR__ . '/../../partials/footer.php'; ?>
