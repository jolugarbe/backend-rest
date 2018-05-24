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
Route::get('waste/create-data', 'Api\WasteController@allCreateData');

Route::post('register', 'Api\AuthController@register');
Route::post('login', 'Api\AuthController@login');

// Auth routes
Route::group(['middleware' => 'auth:api'], function () {
    Route::prefix('user')->group(function (){
        Route::post('logout', 'Api\AuthController@logout');
        Route::post('profile', 'Api\UserController@profile');
    });

    Route::prefix('waste')->group(function () {
        Route::post('register', 'Api\WasteController@register');
    });
});
