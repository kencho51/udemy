<?php

use App\Student;

spl_autoload_register(function($className)
{
    $class_name_array = explode('\\', $className);
    include 'src/'.end($class_name_array).'.php';
});

header('Content-Type:text/plain', true);

new Student();