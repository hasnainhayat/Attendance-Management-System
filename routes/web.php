<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

 Route::resource('posts', 'PostController');

			// Admin

Route::get('/admin','AdminController@index');
Route::resource('manageattendance','ManageAttendanceController');
Route::resource('manageleaves','ManageLeavesController');
Route::resource('systemreport','SystemReportController');
Route::post('/report','SystemReportController@report')->name('report');
Route::resource('studentreport','StudentReportController');
Route::post('/singlereport','StudentReportController@report')->name('singlereport');
Route::get('/delete-data/{attendance_id}','ManageAttendanceController@destroy')->name('delete-data');
				// Admin


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

				// User
Route::resource('index','AttendanceController');
Route::resource('myattendance','MyAttendanceController');


Route::resource('myleaves','MyLeavesController');

Route::resource('requestleave','LeaveController');
Route::resource('settings','SettingsController');

