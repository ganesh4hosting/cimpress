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
    return view('index', array('isvalid' => true));
});


Route::post('/checklogin', 'BlogController@checklogin');
Route::post('/createblog', 'BlogController@createblog');
Route::get('/showallblogs',  'BlogController@showallblogs' );

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});


