<?php
require_once __DIR__ . '/../text.php';

$testimonialFile = __DIR__ . '/../data/testimonial.json';
$testimonialData = [];
if (file_exists($testimonialFile)) {
    $contents = file_get_contents($testimonialFile);
    $testimonialData = json_decode($contents ?: '[]', true) ?: [];
}

$total = count($testimonialData);
$average = $total ? array_sum(array_column($testimonialData, 'rating')) / $total : 0;
$averageFormatted = number_format($average, 1);
$distribution = array_fill(1, 5, 0);
foreach ($testimonialData as $entry) {
    $score = (int) ($entry['rating'] ?? 0);
    if ($score >= 1 && $score <= 5) {
        $distribution[$score]++;
    }
}
$latest = $total ? end($testimonialData) : null;
?>
<section class="stats-bar" aria-label="Testimonials performance">
  <div class="container" style="padding:var(--spacing-4) 0;">
    <div class="stat-grid">
      <div class="card card-border" data-anim="from-bottom">
        <p class="text-muted">Average rating</p>
        <p style="font-size:2rem; font-weight:700;"><?php echo htmlspecialchars($averageFormatted); ?> / 5</p>
      </div>
      <div class="card card-border" data-anim="from-bottom" data-anim-delay="60">
        <p class="text-muted">Total reviews</p>
        <p style="font-size:2rem; font-weight:700;"><?php echo htmlspecialchars((string) $total); ?></p>
      </div>
      <div class="card card-border" data-anim="from-bottom" data-anim-delay="120">
        <p class="text-muted">5-Star share</p>
        <p style="font-size:2rem; font-weight:700;">
          <?php echo $total ? round(($distribution[5] / $total) * 100) : 0; ?>%
        </p>
      </div>
      <div class="card card-border" data-anim="from-bottom" data-anim-delay="180">
        <p class="text-muted">Latest review</p>
        <?php if ($latest): ?>
          <p><strong><?php echo htmlspecialchars($latest['name'] ?? 'Client'); ?></strong> on <?php echo htmlspecialchars($latest['date'] ?? ''); ?></p>
        <?php else: ?>
          <p>No reviews yet.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <script type="application/ld+json">
  <?php echo json_encode([
      '@context' => 'https://schema.org',
      '@type' => 'LocalBusiness',
      'name' => $Company,
      'aggregateRating' => [
          '@type' => 'AggregateRating',
          'ratingValue' => $averageFormatted,
          'reviewCount' => $total
      ]
  ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
  ?>
  </script>
</section>
