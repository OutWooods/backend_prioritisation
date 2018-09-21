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

Route::post('/job', [
	'uses' => 'JobController@postJob',
	'as' => 'post-job'
]);

Route::get('/jobs', [
	'uses' => 'JobController@getJobs',
	'as' => 'get-jobs'
]);

Route::put('/job/{job}', [
	'uses' => 'JobController@updateJob',
	'as' => 'update-job'
]);

Route::delete('/job/{job}', [
	'uses' => 'JobController@deleteJob',
	'as' => 'delete-job'
]);

Route::get('/job/{job}', [
	'uses' => 'JobController@getJob',
	'as' => 'get-job'
]);
