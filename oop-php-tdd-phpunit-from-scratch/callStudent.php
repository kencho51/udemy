<?php

use App\Student;
use App\Record;
use Acme\Test;

require_once __DIR__ . '/vendor/autoload.php';

header('Content-Type:text/plain', true);

new Student(new Record(), new Test());