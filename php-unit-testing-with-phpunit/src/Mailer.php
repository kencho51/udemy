<?php

/**
 * Class Mailer
 * Send messages
 */
class Mailer
{
    /**
     * @param $email
     * @param $message
     * @return bool True if sent, false otherwise
     */
    public function sendMessage($email, $message)
    {
        //use mail() or PHPMailer for example
        sleep(3);
        echo "send '$message' to '$email'";
        return true;
    }

}