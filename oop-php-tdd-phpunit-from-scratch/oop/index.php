<?php

class Video
{
    // add in the properties/variables
    public $type;
    public $duration;
    public $published = false;
    public $title;

    public function play()
    {
        return $this->published ? "The video is playing." : "This video is not yet available.";
    }


    public function pause()
    {
        return $this->published ? "This video is paused." : "";
    }
}

header('Content-Type:text/plain', true);
$introduction = new Video();
$introduction->published = true;
$introduction->author = 'Mary'; //set up an artbitary property, but should be avoided.
echo $introduction->play(), PHP_EOL, $introduction->pause(), PHP_EOL, $introduction->author, PHP_EOL;

$video2 = new Video();
echo $video2->play(), PHP_EOL, $video2->pause(), PHP_EOL;