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

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/',function(){return view('auth.admin-login');})->name('login.as.admin');
Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');




// von Lena Frerichs hinzugefügt am 10.03.2020 14:11 Uhr:

Auth::routes();

Route::get('/matches', 'MatchController@index')->name('match');
Route::get('/activitymatch', 'AktivitaetController@index')->name('aktivitaet');
Route::get('/musicmatch', 'MusikgeschmackController@index')->name('musikgeschmack');
Route::get('/profile', 'ProfilController@index')->name('profil');
Route::get('/editprofile', 'ProfilEditController@index')->name('profilEdit');
Route::post('/editprofile', 'ProfilEditController@index')->name('profilEdit');
Route::get('/ausgabe', 'AusgabeController@index')->name('ausgabe');
