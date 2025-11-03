<?php
require __DIR__ . '/../../text.php';
require __DIR__ . '/../../partials/head.php';
?>
<main id="main-content" class="section section-muted">
  <div class="container grid grid-2" style="align-items:start;">
    <section class="card" data-anim="from-bottom" aria-label="Contact form">
      <h1 class="section-title">Start your project</h1>
      <form class="stack" method="post" action="#">
        <label for="c5-name">Name</label>
        <input id="c5-name" name="name" type="text" required>
        <label for="c5-email">Email</label>
        <input id="c5-email" name="email" type="email" required>
        <label for="c5-phone">Phone</label>
        <input id="c5-phone" name="phone" type="tel">
        <label for="c5-details">Project details</label>
        <textarea id="c5-details" name="details" rows="4" required></textarea>
        <button class="btn btn-primary" type="submit" data-anim="from-bottom" data-anim-delay="120">Submit</button>
      </form>
    </section>
    <aside class="card" data-anim="from-left" aria-label="Office details">
      <h2>Contact info</h2>
      <p><strong>Phone:</strong> <a href="tel:<?php echo htmlspecialchars($PhoneRef); ?>"><?php echo htmlspecialchars($Phone); ?></a></p>
      <p><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($Mail); ?>"><?php echo htmlspecialchars($Mail); ?></a></p>
      <p><strong>Location:</strong> <?php echo htmlspecialchars($Address); ?>, <?php echo htmlspecialchars($City); ?></p>
      <div class="card card-border" data-anim="zoom">
        <h3>Availability</h3>
        <p>Weekdays 8 AM - 6 PM</p>
      </div>
    </aside>
  </div>
</main>
<?php include __DIR__ . '/../../partials/footer.php'; ?>
