<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Message;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $all_students = Student::all();
        
        return view('add', compact('all_students', $all_students));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone_number' => 'bail|required|numeric|digits:11'
        ]);
        $store_student = new Student;
        $phone_number = $request->phone_number;
        $store_student->phone_number = $phone_number;
        $store_student->save();
        return redirect()->back()->with('success', 'Student phone number has been added');
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
    public function update(Request $request, $id)
    {
        //
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

    public function send(Request $request)
    {
        
        $request->validate([
            'message' => 'required|min:10|max:255'
        ]);
        
        $new_message  = new Message;
        $new_message->message = $request->get('message');
        $new_message->user_id  = Auth::user()->id;
        
        $new_message->save();
        // if ($new_message->save();) {
            # do the next tablecode...
            // if that next table is successful then redirect else whatever      }
        return redirect()->back()->with('success', 'Your message has been sent!');


    }
}
