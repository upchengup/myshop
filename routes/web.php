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
    //$data=['$name'='up','$say'='加油'];
    $data = ['name' => 'up', 'say' => '嗨！'];

    return view('welcome', $data);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', 'welcome')->name('home');
