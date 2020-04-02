<?php

namespace App\Http\Controllers\Course_Rep\Profile;

use App\Http\Controllers\Course_Rep\Course_Rep_Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Course_Rep_Controller
{
    /**
     * Display course_rep profile
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "Your profile goes here!";
        
        $profile = $this->getProfile();
        
        return view('course_rep.profile.index', compact('profile', $profile));
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
        $data = $request->all();
        User::where('id',Auth::id())->update([
            'gender' => $data['gender'],
        ]);

        return back()->with('success', 'Updated successfully');

        DB::update('update users set votes = 100 where name = ?', ['John']);
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
