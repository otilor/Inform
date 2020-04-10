<?php

namespace App\Http\Controllers;
interface ProfileInterface{
    /**
     * Gets the profile of the current user
     * @param int $id
     * @return string
     */
    public function getProfile($id);

    /**
     * Sets / Updates the profile of a particular user
     * I love my wife,  very well
     * @param int $id
     * @param array $data
     */
    public function setProfile($id, $data);

    /**
     * Deletes a profile from the database
     * Feature not activated yet, though!
     * 
     * @param int $id
     * @return bool
     */
    public function deleteProfile($id);
}