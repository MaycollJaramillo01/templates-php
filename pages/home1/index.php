<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $Company . ' | ' . $Services . ' in ' . $City . ', ' . $State; ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($MetaDescription, ENT_QUOTES); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($MetaKeywords, ENT_QUOTES); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $BaseURL; ?>assets/css/global.css">
    <link rel="stylesheet" href="<?php echo $BaseURL; ?>assets/css/home.css">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="<?php echo $BaseURL; ?>">
            <img src="<?php echo $BaseURL . $Logo; ?>" alt="<?php echo $Company . ' ' . $City; ?>">
            <span><?php echo $Company; ?></span>
        </a>
        <button class="nav-toggle" type="button" aria-label="<?php echo $AccessibilityLabels['nav_toggle']; ?>" data-nav-toggle>
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav class="primary-nav" data-primary-nav>
            <ul>
                <?php foreach ($Navigation as $key => $label) : ?>
                    <li><a href="#<?php echo $key; ?>"><?php echo $label; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>
<main>
    <?php include __DIR__ . '/home-slider.php'; ?>
    <?php include __DIR__ . '/home-about.php'; ?>
    <?php include __DIR__ . '/home-services.php'; ?>
    <?php include __DIR__ . '/home-gallery.php'; ?>
    <?php include __DIR__ . '/home-testimonials.php'; ?>
    <?php include __DIR__ . '/home-contact.php'; ?>
</main>
<?php include __DIR__ . '/home-footer.php'; ?>
<script src="<?php echo $BaseURL; ?>assets/js/main.js" defer></script>
<script src="<?php echo $BaseURL; ?>assets/js/slider.js" defer></script>
<script src="<?php echo $BaseURL; ?>assets/js/animations.js" defer></script>
</body>
</html>
