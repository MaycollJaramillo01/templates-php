<?php
require_once __DIR__ . '/../text.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo htmlspecialchars($Phrase); ?>">
  <title><?php echo htmlspecialchars($Company . ' | ' . ucfirst($ActiveIndustry) . ' Experts'); ?></title>
  <link rel="preload" href="assets/fonts/" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="role.css">
  <link rel="stylesheet" href="pageview.css">
  <script src="assets/js/main.js" defer></script>
  <script src="assets/js/anim.js" defer></script>
</head>
<body>
<a class="sr-only" href="#main-content">Skip to content</a>
<?php include __DIR__ . '/header.php'; ?>
