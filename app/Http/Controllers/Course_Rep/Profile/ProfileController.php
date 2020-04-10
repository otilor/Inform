<?php

namespace App\Http\Controllers\Course_Rep\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileInterface;
use App\Http\UserInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Profile;
use App\User;
use App\Http\UserTrait;

class ProfileController  implements ProfileInterface, UserInterface
{
    use Profile;
    use UserTrait;
    /**
     * Display course_rep profile
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "Your profile goes here!";
        $id = $this->getUserId();
        $profile = $this->getProfile($id);
        
        return view('course_rep.profile.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $this->getUserId();

        $data = $request->all();

        $update_profile = $this->setProfile($id, $data);
        
        if (! is_null($update_profile)) {
            return back()->with('success', 'Updated successfully');

        }

        // If it is null
        return response("Failed!");

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
