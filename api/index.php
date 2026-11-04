<?php

// Vercel serverless entry point for Laravel
// Redirect storage paths to /tmp since Vercel's filesystem is read-only
$storageDir = sys_get_temp_dir() . '/storage';

$paths = [
    $storageDir,
    $storageDir . '/framework',
    $storageDir . '/framework/views',
    $storageDir . '/framework/cache',
    $storageDir . '/framework/sessions',
    $storageDir . '/logs',
];

foreach ($paths as $path) {
    if (!is_dir($path)) {
        @mkdir($path, 0755, true);
    }
}

putenv("LARAVEL_STORAGE_PATH={$storageDir}");
$_ENV['LARAVEL_STORAGE_PATH'] = $storageDir;
$_SERVER['LARAVEL_STORAGE_PATH'] = $storageDir;

putenv("VIEW_COMPILED_PATH={$storageDir}/framework/views");
$_ENV['VIEW_COMPILED_PATH'] = "{$storageDir}/framework/views";

putenv('SESSION_DRIVER=cookie');
$_ENV['SESSION_DRIVER'] = 'cookie';

putenv('LOG_CHANNEL=stderr');
$_ENV['LOG_CHANNEL'] = 'stderr';

putenv('CACHE_STORE=array');
$_ENV['CACHE_STORE'] = 'array';

require __DIR__ . '/../public/index.php';

