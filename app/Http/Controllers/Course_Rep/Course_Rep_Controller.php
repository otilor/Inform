<?php

namespace App\Http\Controllers\Course_Rep;
use App\Http\Controllers\Controller;
use App\Course_Rep\Student;

use Illuminate\Http\Request;

class Course_Rep_Controller extends Controller
{
    
    /**
     * Returns all the students in the database
     * I wrote this method so as to avoid repeting the same process in other Controllers
     * @return array $all_students;
     */

    public function getAllStudents()
    {
        $all_students = Student::all();
        return $all_students;
    }
    
    

    public function __construct()
    {
        $this->middleware('course_rep');
    }

    public function index()
    {
        $all_students = Student::all(); 
        
        return view('course_rep.index', compact('all_students', $all_students));
    }

}
