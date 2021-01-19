<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$config = \App\helpers\Config::get('app', 'app_name');
var_dump($config);