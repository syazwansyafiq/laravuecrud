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

// Route::resource('items', 'ItemController');

Route::prefix('api')->group(function() {
    Route::resource('tasks', 'TaskController');
});

// Route::get('tasks/remove/{id}', ['as' => 'task.delete', 'uses' => 'TaskController@destroy']);