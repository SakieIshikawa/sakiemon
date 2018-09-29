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
    return view('welcome');
});

//Route::group(['prefix' => 'admin'], function() {
//    Route::get('sakiemon/create', 'SakiemonController@add');
//});

Route::group(['prefix' => 'admin'], function() {
    Route::get('recipe/create', 'Admin\RecipeController@add')->middleware('auth');
    Route::post('recipe/create', 'Admin\RecipeController@create')->middleware('auth');
    Route::get('recipe', 'Admin\RecipeController@index')->middleware('auth');
    Route::get('recipe/edit', 'Admin\RecipeController@edit')->middleware('auth');
    Route::post('recipe/edit', 'Admin\RecipeController@update')->middleware('auth');
    Route::get('recipe/delete', 'Admin\RecipeController@delete')->middleware('auth');
});

Auth::routes();

Route::get('/list', function () {
    return view('list');
});

Route::get('recipe/index', 'RecipeController@index');

Route::get('/mypages', function () {
    return view('mypages');
});


Route::get('/mypages', 'HomeController@index')->name('mypages');
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');
