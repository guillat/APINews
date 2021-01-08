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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$name=request('name');
Route::get('noticies', 'App\Http\Controllers\NewsController@index');
Route::get('noticies/{page}', 'App\Http\Controllers\NewsController@getPage');
Route::get('noticia/{id}', 'App\Http\Controllers\NewsController@newsDetail');
Route::get('categoria/{id}/{page}', 'App\Http\Controllers\NewsController@getCategory');
Route::get('autor/{id}/{page}', 'App\Http\Controllers\NewsController@getAuthor');