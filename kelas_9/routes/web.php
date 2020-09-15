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

Route::get('/cek', function () {
    return view('/cek');
});

Route::get('/', 'HomeController@index');

Route::get('/department', 'DepartmentController@index');
// input
Route::get('/department/create', 'DepartmentController@create');
Route::post('/department/store', 'DepartmentController@store');
// edit
Route::get('/department/edit/{id}', 'DepartmentController@edit');
Route::put('/department/update', 'DepartmentController@update');
// delete
Route::get('/department/delete/{id}', 'DepartmentController@destroy');

Route::get('/position', 'PositionController@index');
// input
Route::get('/position/create', 'PositionController@create');
Route::post('/position/store', 'PositionController@store');
// edit
Route::get('/position/edit/{id}', 'PositionController@edit');
Route::put('/position/update', 'PositionController@update');
// delete
Route::get('/position/delete/{id}', 'PositionController@destroy');

Route::get('/employee', 'EmployeeController@index');
// input
Route::get('/employee/create', 'EmployeeController@edit');
Route::post('/employee/store', 'EmployeeController@store');
// edit
Route::get('/employee/edit/{id}', 'EmployeeController@edit');
Route::put('/employee/update', 'EmployeeController@update');
// delete
Route::get('/employee/delete', 'EmployeeController@destroy');
// show
Route::get('/employee/show/{id}', 'EmployeeController@show');

Route::get('/inventory', 'InventoryController@index');
// input
Route::get('/inventory/create', 'InventoryController@create');
Route::post('/inventory/store', 'InventoryController@store');
// edit
Route::get('/inventory/edit/{id}', 'InventoryController@edit');
Route::put('/inventory/update', 'InventoryController@update');
// delete
Route::get('/inventory/delete', 'InventoryController@destroy');
// show
Route::get('/inventory/show/{id}', 'InventoryController@show');

Route::get('/archive', 'ArchiveController@index');
// input
Route::get('/archive/create', 'ArchiveController@create');
Route::post('/archive/store', 'ArchiveController@store');
// edit
Route::get('/archive/edit/{id}', 'ArchiveController@edit');
Route::put('/archive/update', 'ArchiveController@update');
// delete
Route::get('/archive/delete', 'ArchiveController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

