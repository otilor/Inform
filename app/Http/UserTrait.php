<?php


namespace App\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Inspiring;

/**
 * Specfies all the methods belonging to users
 * 
 * 
 */
trait UserTrait 
{
    /**
     * Gets the data of the current user
     * 
     * @return string|null
     */
    public function getUser()
    {
        return Auth::user();
    }

    /**
     * Returns the current user id
     * 
     * @param \Illuminate\Support\Facades\Auth
     * @return int $id
     */
    public function getUserId()
    {
        $id = $this->getUser()->id;
        return $id;
    }

    /**
     * Returns the user name
     * 
     * @param \Illuminate\Support\Facades\Auth
     * @return string $name
     */
    public function getUserName()
    {
        $name = $this->getUser()->name;
        return $name;
    }

    /**
     * Returns the user email
     * 
     * @param \Illuminate\Support\Facades\Auth
     * @param string $email
     * @return string $email
     */
    public function getUserEmail()
    {
        $email = $this->getUser()->email;
        return $email;
    }

    public function getQuote()
    {
        // $quote = Inspiring::quote();
        $quote = "Gabriel is an OOP pro!";
        return $quote;
    }
}
