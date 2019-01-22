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
    return view('home');
});

Route::group(['prefix' => 'admin'], function(){
	Route::resource('students', 'StudentsController');
	Route::resource('courses', 'CoursesController');
	Route::resource('departments', 'DerpartmentsController');
	Route::resource('courses', 'CoursesController');
	Route::resource('departments', 'DepartmentsController');
});
