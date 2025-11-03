<?php
require_once __DIR__ . '/text.php';

$design = '1';
if (isset($_GET['home'])) {
    $requested = preg_replace('/[^0-9]/', '', $_GET['home']);
    if ($requested !== '') {
        $design = $requested;
    }
}

$designPath = __DIR__ . '/pages/home' . $design;
$designIndex = $designPath . '/index.php';
if (!file_exists($designIndex)) {
    $design = '1';
    $designIndex = __DIR__ . '/pages/home1/index.php';
}

include $designIndex;
