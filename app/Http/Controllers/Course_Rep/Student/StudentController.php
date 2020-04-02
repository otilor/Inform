<?php

namespace App\Http\Controllers\Course_Rep\Student;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Course_Rep\Course_Rep_Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Course_Rep\Student;
use Illuminate\Support\Facades\Auth;

class StudentController extends Course_Rep_Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('course_rep.student.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // This shows the form for adding students
        $all_students = $this->get_all_students();
        // dd($all_students);
        return view('course_rep.student.add', compact('all_students', $all_students));
    }

    /**
     * Store student phone number in database
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Course_Rep\Student
     * @param \Illuminate\Support\Facades\Auth
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|digits:10',
        ]);

        $data = $request->only('phone_number');
        
        // Creates a new student in the database using the Authenticated user id
        Student::create([
            'phone_number' => '+234'.$data['phone_number'],
            'added_by' => Auth::id(),
        ]);
    
        // Goes back to route with a success message
        return back()->with('success', 'Student [0'.$data['phone_number'].'] added successfully!');
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
}
