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

Route::GET('/invitation/{name}/Septy-Sandi','App\Http\Controllers\InvitationController@invitation');
Route::POST('/invitation/create','App\Http\Controllers\InvitationController@createInvitation');
