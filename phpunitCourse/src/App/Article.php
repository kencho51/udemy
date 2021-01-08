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
        
        // \w character includ letters, numbers and an underscore, 
         // with negation ^, which means any char that isn't one of these letters will be replaced with an empty string 
         $slug = preg_replace('/[^\w]+/', '', $slug);
        
        $slug = trim($slug, "_"); //to remove any leading or trailing underscore char
        return $slug;
    }
}