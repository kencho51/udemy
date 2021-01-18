<?php


class PreyMethod
{
    public function chaseBy(Predator $predator)
    {
        var_dump("I am being chased by a ". get_class($predator));
    }

    public function killBy(Predator $predator)
    {
        var_dump(get_class(). "has been killed by a ". get_class($predator));
    }
}