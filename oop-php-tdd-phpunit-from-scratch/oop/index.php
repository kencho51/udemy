<?php

class Video
{
    // add in the properties/variables
    public $type;
    public $duration;
    public $published = false;
    public $title;

    public function __construct($type, $duration, $title)
    {
        $this->type = $type;
        $this->duration = $duration;
        $this->title = $title;
    }

    public function play()
    {
        return $this->published ? "The video is playing." : "This video is not yet available.";
    }


    public function pause()
    {
        return $this->published ? "This video is paused." : "";
    }
}

//header('Content-Type:text/plain', true);
$introduction = new Video('mp4', '10.30', 'Introduction to OOP');
var_dump($introduction);

$video2 = new Video('mp4', '13.30', 'The Second video');
var_dump($video2);