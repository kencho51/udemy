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

    /**
     * Dependency Injection
     * constructor method or setUp method
     * @var Mailer
     */
    protected $mailer;

    /**
     * Set the mailer dependency
     * @param Mailer $mailer
     */
    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;

    }

    public function getFullName()
    {
        return trim("$this->first_name $this->surname");
    }

    public function notify($message)
    {
        return $this->mailer->sendMessage($this->email, $message);
    }
}