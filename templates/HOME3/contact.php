<?php
require __DIR__ . '/../../text.php';
require __DIR__ . '/../../partials/head.php';
?>
<main id="main-content" class="section section-muted">
  <div class="container grid grid-2" style="align-items:start;">
    <section class="card" aria-label="Contact form" data-anim="from-bottom">
      <h1 class="section-title">Request a consultation</h1>
      <form class="stack" method="post" action="#">
        <label for="c3-name">Name</label>
        <input id="c3-name" name="name" type="text" required>
        <label for="c3-phone">Phone</label>
        <input id="c3-phone" name="phone" type="tel">
        <label for="c3-email">Email</label>
        <input id="c3-email" name="email" type="email" required>
        <label for="c3-scope">Project scope</label>
        <textarea id="c3-scope" name="scope" rows="4" required></textarea>
        <button class="btn btn-primary" type="submit" data-anim="from-bottom" data-anim-delay="80">Submit</button>
      </form>
    </section>
    <aside class="card" data-anim="from-left" aria-label="Company info">
      <h2>Headquarters</h2>
      <p><?php echo htmlspecialchars($Address); ?><br><?php echo htmlspecialchars($City . ', ' . $State . ' ' . $Zip); ?></p>
      <p><strong>Phone:</strong> <a href="tel:<?php echo htmlspecialchars($PhoneRef); ?>"><?php echo htmlspecialchars($Phone); ?></a></p>
      <p><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($Mail); ?>"><?php echo htmlspecialchars($Mail); ?></a></p>
      <div class="card card-border" data-anim="zoom">
        <h3>Response times</h3>
        <p>Most inquiries answered within 2 business hours.</p>
      </div>
    </aside>
  </div>
</main>
<?php include __DIR__ . '/../../partials/footer.php'; ?>
