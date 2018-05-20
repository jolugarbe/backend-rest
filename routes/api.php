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

// Activities
Route::get('activities/all', 'Api\ActivityController@all');
Route::get('provinces/all', 'Api\ProvinceController@all');
Route::get('localities/all', 'Api\LocalityController@all');

Route::post('register', 'Api\AuthController@register');
Route::post('login', 'Api\AuthController@login');

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('user/profile', 'Api\UserController@profile');
});
