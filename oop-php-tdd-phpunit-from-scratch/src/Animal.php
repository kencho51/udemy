<?php


class Animal
{
    public function chase($target)
    {
        var_dump("Chasing a". $target);
    }

    public function kill($target)
    {
        var_dump("I have just killed a ". $target);
    }
}