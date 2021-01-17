<?php

spl_autoload_register(function($className)
{
    include 'src/'.$className.'.php';
});

header('Content-Type:text/plain', true);

$pdo = (new PDOClient('mysql', 'localhost', 'store', 'store', 'password'))->connect();

$products = $pdo->select('SELECT * FROM products')->get();

var_dump($products);