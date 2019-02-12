<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crprofil extends Controller
{
    public function profile() 
    { 
        return view('statics/profile'); 
    }
}
