<?php

class Video
{
    // add in the properties/variables
    // encapsulation using private or protected, only be accessible inside class
    private $type;
    private $duration;
    private $published = false;
    private $title;

    public function __construct(string $type, float $duration, string $title)
    {
        $this->type = $type;
        $this->duration = $duration;
        $this->title = $title;
    }

    public function setPublished(bool $state)
    {
        $this->published = $state;
    }

    public function getPublished()
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
        return $this->published ? "The video is playing." : "This video is not yet available.";
    }


    public function pause()
    {
        return $this->published ? "This video is paused." : "";
    }

    public function __destruct()
    {
        var_dump('Destroying instance of '. get_class());
    }
}

//header('Content-Type:text/plain', true);
$introduction = new Video('mp4', '10.30', 'Introduction to OOP');



//$video2 = new Video(); //will throw error
$video2 = new Video('mp4', '12.30', 'The second video');
var_dump($video2);