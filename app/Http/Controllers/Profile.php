<?php
namespace App\Http\Controllers;
use App\User;

trait Profile{

    /**
     * This gets a certain user from the database
     */
    public function getProfile($id)
    {
        // Returns the collection
        return User::findOrFail($id);
    }

    /**
     * This sets the profile to the specified data
     * 
     * @param int $id
     * @param array $data
     */
    public function setProfile($id, $data)
    {
        return User::where('id', $id)->update([
            'gender' => $data["gender"],
        ]);

        
    }


    // Delete function coming soon
    public function deleteProfile($id)
    {
        //
        
    }



}


