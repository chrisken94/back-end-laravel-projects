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

Route::get('/note', 'NoteController@index');
// input
Route::get('/note/create', 'NoteController@create');
Route::post('/note/store', 'NoteController@store');
// edit
Route::get('/note/edit/{id}', 'NoteController@edit');
Route::put('/note/update', 'NoteController@update');
// delete
Route::get('/note/delete', 'NoteController@destroy');
