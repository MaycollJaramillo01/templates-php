<?php
require __DIR__ . '/../../text.php';
require __DIR__ . '/../../partials/head.php';
?>
<main id="main-content" class="section section-light">
  <div class="container stack">
    <header data-anim="from-bottom">
      <h1 class="section-title">About our collective</h1>
      <p class="text-muted">Multi-disciplinary teams ready for complex <?php echo htmlspecialchars($ActiveIndustry); ?> scopes.</p>
    </header>
    <section class="grid grid-2">
      <article class="card" data-anim="from-bottom">
        <h2>Integrated services</h2>
        <p>Our crews collaborate across departments to streamline scheduling, procurement, and installation.</p>
      </article>
      <article class="card" data-anim="from-left" data-anim-delay="120">
        <h2>Safety leadership</h2>
        <p>Daily safety huddles, PPE compliance, and third-party inspections keep every site secure.</p>
      </article>
    </section>
    <section class="card card-border" data-anim="zoom" aria-label="Team highlights">
      <h2>Team highlights</h2>
      <ul class="list-clean stack" style="gap:var(--spacing-2);">
        <li data-anim="from-bottom">Dedicated quality control managers.</li>
        <li data-anim="from-bottom" data-anim-delay="80">In-house customer success coordinators.</li>
        <li data-anim="from-bottom" data-anim-delay="120">Veteran-led field leadership team.</li>
      </ul>
    </section>
  </div>
</main>
<?php include __DIR__ . '/../../partials/footer.php'; ?>
