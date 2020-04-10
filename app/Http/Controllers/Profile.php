<?php
namespace App\Http\Controllers;
use App\User;

trait Profile{

    /**
     * This gets a certain user from the database
     * @return string|null
     */
    public function getProfile($id)
    {
        // Returns the collection
        return User::findOrFail((int) $id);
    }

    /**
     * This sets the profile to the specified data
     * 
     * @param int $id
     * @param array $data
     */
    public function setProfile($id, $data)
    {
        $fetch_profile = $this->getProfile($id);
        $fetch_profile->gender = $data["gender"];
        $fetch_profile->save();

    }


    // Delete function coming soon
    public function deleteProfile($id)
    {
        //
        
    }



}


