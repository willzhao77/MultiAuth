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

Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\loginController@userLogout')->name('user.logout');


Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\adminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\adminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'adminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});
