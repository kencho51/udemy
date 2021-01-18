<?php

spl_autoload_register(function($className)
{
    include 'src/'.$className.'.php';
});

header('Content-Type:text/plain', true);

$dog = new Dog;
$dog->chase('Lion');
$dog->kill('Lion');

$cat = new Cat;
$cat->chase('Tiger');
$cat->kill('Tiger');