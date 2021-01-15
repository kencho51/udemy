<?php

class Video
{
    // add in the properties/variables
    public $type;
    public $duration;
    public $published = false;
    public $title;

    public function __construct($type = 'mp4', $duration = '08.90', $title = 'default')
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

$video2 = new Video(); //will throw error
var_dump($video2);