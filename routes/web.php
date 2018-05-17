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



//to view
Route::get('about/index', 'AboutController@index');

//Route::get('articles/', 'ArticleController@index');


//you need a post method to delete

//Route::post('task/delete/{id}', 'AboutController@delete');

//to insert

//Route::get('task/edit', 'AboutController@edit');

//to actually insert

//Route::post('task/edit','AboutController@insert');



//resourceful controller is great for basic CRUD operation

Route::resource('tasks', 'TaskController');