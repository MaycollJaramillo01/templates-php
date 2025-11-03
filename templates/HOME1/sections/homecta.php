<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-light" aria-label="Call to action">
  <div class="container card" data-anim="from-bottom">
    <div class="grid grid-2" style="align-items:center;">
      <div class="stack">
        <h2 class="section-title">Schedule your onsite consultation</h2>
        <p>We respond within one business day and provide a detailed roadmap tailored to your project goals.</p>
        <p>Call <a href="tel:<?php echo htmlspecialchars($PhoneRef); ?>"><?php echo htmlspecialchars($Phone); ?></a> or text <a href="https://wa.me/<?php echo htmlspecialchars($WARef); ?>">WhatsApp</a>.</p>
      </div>
      <form class="stack" action="<?php echo htmlspecialchars($BaseURL); ?>templates/<?php echo htmlspecialchars($ActiveHome); ?>/contact.php" method="get" aria-label="Quick contact form">
        <label for="cta-name">Name</label>
        <input id="cta-name" name="name" type="text" placeholder="Your name">
        <label for="cta-service">Service needed</label>
        <select id="cta-service" name="service">
          <?php foreach ($ServicesByIndustry[$ActiveIndustry] as $service): ?>
            <option value="<?php echo htmlspecialchars($service['title']); ?>"><?php echo htmlspecialchars($service['title']); ?></option>
          <?php endforeach; ?>
        </select>
        <button class="btn btn-primary" type="submit" data-anim="from-bottom" data-anim-delay="100">Start planning</button>
      </form>
    </div>
  </div>
</section>
