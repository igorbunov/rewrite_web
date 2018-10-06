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

Route::get('activate', 'ActivationController@preIndex');
Route::get('activate/{key}', 'ActivationController@showPayButton');
Route::post('activationsuccess', 'ActivationController@success');
Route::get('check_activation/{key}', 'ActivationController@checkActivation');

Route::get('support', 'SupportMessage@index');
Route::post('support/send', 'SupportMessage@send');


Route::get('license', function () {
    return view('license');
});

Route::post('download', 'UploadCounterController@update');