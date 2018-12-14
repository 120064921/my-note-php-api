<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/user/login', 'UserController@login');
Route::get('/user/logout', 'UserController@logout');

Route::get('/note/getAll', 'NoteController@getAll');
Route::get('/note/getOne', 'NoteController@getOne');
Route::post('/note/create', 'NoteController@create');