<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RootController extends Controller
{
    public function __construct()
    {
        $this->middleware('root');
    }

    public function index()
    {
        return view('root.index');
    }
}
