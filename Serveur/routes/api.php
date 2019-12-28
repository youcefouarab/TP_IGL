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

Route::get('notes/{matricule}','noteController@show');
Route::post('ajouter','EtudiantController@store');

Route::get('tester/{test}', function (Request $request) {
    return $request->test.' hello';
});