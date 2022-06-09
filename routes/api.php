<?php

use Illuminate\Http\Request;

use App\Person;

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

//RESTful
Route::get('tournament', function() {
  return Person::all();
});

Route::post('tournament', 'TournamentController@store');

Route::post('tournament', function(Request $request) {
    return Person::create($request->all());
});

Route::get('tournament', 'TournamentController@index');

Route::delete('tournament/{person}', 'TournamentController@delete');

Route::delete('tournament/{id}', function($id) {
  Person::find($id)->delete();
  return 204;
});
