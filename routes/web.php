<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'App\Http\Controllers'],function(){
    Route::get('/student','StudentController@index')->name('student.index');
    Route::get('/student/all','StudentController@all')->name('student.all');
    Route::post('/student/store','StudentController@store')->name('student.store');
    Route::get('/student/show/{id}','StudentController@show')->name('student.show');
    Route::get('/student/edit/{id}','StudentController@edit')->name('student.edit');
    Route::get('/student/update/{id}','StudentController@update')->name('student.update');
});
