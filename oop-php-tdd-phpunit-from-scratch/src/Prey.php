<?php


Interface Prey
{
    public function chaseBy(Predator $predator);
    public function killBy(Predator $predator);
}