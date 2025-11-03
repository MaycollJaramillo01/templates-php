<?php require __DIR__ . '/../../../text.php'; ?>
<section class="section section-light" aria-label="Hero showcase">
  <div class="container hero">
    <div class="stack" data-anim="from-bottom">
      <p class="badge"><?php echo htmlspecialchars(strtoupper($ActiveIndustry)); ?> specialists</p>
      <h1 class="section-title" style="font-size:2.2rem;">Reliable <?php echo htmlspecialchars($ActiveIndustry); ?> pros in <?php echo htmlspecialchars($City); ?></h1>
      <p><?php echo htmlspecialchars($Phrase); ?></p>
      <div class="stack" style="flex-direction:row; flex-wrap:wrap; gap:var(--spacing-3);">
        <a class="btn btn-primary" href="<?php echo htmlspecialchars($BaseURL); ?>templates/<?php echo htmlspecialchars($ActiveHome); ?>/contact.php" data-anim="from-bottom" data-anim-delay="120">Request a quote</a>
        <a class="btn btn-accent" href="#services" data-anim="from-bottom" data-anim-delay="200">Explore services</a>
      </div>
    </div>
    <div class="stack" style="margin-top:var(--spacing-6);">
      <div class="grid" style="gap:var(--spacing-3);">
        <?php foreach ($HeroImages as $index => $image): ?>
          <figure data-anim="from-left" data-anim-delay="<?php echo $index * 80; ?>" class="card" style="padding:0; overflow:hidden;">
            <img src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars('Project highlight ' . ($index + 1)); ?>">
          </figure>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
