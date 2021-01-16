<?php

class Animal 
{
    public $weight;

    public function eat()
    {
        var_dump('All animals can eat');
    }

    public function reproduce()
    {
        var_dump('All animals can reproduce');
    }

}

class Mammal extends Animal
{
    public $heartRate;

    public function breathe()
    {
        var_dump('I can breathe because I am a Mammal');
    }
}

class Dog extends Mammal
{
    public $color;

    public function bark()
    {
        var_dump('I can bark because I am a'. strtolower(get_class()));
    }

    public function chase()
    {
        var_dump('I am chasing a rabbit');
    }

    //sub class override the main class property
    public function breathe()
    {
        var_dump('I breathe very fast');
    }
}


header('Content-Type:text/plain', true);

$dog = new Dog;
$dog->color = 'Brown';
$dog->weight = '10';
$dog->heartRate = '60';

echo "weight=". $dog->weight, PHP_EOL, "Color=", $dog->color, PHP_EOL, "Heart rate =", $dog->heartRate;

$dog->bark();
$dog->chase();
$dog->eat();
$dog->reproduce();
$dog->breathe();