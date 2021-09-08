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
   return redirect('/course');
 // return response()->download('download/file.txt');
});

Route::get('page1','App\Http\Controllers\Page1Controller@index');

Route::any('course','App\Http\Controllers\CourseController@index')->name('courseGet');
Route::any('courseInsert','App\Http\Controllers\CourseController@courseInsert')->name('courseInsert');
Route::any('courseUpdate/{id}','App\Http\Controllers\CourseController@courseUpdate')->name('courseUpdate');

Route::post('courseInsertPost','App\Http\Controllers\CourseController@courseInsertPost')->name('courseInsertPost');

Route::post('courseUpdatePost/{id}','App\Http\Controllers\CourseController@courseUpdatePost')->name('courseUpdatePost');



Route::any('courseDelete/{id}','App\Http\Controllers\CourseController@courseDelete')->name('courseDelete');


//Route::get('page', 'Page1Controller@index');








