<?php

namespace App;

use PhpParser\Builder\Function_;
use SebastianBergmann\CodeUnit\FunctionUnit;

class Article 
{
    public $title;

    public Function getSlug()
    {
        //return empty string
        return "";
    }
}