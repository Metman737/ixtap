<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::get('lessons', 'API\LessonController@index');
Route::get('lessons/{lesson}', 'API\LessonController@show');

Route::group(['middleware' => 'auth:api'], function(){

    //User
    Route::post('user/details', 'API\UserController@details');

    //Lesson
    Route::post('lessons', 'API\LessonController@store');
    Route::put('lessons/{lesson}', 'API\LessonController@update');
    Route::delete('lessons/{lesson}', 'API\LessonController@delete');
});
