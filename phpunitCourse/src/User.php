<?php


class User
{

    public $email;


    /**
     * User constructor.
     * @param string $email The user's email
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }


    /**
     * @param string $message The message
     * @return bool
     */
    public function notify(string $message)
    {
        //Calling statically
        return Mailer::send($this->email, $message);

    }

}