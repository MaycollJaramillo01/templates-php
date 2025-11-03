<?php
require __DIR__ . '/../../text.php';
require __DIR__ . '/../../partials/head.php';
?>
<main id="main-content" class="section section-light">
  <div class="container grid grid-2" style="align-items:start;">
    <section class="card" data-anim="from-bottom" aria-label="Contact form">
      <h1 class="section-title">Contact our coordinators</h1>
      <form class="stack" method="post" action="#">
        <label for="c4-name">Name</label>
        <input id="c4-name" name="name" type="text" required>
        <label for="c4-email">Email</label>
        <input id="c4-email" name="email" type="email" required>
        <label for="c4-phone">Phone</label>
        <input id="c4-phone" name="phone" type="tel">
        <label for="c4-message">Message</label>
        <textarea id="c4-message" name="message" rows="4" required></textarea>
        <button class="btn btn-primary" type="submit" data-anim="from-bottom" data-anim-delay="100">Send</button>
      </form>
    </section>
    <aside class="card" data-anim="from-left" aria-label="Contact details">
      <h2>Reach us</h2>
      <p><strong>Phone:</strong> <a href="tel:<?php echo htmlspecialchars($PhoneRef); ?>"><?php echo htmlspecialchars($Phone); ?></a></p>
      <p><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($Mail); ?>"><?php echo htmlspecialchars($Mail); ?></a></p>
      <p><strong>Office:</strong> <?php echo htmlspecialchars($Address); ?>, <?php echo htmlspecialchars($City); ?></p>
      <div class="card card-border" data-anim="zoom">
        <h3>Service window</h3>
        <p>Emergency calls answered 24/7.</p>
      </div>
    </aside>
  </div>
</main>
<?php include __DIR__ . '/../../partials/footer.php'; ?>
