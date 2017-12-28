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
})->name('homepage');

/*SIGN IN*/
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/postsignin',[
    'uses' => 'LoginController@signin',
    'as'=>'postsignin'
    ]);

Route::get('/logout',[
    'uses' => 'LoginController@signout',
    'as'=>'logout'
    ]);


/*SIGN UP*/
Route::get('/signup', function () {
    return view('auth.register');
})->name('signup');
Route::post('/postsignup',[
    'uses' => 'RegisterController@store',
    'as'=>'postsignup'
    ]);

/*DASHBOARD*/
Route::get('/dashboard',[
    'uses' => 'DashboardController@index',
    'as'=>'dashboard',
    'middleware' => 'auth'
    ]);

/*MEN*/
Route::get('/men',[
    'uses' => 'MenController@index',
    'as'=>'menpage'
    ]);
Route::post('/postaddmen',[
    'uses'=> 'MenController@store',
    'as' => 'postaddmen'
]);


Route::get('/women',[
    'uses' => 'WomenController@index',
    'as'=>'womenpage'
    ]);