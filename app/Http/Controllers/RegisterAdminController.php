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
        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);
        

        //Returns back to previous route with Success Message
        return back()->with('success', 'Admin Account Created!');
    }
}
