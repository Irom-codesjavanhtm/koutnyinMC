<?php

// Dynamically set APP_URL so asset() works on both production and preview URLs
if (!empty($_SERVER['HTTP_HOST'])) {
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $url = $scheme . '://' . $_SERVER['HTTP_HOST'];
    $_ENV['APP_URL'] = $url;
    putenv('APP_URL=' . $url);
}

require __DIR__ . '/../public/index.php';
