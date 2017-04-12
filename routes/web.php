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

Auth::routes();

Route::get('/', 'HomeController@index');

// Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
//     Route::get('/', 'AdminController@welcome');
//     Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
// });

// ------------------------------------------------
// Laravel Socialite (Social Authentication)
// https://github.com/laravel/socialite
// ------------------------------------------------
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

