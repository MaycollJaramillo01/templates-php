<?php
require __DIR__ . '/../../text.php';
require __DIR__ . '/../../partials/head.php';
?>
<main id="main-content" class="section section-light">
  <div class="container stack">
    <header data-anim="from-bottom">
      <h1 class="section-title">About our team</h1>
      <p class="text-muted">We deliver dependable <?php echo htmlspecialchars($ActiveIndustry); ?> services backed by a responsive crew.</p>
    </header>
    <section class="grid grid-2">
      <article class="card" data-anim="from-bottom">
        <h2>Our philosophy</h2>
        <p>We prioritize customer experience, cleanliness, and lasting value.</p>
      </article>
      <article class="card" data-anim="from-left" data-anim-delay="120">
        <h2>Our promise</h2>
        <p>Every project includes pre-site protection, daily status updates, and quality checks.</p>
      </article>
    </section>
    <section class="card card-border" data-anim="zoom" aria-label="Community impact">
      <h2>Community impact</h2>
      <ul class="list-clean stack" style="gap:var(--spacing-2);">
        <li data-anim="from-bottom">Supporting local workforce development programs.</li>
        <li data-anim="from-bottom" data-anim-delay="80">Donating services to neighborhood nonprofits.</li>
        <li data-anim="from-bottom" data-anim-delay="120">Reducing waste through recycling initiatives.</li>
      </ul>
    </section>
  </div>
</main>
<?php include __DIR__ . '/../../partials/footer.php'; ?>
