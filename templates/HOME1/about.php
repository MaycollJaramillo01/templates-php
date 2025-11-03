<?php
require __DIR__ . '/../../text.php';
require __DIR__ . '/../../partials/head.php';
?>
<main id="main-content" class="section section-light">
  <div class="container stack">
    <header data-anim="from-bottom">
      <h1 class="section-title">About <?php echo htmlspecialchars($Company); ?></h1>
      <p class="text-muted">Community-focused <?php echo htmlspecialchars($ActiveIndustry); ?> specialists.</p>
    </header>
    <section class="grid grid-2" aria-label="Company story" style="align-items:flex-start;">
      <article class="card" data-anim="from-bottom">
        <h2>Our mission</h2>
        <p>We deliver safe, high-quality workmanship powered by transparent communication and accountable teams.</p>
      </article>
      <article class="card" data-anim="from-left" data-anim-delay="120">
        <h2>Why it matters</h2>
        <p>Every project receives a dedicated project manager, detailed planning, and post-service support.</p>
      </article>
    </section>
    <section class="section-muted card" data-anim="zoom" aria-label="Core values">
      <h2>Core values</h2>
      <ul class="list-clean stack">
        <li data-anim="from-bottom">Integrity in every estimate and invoice.</li>
        <li data-anim="from-bottom" data-anim-delay="80">Safety-first culture with weekly toolbox talks.</li>
        <li data-anim="from-bottom" data-anim-delay="120">Sustainable materials and responsible waste reduction.</li>
      </ul>
    </section>
  </div>
</main>
<?php include __DIR__ . '/../../partials/footer.php'; ?>
