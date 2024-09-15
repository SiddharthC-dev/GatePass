<?php

use App\Http\Controllers\Api\RegisterController;
use Facade\FlareClient\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;

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

Route::group(['middleware' => 'auth:sanctum'], function(){


    Route::resource('/aparatment', 'Api\ApartmentController');
    Route::post('logout','Api\LogoutController@index');
    Route::resource('/userinformation', 'Api\UserInformationController');
    Route::resource('/request', 'Api\VisitingRequestController');
    });

Route::post('rolecreate', 'GatepassController@roleCreate');
Route::get('permission/{name}', 'GatepassController@rolePermission'); // permision route
Route::post('/register', 'Api\RegisterController@registerUser');
Route::resource('/permission', 'Api\PermissionController');
Route::resource('/managepermissions', 'Api\AssPermissionController');
Route::resource('/visitor', 'Api\VisitorController');




Route::post("login",'Api\LoginController@index');
Route::post("gaurdlogin",'Api\GaurdLoginController@index');

Route::post("Glogin",'Api\GaurdController@index');
