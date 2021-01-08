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
        $slug = str_replace(' ', '_', $slug);
        return $slug;
    }
}