<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function subjects()
    {
    return view('subjects');
    }

    public function teachers()
    {
    return view('teachers');
    }
    
}
