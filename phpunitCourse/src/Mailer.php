<?php


class Mailer
{

    /**
     * Send a message
     *
     * @param string $email Recipient email address
     * @param string $message Content of the email
     *
     * @throws InvalidArgumentException If $email is empty
     * @return bool
     */
    public static function send(string $email, string $message)
    {
        if(empty($email))
        {
            throw new InvalidArgumentException();
        }

        echo "Send '$message' to '$email'";

        return true;
    }

}