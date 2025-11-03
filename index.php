<?php
require __DIR__ . '/text.php';
$homePath = __DIR__ . "/templates/{$ActiveHome}/index.php";
if (!file_exists($homePath)) {
    http_response_code(404);
    echo 'Home template not found.';
    exit;
}
require $homePath;
