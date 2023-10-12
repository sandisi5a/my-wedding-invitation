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

Route::GET('/login','App\Http\Controllers\AuthController@login')->name('login');


Route::GET('/participant','App\Http\Controllers\InvitationController@participant');
Route::POST('/participant/create','App\Http\Controllers\InvitationController@createParticipant');
Route::POST('/participant/{url}','App\Http\Controllers\InvitationController@editParticipant');


Route::GET('/attendance','App\Http\Controllers\InvitationController@getAttendance');
Route::POST('/attendance/create','App\Http\Controllers\InvitationController@createattendance');


Route::GET('/invitation/{name}/Septy-Sandi','App\Http\Controllers\InvitationController@invitation');
Route::POST('/invitation/create','App\Http\Controllers\InvitationController@createInvitation');
