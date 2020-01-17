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

Route::get('/', 'StudentManagement@allStudentData');
Route::get('add-new-student', 'StudentManagement@addNewStudent');
Route::get('view-single-student/{id}', 'StudentManagement@viewStudentProfile');
Route::get('edit-single-student/{id}', 'StudentManagement@editSingleStudent');
Route::get('del-single-student/{id}', 'StudentManagement@delSingleStudent');





Route::post('add-new-student-info', 'StudentManagement@valueReceiveToDb');
Route::post('update-student-info/{id}', 'StudentManagement@valueUpdateToDb');