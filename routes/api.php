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
Route::get('users/create-data', 'Api\AdminController@allUserCreateData');

Route::post('register', 'Api\AuthController@register');
Route::post('login', 'Api\AuthController@login');
Route::post('email-reset', 'Api\AuthController@emailReset');
Route::post('reset-pass/check-token', 'Api\AuthController@checkTokenResetPass');
Route::post('reset-pass/update-password', 'Api\AuthController@resetUpdatePassword');

// Auth routes
Route::group(['middleware' => 'auth:api'], function () {
    Route::prefix('user')->group(function (){
        Route::post('logout', 'Api\AuthController@logout');
        Route::post('profile-home', 'Api\UserController@profileHome');
        Route::post('profile-data', 'Api\UserController@profileData');
        Route::post('show', 'Api\UserController@show');
        Route::post('update', 'Api\UserController@update');
        Route::post('password/update', 'Api\UserController@updatePassword');
    });

    Route::prefix('waste')->group(function () {
        Route::post('register', 'Api\WasteController@register');
        Route::post('update', 'Api\WasteController@update');
        Route::post('update-data', 'Api\WasteController@updateData');
        Route::post('data-by-id', 'Api\WasteController@dataById');
        Route::post('user/offers-data', 'Api\WasteController@userOffersData');
        Route::post('user/transfers-data', 'Api\WasteController@userTransfersData');
        Route::post('user/requests-data', 'Api\WasteController@userRequestsData');
        Route::post('list/available-data', 'Api\WasteController@availableListData');
        Route::post('list/demand-data', 'Api\WasteController@demandListData');
        Route::post('request-waste', 'Api\WasteController@requestWaste');
        Route::post('show', 'Api\WasteController@show');
        Route::post('delete', 'Api\WasteController@delete');
        Route::post('user/show-transfer-request', 'Api\WasteController@showTransferRequest');
        Route::post('demand/proposal', 'Api\WasteController@proposeDemandWaste');
        Route::post('demand/acquired', 'Api\WasteController@acquiredDemandWaste');
    });

    Route::prefix('transfer')->group(function () {
        Route::post('accept', 'Api\TransferController@acceptTransfer');
        Route::post('decline', 'Api\TransferController@declineTransfer');
        Route::post('cancel', 'Api\TransferController@cancelTransfer');
    });


    // ADMIN
    Route::prefix('admin')->group(function () {
        Route::post('dashboard-data', 'Api\AdminController@dashboardData');
        Route::post('users/list-data', 'Api\AdminController@usersListData');
        Route::post('users/user-data', 'Api\AdminController@userData');
        Route::post('users/update', 'Api\AdminController@updateUser');
        Route::post('users/delete', 'Api\AdminController@deleteUser');
        Route::post('waste/transfers-data', 'Api\AdminController@allTransfersData');
        Route::post('transfer/delete', 'Api\TransferController@deleteTransfer');
        Route::post('profile/update', 'Api\AdminController@updateProfile');
    });
});
