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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/',function(){return view('auth.admin-login');})->name('login.as.admin');

//Event Routen - Admin login
Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/registrierungevent', 'EventregistrierungController@formular');

//Event Routen

Route::get('/admin/createEvent', 'VeranstaltungsController@index')->name('createEvent');
Route::post('/admin/createEvent', 'VeranstaltungsController@store')->name('addEvent');
Route::get('/admin/showEvent', 'VeranstaltungsController@showOne');
Route::get('/admin','VeranstaltungsController@display')->name('eventHome');

Route::get('/admin/editEvent/{id}','VeranstaltungsController@edit');
Route::put('/updateEvent/{id}','VeranstaltungsController@update');
Route::get('/admin/deleteEvent/{id}','VeranstaltungsController@delete');


// User Routen
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/userprofil', 'UserController@index')->name('userprofil');
Route::get('/useredit', 'UserController@edit');
Route::post('/useredit', 'ProfilController@add')->name('useredit');

Route::get('/event', 'VeranstaltungsController@displayForUser')->name('showevent');
Route::get('/friends', 'UserController@friends')->name('friends');
Route::get('/matches', 'ProfilController@profil');
