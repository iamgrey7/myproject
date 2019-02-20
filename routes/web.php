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


// Authentication Route
Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['auth','role:manager']], function () { 
    Route::resource('/admin', 'AdminController');     
});
Route::group(['middleware' => ['auth','role:employee']], function () {     
    Route::resource('/pegawai', 'EmployeeController'); 
});


//Home std
//Route::get('/home', 'HomeController@index');

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
Route::post('/search', 'Articles@search')
->name("articles.search");

//sort Artikel
Route::post('/articles/sort', 'Articles@sort')
->name('articles.sort');

//Manajemen Employee
Route::resource('/employees','EmployeeController');
Route::post('/employees/changeStatus', array('as' => 'changeStatus', 'uses' => 'EmployeeController@changeStatus'));


//this routes for check if email user is exist in database 
Route::get('forgot-password', 'ReminderController@create')
    ->name('reminders.create'); 
Route::post('forgot-password', 'ReminderController@store')
    ->name('reminders.store'); 

//this routes for handle changes password 
Route::get('reset-password/{id}/{token}', 'ReminderController@edit')
    ->name('reminders.edit'); 
Route::post('reset-password/{id}/{token}', 'ReminderController@update')
    ->name('reminders.update');




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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
