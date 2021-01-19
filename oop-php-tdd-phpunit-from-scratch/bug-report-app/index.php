<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$application = new \App\helpers\App();
echo $application->getServerTime()->format('Y-m-d H:i:s') . PHP_EOL;
echo $application->getLogPath() . PHP_EOL;
echo $application->getEnvironment() . PHP_EOL;
echo $application->isDebugMode() . PHP_EOL;
//echo $application->isRunningFromConsole() . PHP_EOL;
if ($application->isRunningFromConsole()) {
    echo 'Form command line';
} else {
    echo 'From browser';
}

