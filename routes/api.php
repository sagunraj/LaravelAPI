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

//List articles
Route::get('articles', 'ArticleController@index');

//List a single article
Route::get('article/{id}', 'ArticleController@show');

//Create new article
Route::post('article', 'ArticleController@store');

//Update
Route::put('articles', 'ArticleController@store');

//Delete
Route::delete('article/{id}', 'ArticleController@destroy');