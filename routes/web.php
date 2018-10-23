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



Route::prefix('admin')->group(function () {
    Route::get('/', function () {
     	return view('admin.pages.home');
    });
    Route::get('/contact', function(){
    	return view('admin.pages.contact');
    });
    Route::get('/contact/{id}', function(){
    	return view('admin.pages.read_mail');
    });
});