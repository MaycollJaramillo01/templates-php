<?php
require __DIR__ . '/../../text.php';
require __DIR__ . '/../../partials/head.php';
?>
<main id="main-content">
  <?php
  $homeSections = ['hereslider', 'homeservices', 'homeaboutsection', 'homegallery', 'homecta', 'homeserviceareas'];
  foreach ($homeSections as $section) {
      include __DIR__ . '/sections/' . $section . '.php';
  }
  ?>
</main>
<?php include __DIR__ . '/../../partials/footer.php'; ?>
