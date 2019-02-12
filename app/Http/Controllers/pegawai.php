<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\M_pegawai;
use Session;

class pegawai extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::all(); 
        return view('pegawai.index')->with('pegawai', $pegawai);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    { 
        Article::create($request->all()); 
        Session::flash("Sukses", "Data Pegawai berhasil ditambahkan" ); 
        return redirect()->route("pegawai.index");

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    }

    public function show($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.show')->with('pegawai', $pegawai); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit')->with('pegawai', $pegawai);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Pegawai::find($id)->update($request->all()); 
        Session::flash("Sukses", "Data pegawai berhasil diubah"); 
        return redirect()->route("pegawai.show", $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pegawai::destroy($id); 
        Session::flash("Sukses", "Data pegawai telah dihapus"); 
        return redirect()->route("pegawai.index");
    }

    public function profil()
    {
        return ("ini halaman profil saya");
    }

    public function masuk()
    {
        return("anda berhasil login");
    }

    public function cv($nama)
    {
        return("Biodata anda adalah : $nama");
    }

    
}
