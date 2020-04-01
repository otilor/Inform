<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function __construct()
    {
        $this->middleware('lecturer');
        
    }
    public function index()
    {
        return view('lecturer.index');
    }
}
