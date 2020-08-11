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

Route::get('/', function () {
    return view('welcome');
})->name("Home");

// Route::get('/','TasksController@index')->name('Home');
// Route::get('tasks/create','TasksController@create');
// Route::post('tasks','TaskController@store');

Route::resource('task','TaskController');

Route::get('about',function(){
    return view('about');
})->name('about');

Route::get('user/{id}',function($id){

})->where([]);

Route::fallback(function(){
    return view();
});

