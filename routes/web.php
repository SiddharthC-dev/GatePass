<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware' => 'auth'], function () {
    //All the routes that belongs to the group goes here
    Route::resource('/', 'HomeController');
    Route::resource('userrequest','VisitingDataController');

    // Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/aparatment', 'ApartmentController')->middleware(['role_or_permission:admin|apartment']);
    Route::resource('/user', 'UserController')->middleware(['role_or_permission:admin|user']);
    Route::resource('/role', 'RoleController')->middleware(['role_or_permission:admin|roles']);
    Route::resource('/permission', 'PermissionController')->middleware(['role_or_permission:admin|permission']);
    Route::resource('/managepermissions', 'AssPermissionController')->middleware(['role_or_permission:admin|managepermission']);
    Route::resource('/gaurd', 'GaurdController')->middleware(['role_or_permission:admin|permission']);;
    Route::resource('/userinformation', 'UserInformationController')->middleware(['role_or_permission:user|userinformation']);
    Route::post('/findinfo','UserInformationController@findInfo');
    Route::resource('/visitor', 'VisitorController');
    // ->middleware(['role_or_permission:admin|permission']);

    Route::get('role/{role}', 'GatepassController@roleCreate');
    Route::get('/assignpermission/{role}/{permission}', 'GatepassController@assignPermission');


});

Auth::routes();
Route::get('register/{id}', function (){
    return view('auth.register');
});



// Address route
// Route::resource('/state','StatesController');
// Route::resource('/district','DistrictController');
// Route::resource('/city','SubDistrictController');
// Route::post('city/getCity','SubDistrictController@getCity');
// Route::post('state/changestatus','StatesController@changeStatus');
// Route::post('district/changestatus','DistrictController@changeStatus');
// Route::post('city/changestatus','SubDistrictController@changeStatus');







