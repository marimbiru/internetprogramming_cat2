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

Route::get('/newstudent','StudentController@newstudent');
Route::get('/allstudents','StudentController@show_students');
Route::get('/student/{id}','StudentController@student_fees');
Route::post('/findstudent','StudentController@find_student');
Route::post('/newstudent','StudentController@student_editor');

Route::get('/newfees','FeesController@new_fees');
Route::get('/allfees','FeesController@show_fees');
Route::post('/newfees','FeesController@fees_editor');
