<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Course_Rep_Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('course_rep');
    }

    public function index()
    {
        return view('course_rep.index');
    }
}
