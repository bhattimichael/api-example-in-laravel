<?php

use Illuminate\Http\Request;
use App\Airports;
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

Route::get('airports', 'AirportsController@index');
Route::get('airports/{id}', 'AirportsController@singleAirport');
Route::get('flights/{fromAirportId}/{ToAirportId}', 'TripsController@index');
Route::post('addflight', 'TripsController@store');
Route::get('deleteflight/{id}', 'TripsController@delete');
