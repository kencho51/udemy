<?php

class Video
{
    // add in the properties/variables
    // encapsulation using private or protected, only be accessible inside class
    private $type;
    private $duration;
    private $published = false;
    private $title;
    private $playStatus;

    public function setPublished(bool $state)
    {
        $this->published = $state;
    }

    private function getPublished()
    {
        return $this->published;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public  function getTitle()
    {
        return $this->title;
    }

    public function play()
    {
        if ($this->getPublished()) {
            $this->playStatus = true;
            return "The video is playing";
        }

        "This video is not yet available.";
    }


    public function pause()
    {
        return $this->playStatus ? "This video is paused." : "";
    }

}

header('Content-Type:text/plain', true);
$introduction = new Video();
$introduction->setPublished(true);

$introduction->setTitle('Introduction to OOP');
echo $introduction->getTitle(), PHP_EOL;
echo $introduction->play(), PHP_EOL, $introduction->pause(), PHP_EOL;
