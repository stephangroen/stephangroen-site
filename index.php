<?php
// boquila.nl/.com toont de pagina van de holding, alle andere domeinen die van Stephan Groen.
$host = strtolower(preg_replace('/:\d+$/', '', $_SERVER['HTTP_HOST'] ?? ''));

if (strpos($host, 'boquila.') === 0 || strpos($host, 'www.boquila.') === 0) {
    require __DIR__ . '/pages/boquila.php';
} else {
    require __DIR__ . '/pages/stephan.php';
}
