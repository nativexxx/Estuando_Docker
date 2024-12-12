<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine se o aplicativo está em modo de manutenção...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Registre o autoloader do Composer...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request... - Inicialize o Laravel e trate da solicitação ...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
