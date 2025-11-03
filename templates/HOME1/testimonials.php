<?php
require __DIR__ . '/../../text.php';
session_start();
$testimonialFile = __DIR__ . '/../../data/testimonial.json';
$errors = [];
$success = '';
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(16));
}
$csrfToken = $_SESSION['csrf_token'];

function load_testimonials(string $file): array
{
    if (!file_exists($file)) {
        return [];
    }
    $content = file_get_contents($file);
    $decoded = json_decode($content ?: '[]', true);
    return is_array($decoded) ? $decoded : [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['csrf_token'] ?? '';
    if (!hash_equals($csrfToken, $token)) {
        $errors[] = 'Invalid security token. Please try again.';
    }

    $honeypot = trim($_POST['website'] ?? '');
    if ($honeypot !== '') {
        $errors[] = 'Spam detected.';
    }

    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '');
    $comment = trim(filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
    $rating = filter_input(INPUT_POST, 'rating', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1, 'max_range' => 5]]);

    if ($name === '' || $comment === '' || $rating === false) {
        $errors[] = 'Please provide your name, rating, and comment.';
    }

    if (!$errors) {
        $entry = [
            'name' => $name,
            'email' => $email,
            'comment' => $comment,
            'rating' => (int) $rating,
            'date' => date('Y-m-d')
        ];
        $current = load_testimonials($testimonialFile);
        $current[] = $entry;
        if (count($current) > 2000) {
            $current = array_slice($current, -2000);
        }
        $encoded = json_encode($current, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        if (file_put_contents($testimonialFile, $encoded, LOCK_EX) === false) {
            $errors[] = 'Unable to save your testimonial. Please try again later.';
        } else {
            $success = 'Thank you! Your testimonial has been added.';
            $_SESSION['csrf_token'] = bin2hex(random_bytes(16));
            $csrfToken = $_SESSION['csrf_token'];
        }
    }
}

$testimonials = load_testimonials($testimonialFile);
$testimonials = array_reverse($testimonials);
$perPage = 5;
$totalItems = count($testimonials);
$totalPages = max(1, (int) ceil($totalItems / $perPage));
$currentPage = (int) filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]) ?: 1;
if ($currentPage > $totalPages) {
    $currentPage = $totalPages;
}
$offset = ($currentPage - 1) * $perPage;
$visible = array_slice($testimonials, $offset, $perPage);

require __DIR__ . '/../../partials/head.php';
include __DIR__ . '/../../partials/stats-bar.php';
?>
<main id="main-content" class="section section-light">
  <div class="container stack">
    <header data-anim="from-bottom">
      <h1 class="section-title">Client testimonials</h1>
      <p class="text-muted">See what our customers say about working with <?php echo htmlspecialchars($Company); ?>.</p>
    </header>
    <?php if ($success): ?>
      <div class="alert alert-success" role="status" aria-live="polite" data-anim="from-bottom"><?php echo htmlspecialchars($success); ?></div>
    <?php endif; ?>
    <?php if ($errors): ?>
      <div class="alert alert-error" role="alert" aria-live="assertive" data-anim="from-bottom">
        <ul class="list-clean stack">
          <?php foreach ($errors as $error): ?>
            <li><?php echo htmlspecialchars($error); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <section class="grid grid-2" aria-label="Submit testimonial">
      <form class="card stack" method="post" data-anim="from-bottom">
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken); ?>">
        <label for="testimonial-name">Name</label>
        <input id="testimonial-name" name="name" type="text" required>
        <label for="testimonial-email">Email <span class="text-muted">(optional)</span></label>
        <input id="testimonial-email" name="email" type="email">
        <label for="testimonial-rating">Rating</label>
        <select id="testimonial-rating" name="rating" required>
          <option value="">Select</option>
          <?php for ($i = 5; $i >= 1; $i--): ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?> star<?php echo $i > 1 ? 's' : ''; ?></option>
          <?php endfor; ?>
        </select>
        <label for="testimonial-comment">Your experience</label>
        <textarea id="testimonial-comment" name="comment" rows="4" required></textarea>
        <div class="sr-only">
          <label for="testimonial-website">Website</label>
          <input id="testimonial-website" type="text" name="website" tabindex="-1" autocomplete="off">
        </div>
        <button class="btn btn-primary" type="submit" data-anim="from-bottom" data-anim-delay="100">Submit testimonial</button>
      </form>
      <aside class="card" data-anim="from-left">
        <h2>Why share?</h2>
        <p>Your feedback helps neighbors choose trusted <?php echo htmlspecialchars($ActiveIndustry); ?> experts.</p>
        <p>We review every submission to ensure respectful and authentic stories.</p>
      </aside>
    </section>
    <section aria-label="Testimonials list" class="stack">
      <h2 data-anim="from-bottom">Latest reviews</h2>
      <div class="grid" style="gap:var(--spacing-4);">
        <?php if (!$visible): ?>
          <p data-anim="from-bottom">No testimonials yet. Be the first to share your experience!</p>
        <?php else: ?>
          <?php foreach ($visible as $index => $review): ?>
            <article class="card" data-anim="zoom" data-anim-delay="<?php echo $index * 80; ?>">
              <header class="flex flex-between" style="gap:var(--spacing-3);">
                <strong><?php echo htmlspecialchars($review['name'] ?? 'Client'); ?></strong>
                <span aria-label="Rating: <?php echo (int) ($review['rating'] ?? 0); ?> out of 5"><?php echo str_repeat('★', (int) ($review['rating'] ?? 0)); ?></span>
              </header>
              <p class="text-muted"><?php echo htmlspecialchars($review['date'] ?? ''); ?></p>
              <p><?php echo htmlspecialchars($review['comment'] ?? ''); ?></p>
            </article>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <?php if ($totalPages > 1): ?>
        <nav class="pagination" aria-label="Testimonials pagination" data-anim="from-bottom">
          <?php for ($page = 1; $page <= $totalPages; $page++): ?>
            <a href="?page=<?php echo $page; ?>" class="<?php echo $page === $currentPage ? 'is-active' : ''; ?>">Page <?php echo $page; ?></a>
          <?php endfor; ?>
        </nav>
      <?php endif; ?>
    </section>
  </div>
</main>
<?php include __DIR__ . '/../../partials/footer.php'; ?>
