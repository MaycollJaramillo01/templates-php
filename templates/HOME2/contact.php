<?php
require __DIR__ . '/../../text.php';
require __DIR__ . '/../../partials/head.php';
?>
<main id="main-content" class="section section-light">
  <div class="container stack">
    <header data-anim="from-bottom">
      <h1 class="section-title">Let's connect</h1>
      <p class="text-muted">Share a few details and we’ll coordinate a walk-through.</p>
    </header>
    <div class="grid grid-2" style="align-items:flex-start;">
      <section class="card" data-anim="from-bottom" aria-label="Contact form">
        <form class="stack" method="post" action="#">
          <label for="c2-name">Name</label>
          <input id="c2-name" name="name" type="text" required>
          <label for="c2-email">Email</label>
          <input id="c2-email" name="email" type="email" required>
          <label for="c2-service">Service interest</label>
          <select id="c2-service" name="service">
            <?php foreach ($ServicesByIndustry[$ActiveIndustry] as $service): ?>
              <option value="<?php echo htmlspecialchars($service['title']); ?>"><?php echo htmlspecialchars($service['title']); ?></option>
            <?php endforeach; ?>
          </select>
          <label for="c2-notes">Notes</label>
          <textarea id="c2-notes" name="notes" rows="4" required></textarea>
          <button class="btn btn-primary" type="submit" data-anim="from-bottom" data-anim-delay="80">Submit</button>
        </form>
      </section>
      <aside class="card" data-anim="from-left" aria-label="Office information">
        <h2>Contact information</h2>
        <p><strong>Phone:</strong> <a href="tel:<?php echo htmlspecialchars($PhoneRef); ?>"><?php echo htmlspecialchars($Phone); ?></a></p>
        <p><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($Mail); ?>"><?php echo htmlspecialchars($Mail); ?></a></p>
        <p><strong>Address:</strong> <?php echo htmlspecialchars($Address); ?>, <?php echo htmlspecialchars($City); ?></p>
        <div class="card card-border" data-anim="zoom">
          <h3>Service hours</h3>
          <p>Open daily 8 AM - 6 PM. Emergency crews on-call.</p>
        </div>
      </aside>
    </div>
  </div>
</main>
<?php include __DIR__ . '/../../partials/footer.php'; ?>
