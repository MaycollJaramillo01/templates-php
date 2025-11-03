<?php
require __DIR__ . '/../../text.php';
require __DIR__ . '/../../partials/head.php';
?>
<main id="main-content" class="section section-muted">
  <div class="container stack">
    <header data-anim="from-bottom">
      <h1 class="section-title">Who we are</h1>
      <p class="text-muted">Trusted <?php echo htmlspecialchars($ActiveIndustry); ?> experts delivering consistent results.</p>
    </header>
    <section class="grid grid-2" aria-label="Our background">
      <article class="card" data-anim="from-bottom">
        <h2>Experience that counts</h2>
        <p>Our leadership team has guided complex renovations, capital improvements, and proactive maintenance programs for over 15 years.</p>
      </article>
      <article class="card" data-anim="from-left" data-anim-delay="140">
        <h2>Community commitment</h2>
        <p>We invest in local apprenticeships and support neighborhood revitalization initiatives.</p>
      </article>
    </section>
    <section class="card card-border" data-anim="zoom" aria-label="Certifications">
      <h2>Certifications &amp; memberships</h2>
      <ul class="list-clean stack" style="gap:var(--spacing-2);">
        <li data-anim="from-bottom">National Association of Remodeling Industry</li>
        <li data-anim="from-bottom" data-anim-delay="80">Better Business Bureau A+ Rating</li>
        <li data-anim="from-bottom" data-anim-delay="120">EPA Lead-Safe Certified Firm</li>
      </ul>
    </section>
  </div>
</main>
<?php include __DIR__ . '/../../partials/footer.php'; ?>
