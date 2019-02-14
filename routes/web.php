<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// *** REAL ROUTE *** //

//Home
// Route::get('/home', function() 
// { 
//     return view('profil/home');
// });
Route::get('/home', 'HomeController@index');

//Profile
Route::get('/profile', 'ProfileController@index');

//Gallery
Route::get('/gallery', 'GalleryController@index');

//Contact
Route::get('/contact', 'Contact@index');

//Artikel
Route::resource('/articles', 'Articles');

//Komentar
Route::resource('/comments', 'Comments');

//find Artikel
// Route::get("articles/{article}", 'Articles@find')
// ->name("articles.find");

Route::get("/find", 'Articles@find')
->name("articles.find");



//LATIHAN ROUTE

// Route::get('/', function () {
//     // return view('welcome');
//     return ("Selamat Datang Egry !");
// });

//root route
// Route::get('/', 'pegawai@index');

// Route::get('/profile', 'pegawai@profil');
// Route::post('/masuk', 'pegawai@masuk');
// Route::get('/cv/{nama}', 'pegawai@cv');

//resoure route
// Route::resource('/pegawai','pegawai');

//custom route
// Route::get('/biodata/{nama}', function ($nama) {
//     return ("Anda adalah $nama!");
// });

// only & except
// Route::resource('/hanya','pegawai', ['only'=>['index']]);
// Route::resource('/kecuali', 'pegawai', ['except'=>['destroy', 'update', 'show']]);

// middleware route 
// Route::group(['middleware' => 'auth'], function () { 
//     Route::get('/', function () { 
//         // Uses Auth Middleware 
//     }); Route::get('user/profile', function () { 
//         // Uses Auth Middleware 
//     });
// });

//namespace route
// Route::group(['namespace' => 'Admin'], function() { 
//         Route::resource('/nmsp', 'pegawai'); 
// });

//named routes
// Route::get('user/profile', 'pegawai@profil')
//     ->name('tampilprofil');