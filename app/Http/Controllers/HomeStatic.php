<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeStatic extends Controller
{
    function index()
    {
        return view('profil/home');
    }
}
