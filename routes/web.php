<?php

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

Route::get('/', function () {
    return view('main');
});

Route::get('change_password', 'ActivationController@changePass');
Route::post('change_password', 'ActivationController@changePassAction');
Route::get('change_password/{key}', 'ActivationController@changePass');

Route::get('activate', 'ActivationController@preIndex');
Route::get('activate/{key}', 'ActivationController@showPayWizardForm');
Route::post('activationsuccess', 'ActivationController@success');
Route::get('check_activation/{key}', 'ActivationController@checkActivation');
Route::get('check_login/{email}/{pass}', 'ActivationController@checkLogin');

Route::get('support', 'SupportMessage@index');
Route::post('support/send', 'SupportMessage@send');

Route::post('download', 'UploadCounterController@update');
Route::post('get_pay_button', 'ActivationController@getButton');

Route::get('contacts', function () {
    return view('contacts');
});
Route::get('return', function () {
    return view('return');
});
Route::get('about', function () {
    return view('about');
});
Route::get('license', function () {
    return view('license');
});

Route::get('report/{name}', 'ActivationController@report');