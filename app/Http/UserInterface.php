<?php


namespace App\Http;

interface UserInterface 
{
    /**
     * Gets the current user details
     * 
     * @return string|null
     */
    public function getUser();
    public function getUserId();
    public function getUserName();
    public function getUserEmail();

    

}