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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/newpage', function () {
    return view('backend.pages.newpage');
});

Route::get('/contacts', function () {
    return view('backend.contacts.index');
});


// Administrator & SuperAdministrator Control Panel Routes
Route::group(['middleware' => ['role:admin|superadmin']], function () {
    Route::get('/dashboard', 'BackendController@index')->name('dashboard');
    Route::resource('/users', 'UserController');
});




//home utente
Route::get('/home', 'HomeController@index')->name('home');



//rotte di autenticazione
Auth::routes();

//attivazione account
Route::get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');



//getione rotte con middleware
Route::group(['prefix' => 'admin', 'middleware' => ['role:administrator|superadministrator']], function () { });
