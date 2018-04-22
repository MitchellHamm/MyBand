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

Route::get('/', [
    'as'     => 'welcome.index',
    'uses'   => 'WelcomeController@GETWelcome'
]);

Route::get('login', [
    'as'     => 'login.get',
    'uses'   => 'LoginController@GETLogin'
]);

Route::post('login', [
    'as'     => 'login.post',
    'uses'   => 'LoginController@POSTLogin'
]);

Route::get('register', [
    'as'     => 'register.get',
    'uses'   => 'RegisterController@GETRegister'
]);

Route::post('register', [
    'as'     => 'register.post',
    'uses'   => 'RegisterController@POSTRegister'
]);

Route::get('logout', [
    'as'     => 'logout.get',
    'uses'   => 'LogoutController@GETLogout'
]);
