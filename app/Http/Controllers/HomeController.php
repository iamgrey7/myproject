<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {        
        if ($request->user()->hasRole('manager')) {
            return redirect()->route('admin.index');
        }
        elseif ($request->user()->hasRole('employee')) {
            return redirect()->route('employee.index');
        } else {
            //return view('profil.home');
            return("Gagal Login");
        }
        
    }

    /* 
    public function someAdminStuff(Request $request) 
    { $request->user()->authorizeRoles('manager'); 
        return view('some.view'); } 
    */
    
}
