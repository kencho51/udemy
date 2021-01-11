<?php


class User
{

    public $email;

    /**
     * Create a callable for the injection dependency
     */
    protected $mailer_callable;


    /**
     * User constructor.
     * @param string $email The user's email
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }


    public function setMailerCallable(callable $mailer_callable)
    {
        $this->mailer_callable = $mailer_callable;
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

//        return $this->mailer->send($this->email, $message);

        //Calling callable to call static method
        return call_user_func($this->mailer_callable, $this->email, $message);
    }

}