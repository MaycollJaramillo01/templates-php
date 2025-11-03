<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-muted" aria-label="Schedule a visit">
  <div class="container card" data-anim="from-bottom">
    <div class="stack" style="gap:var(--spacing-6);">
      <div class="stack">
        <h2 class="section-title">Let’s plan your project timeline</h2>
        <p>We’ll prepare a detailed proposal with options for material upgrades and phased delivery.</p>
      </div>
      <div class="grid grid-2">
        <div class="card card-border" data-anim="from-bottom">
          <h3>Direct line</h3>
          <p>Call <a href="tel:<?php echo htmlspecialchars($PhoneRef); ?>"><?php echo htmlspecialchars($Phone); ?></a> or email <a href="mailto:<?php echo htmlspecialchars($Mail); ?>"><?php echo htmlspecialchars($Mail); ?></a>.</p>
        </div>
        <div class="card card-border" data-anim="from-bottom" data-anim-delay="120">
          <h3>Instant messaging</h3>
          <p>WhatsApp us at <a href="https://wa.me/<?php echo htmlspecialchars($WARef); ?>"><?php echo htmlspecialchars($WhatsApp); ?></a> for rapid responses.</p>
        </div>
      </div>
    </div>
  </div>
</section>
