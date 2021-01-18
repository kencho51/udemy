<?php

namespace App;

use Acme\Test;

class Student
{
    public function __construct(Record $record, Test $test)
    {
        var_dump("from inside namespace");
    }
}