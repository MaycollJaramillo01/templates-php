<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-muted" aria-label="Hero banner">
  <div class="container grid grid-2" style="align-items:center;">
    <div class="stack" data-anim="from-bottom">
      <h1 class="section-title" style="font-size:2rem;">Your one-stop partner for <?php echo htmlspecialchars($ActiveIndustry); ?> solutions</h1>
      <p>From planning to final inspection, <?php echo htmlspecialchars($Company); ?> coordinates every step with precision.</p>
      <div class="grid" style="gap:var(--spacing-3);">
        <a class="btn btn-primary" href="<?php echo htmlspecialchars($BaseURL); ?>templates/<?php echo htmlspecialchars($ActiveHome); ?>/contact.php" data-anim="from-bottom">Book consultation</a>
        <a class="btn btn-accent" href="tel:<?php echo htmlspecialchars($PhoneRef); ?>" data-anim="from-bottom" data-anim-delay="100">Call <?php echo htmlspecialchars($Phone); ?></a>
      </div>
    </div>
    <div class="card" data-anim="from-left">
      <h2>Project snapshots</h2>
      <ul class="list-clean stack" style="gap:var(--spacing-3);">
        <?php foreach ($HeroImages as $index => $image): ?>
          <li class="flex" style="gap:var(--spacing-3); align-items:center;">
            <img src="<?php echo htmlspecialchars($image); ?>" alt="Showcase <?php echo htmlspecialchars($index + 1); ?>" style="width:72px; border-radius:var(--radius-sm);">
            <span data-anim="from-bottom" data-anim-delay="<?php echo $index * 70; ?>">Award-winning workmanship <?php echo $index + 1; ?></span>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
