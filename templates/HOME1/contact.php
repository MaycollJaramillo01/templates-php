<?php
require __DIR__ . '/../../text.php';
require __DIR__ . '/../../partials/head.php';
?>
<main id="main-content" class="section section-light">
  <div class="container grid grid-2" style="align-items:flex-start;">
    <section class="card" aria-label="Contact form" data-anim="from-bottom">
      <h1 class="section-title">Contact us</h1>
      <p class="text-muted">Fill out the form and our team will reach out within 24 hours.</p>
      <form class="stack" method="post" action="#">
        <label for="contact-name">Name</label>
        <input id="contact-name" name="name" type="text" required>
        <label for="contact-email">Email</label>
        <input id="contact-email" name="email" type="email" required>
        <label for="contact-phone">Phone</label>
        <input id="contact-phone" name="phone" type="tel">
        <label for="contact-message">Project details</label>
        <textarea id="contact-message" name="message" rows="4" required></textarea>
        <button class="btn btn-primary" type="submit" data-anim="from-bottom" data-anim-delay="80">Send message</button>
      </form>
    </section>
    <section class="card" aria-label="Contact details" data-anim="from-left">
      <h2>Visit or call</h2>
      <p><?php echo htmlspecialchars($Address); ?><br><?php echo htmlspecialchars($City . ', ' . $State . ' ' . $Zip); ?></p>
      <p><strong>Phone:</strong> <a href="tel:<?php echo htmlspecialchars($PhoneRef); ?>"><?php echo htmlspecialchars($Phone); ?></a></p>
      <p><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($Mail); ?>"><?php echo htmlspecialchars($Mail); ?></a></p>
      <div class="card card-border" data-anim="zoom">
        <h3>Office hours</h3>
        <p>Mon-Fri 8:00 AM - 6:00 PM<br>Sat 9:00 AM - 2:00 PM</p>
      </div>
    </section>
  </div>
</main>
<?php include __DIR__ . '/../../partials/footer.php'; ?>
