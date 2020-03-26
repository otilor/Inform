<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterAdminController extends Controller
{
    
    /**
     * Create a new User instance after a valid registration
     * 
     * @param array
     * @return \App\User
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        /**
         * @param string
         * 
         */
        if($request->get('admin_privilege') == 'All Privileges')
        {
            $admin_privilege = 0;
        }
        else
        {
            $admin_privilege = 1;
        }


        //dd($admin_privilege);
        /*
        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'role_id' => 1,
        ]);
        */
        $new_admin_user = new User;
        $new_admin_user->name = $request->get('name');
        $new_admin_user->email = $request->get('email');
        $new_admin_user->password = Hash::make($request->get('password'));
        if ($request->get('admin_privilege') == 'All Privileges')
        {
            $new_admin_user->role_id = 0;
        }
        else
        {
            $new_admin_user->role_id = 1;
        }
        $new_admin_user->save();
        //Returns back to previous route with Success Message
        return back()->with('success', 'Admin Account Created!');
    }
}
