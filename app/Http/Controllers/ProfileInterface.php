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
     * @param int $id
     * @param array $data
     */
    public function setProfile($id, $data);

    /**
     * Deletes a profile from the database
     * 
     * @param int $id
     * @return bool
     */
    public function deleteProfile($id);
}