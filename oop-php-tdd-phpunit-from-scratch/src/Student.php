<?php

namespace App;

use Acme\Test;
use PDOException;
use PDO;

class Student
{
    public function __construct(Record $record, Test $test)
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=store', 'user', 'password');
        }catch (PDOException $ex){
            var_dump($ex->getMessage());
        }
        var_dump("from inside namespace");
    }
}