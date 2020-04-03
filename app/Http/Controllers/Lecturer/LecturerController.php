<?php

namespace App\Http\Controllers\Lecturer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
