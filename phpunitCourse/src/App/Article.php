<?php

namespace App;

use PhpParser\Builder\Function_;
use SebastianBergmann\CodeUnit\FunctionUnit;

class Article 
{
    public $title;

    public Function getSlug()
    {
        $slug = $this->title;
        //regular expression to catch 1 or more adjaccent whitespaces char
        $slug = preg_replace('/\s+/', '_', $slug);
        return $slug;
    }
}