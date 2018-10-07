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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/customer/login', 'CustomerController@login');
Route::post('/customer/login', 'CustomerController@processLogin');

Route::get('/customer/register', 'CustomerController@register');
Route::post('/customer/register', 'Customercontroller@processRegister');

Route::get('/about-ss', function (){
    return "Spring Hero Bank.";
});
