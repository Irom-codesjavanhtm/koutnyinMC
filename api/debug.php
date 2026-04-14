<?php
header('Content-Type: text/plain');

echo "PHP Version: " . PHP_VERSION . "\n";
echo "Vendor autoload: " . (file_exists(__DIR__ . '/../vendor/autoload.php') ? 'EXISTS' : 'MISSING') . "\n";
echo "Bootstrap app: " . (file_exists(__DIR__ . '/../bootstrap/app.php') ? 'EXISTS' : 'MISSING') . "\n";
echo "APP_KEY set: " . (empty(getenv('APP_KEY')) ? 'NO' : 'YES') . "\n";
echo "Storage writable: " . (is_writable(__DIR__ . '/../storage') ? 'YES' : 'NO (will use /tmp)') . "\n";
echo "/tmp writable: " . (is_writable('/tmp') ? 'YES' : 'NO') . "\n";

// Try booting Laravel and capture any error
try {
    require __DIR__ . '/../vendor/autoload.php';
    echo "Autoload: OK\n";
} catch (Throwable $e) {
    echo "Autoload ERROR: " . $e->getMessage() . "\n";
}
