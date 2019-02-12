<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileStatic extends Controller
{
    function index()
    {
        return view('profil/profile');
    }
}
