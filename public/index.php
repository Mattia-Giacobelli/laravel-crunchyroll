<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. Manutenzione
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// 2. Autoload di Composer
require __DIR__ . '/../vendor/autoload.php';

// 3. Bootstrap di Laravel
(require_once __DIR__ . '/../bootstrap/app.php')
    ->handleRequest(Request::capture());
