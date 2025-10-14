<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

//rotas protegidas por autenticacao
Route::get('/', function () {
    return view('master.main'); // página pública opcional
});

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::middleware('auth')->group(function(){
    Route::resource('schools', 'SchoolController');
    Route::post('schoools/{id}/restore', 'SchoolController@restore')->name('school.restore');
});

Route::middleware('auth')->group(function(){
    Route::resource('teachers', 'TeacherController');
    // Route::post('teachers/{id}/restore', 'TeacherController@restore')->name('teacher.restore');
});

Route::middleware('auth')->group(function(){
    Route::resource('courses', 'CourseController');
});