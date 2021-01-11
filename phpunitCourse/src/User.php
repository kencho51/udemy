<?php


class User
{

    public $email;

    /**
     * Add a property to the User class for a mailer object
     */
    protected $mailer;

    /**
     * User constructor.
     * @param string $email The user's email
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * Setter method for mailer
     * @param Mailer $mailer
     */
    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param string $message The message
     * @return bool
     */
    public function notify(string $message)
    {
        //Calling statically
//        return Mailer::send($this->email, $message);

        //Calling on the mailer property, static method of the object class
//        return $this->mailer::send($this->email, $message);

        return $this->mailer->send($this->email, $message);
    }

}