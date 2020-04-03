<?php


namespace App\Extensions;


use Illuminate\Auth\EloquentUserProvider as Eloquent;



class AdminUserProvider extends Eloquent {
    public function retrieveByCredentials(array $credentials){
        $user = parent::retrieveByCredientials($credentials);

        if($user === null || !$user->is_admin){
            return null;
        }

        return $user;
    }
}