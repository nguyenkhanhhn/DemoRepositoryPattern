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

use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});
Route::prefix('students')->group(function () {
    Route::get('/', 'StudentController@getAll')->name('student.list');
    Route::get('/create', 'StudentController@create')->name('student.create');
    Route::post('/store', 'StudentController@store')->name('student.store');
    Route::get('/{id}/edit', 'StudentController@edit')->name('student.edit');
    Route::post('/{id}/update', 'StudentController@update')->name('student.update');
    Route::get('/{id}/destroy', 'StudentController@delete')->name('student.delete');
});
