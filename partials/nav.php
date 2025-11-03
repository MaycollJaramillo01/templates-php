<?php
$navItems = [
  'Home' => $BaseURL,
  'About' => $BaseURL . 'templates/' . $ActiveHome . '/about.php',
  'Services' => $BaseURL . 'templates/' . $ActiveHome . '/all-services.php',
  'Gallery' => $BaseURL . 'templates/' . $ActiveHome . '/gallery.php',
  'Testimonials' => $BaseURL . 'templates/' . $ActiveHome . '/testimonials.php',
  'Contact' => $BaseURL . 'templates/' . $ActiveHome . '/contact.php',
];
?>
<nav class="nav" aria-label="Main navigation">
  <button class="nav-toggle" data-nav-toggle aria-expanded="false" aria-controls="primary-menu">☰<span class="sr-only">Menu</span></button>
  <ul class="nav-menu" id="primary-menu" data-nav-menu>
    <?php foreach ($navItems as $label => $url): ?>
      <li><a href="<?php echo htmlspecialchars($url); ?>" data-anim="from-bottom"><?php echo htmlspecialchars($label); ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav>
