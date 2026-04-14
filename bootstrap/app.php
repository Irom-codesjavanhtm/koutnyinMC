<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// On Vercel serverless, storage/ is read-only — use /tmp instead
$storagePath = is_dir('/tmp') && !is_writable(dirname(__DIR__).'/storage')
    ? '/tmp/laravel/storage'
    : dirname(__DIR__).'/storage';

// Pre-create required directories so Blade/cache/session work
foreach ([
    "$storagePath/framework/views",
    "$storagePath/framework/cache/data",
    "$storagePath/framework/sessions",
    "$storagePath/logs",
] as $dir) {
    is_dir($dir) || mkdir($dir, 0755, true);
}

return Application::configure(basePath: dirname(__DIR__))
    ->useStoragePath($storagePath)
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
