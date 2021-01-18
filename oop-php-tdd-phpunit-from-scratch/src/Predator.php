<?php


Interface Predator
{
    public function chase(Prey $prey);
    public function kill(Prey $prey);
}