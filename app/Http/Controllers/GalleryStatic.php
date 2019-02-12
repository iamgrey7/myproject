<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryStatic extends Controller
{
    function index()
    {
        return view('profil/gallery');
    }
}
