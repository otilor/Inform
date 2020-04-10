<?php


namespace App\Http;
use Illuminate\Support\Facades\Auth;

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
}
