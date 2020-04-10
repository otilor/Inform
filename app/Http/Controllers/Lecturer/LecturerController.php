<?php

namespace App\Http\Controllers\Lecturer;
use Illuminate\Foundation\Inspiring;
use App\Http\Controllers\Controller;
use App\Http\UserInterface;
use App\Http\Controllers\ProfileInterface;
use App\Http\UserTrait;
use App\Http\Controllers\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

class LecturerController  extends Controller implements  ProfileInterface,UserInterface
{
    use UserTrait;
    use Profile;
    public function __construct()
    {
        $this->middleware('lecturer');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quote = $this->getQuote();
        return view('lecturer.index', compact('quote'));
        
        
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
    public function show()
    {
        $user_id = Auth::id();
        $profile = $this->getProfile($user_id);
        return view('lecturer.profile', compact('profile'));
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
        $id = Auth::id();
        $data = $request->all();
        $update_profile = $this->setProfile($id, $request);
        return back()->with('success', 'Updated successfully!');
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
