<?php


class user
{
    /**
     * @var string
     */
    public $first_name;

    /**
     * @var string
     */
    public $surname;

    /**
     * Email address
     * @var string
     */
    public $email;

    public function getFullName()
    {
        return trim("$this->first_name $this->surname");
    }

    public function notify($message)
    {
        $mailer = new Mailer;
        return $mailer->sendMessage($this->email, $message);
    }
}