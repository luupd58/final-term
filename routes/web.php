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
    return view('client.views.test.search');
})->name("client.test.index");
Route::get('/search', "TestController@searchClient")
    ->name("client.test.search");



Route::get('/test', "TestController@index")->name("admin.test.list");
Route::get('/test/add', "TestController@add")->name("admin.test.add");
Route::post('/test/store', "TestController@store")
        ->name("admin.test.store");
Route::get('/test/edit/{id}', "TestController@update")
        ->name("admin.test.update");
Route::get('/test/delete/{id}', "TestController@destroy")
        ->name("admin.test.delete");


Route::get('/class', "ClassController@index")->name("admin.class.list");
Route::get('/class/add', "ClassController@add")->name("admin.class.add");
Route::post('/class/store', "ClassController@store")
        ->name("admin.class.store");
Route::get('/class/edit/{id}', "ClassController@update")
        ->name("admin.class.update");
Route::get('/class/delete/{id}', "ClassController@destroy")
        ->name("admin.class.delete");


Route::get('/student', "StudentController@index")->name("admin.student.list");
Route::get('/student/add', "StudentController@add")->name("admin.student.add");
Route::post('/student/store', "StudentController@store")
        ->name("admin.student.store");
Route::get('/student/edit/{id}', "StudentController@update")
        ->name("admin.student.update");
Route::get('/student/delete/{id}', "StudentController@destroy")
        ->name("admin.student.delete");