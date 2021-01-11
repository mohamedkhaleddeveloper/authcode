<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', 'HomeController@Dashboard')->name('Dashboard');
Route::get('/lang', 'HomeController@lang')->name('lang');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Products', 'HomeController@Products')->name('Products');
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group( function(){
    // lang 
    Route::get('/lang', 'AdminController@lang')->name('admin.lang');
    //Dashboard 
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    // login Routes 
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    
    // Logout Route
    Route::post('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    
    // register routes
    
    Route::get('register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
    
    // Password reset routes
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');
    
});

// clients in cpanel 
Route::resource('clients','ClientController');
Route::get('clients/codes/{client}','ClientController@codes')->name('clients.codes');

// product in cpanel 
Route::resource('products','ProductsController');

// codes in cpanel 
Route::resource('codes','CodeController');
Route::get('codes/create/{client}','CodeController@createcode')->name('code.create');

