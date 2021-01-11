<?php

abstract class AbstractPerson
{

    protected $surname;

    /**
     * AbstractPerson constructor.
     * @param string $surname The person's surname
     */
    public function __construct(string $surname)
    {
        $this->surname = $surname;
    }

    /**
     * Get the person's title
     * @return string
     */
    abstract protected function getTitle();

    public function getNameAndTitle()
    {
        return $this->getTitle() . ' ' . $this->surname;
    }
}