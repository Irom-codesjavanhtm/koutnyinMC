<?php

// Vercel terminates SSL at the load balancer — detect HTTPS via X-Forwarded-Proto
if (!empty($_SERVER['HTTP_HOST'])) {
    $proto  = $_SERVER['HTTP_X_FORWARDED_PROTO'] ?? ($_SERVER['HTTPS'] ?? 'http');
    $scheme = ($proto === 'https' || $proto === 'on' || $proto === '1') ? 'https' : 'http';
    $url    = $scheme . '://' . $_SERVER['HTTP_HOST'];
    $_ENV['APP_URL'] = $url;
    putenv('APP_URL=' . $url);
}

require __DIR__ . '/../public/index.php';
