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

//Dashboard Route
Route::group(['namespace' => 'Admin'], function(){
    Route::resource('admin/post', 'PostController');
    Route::resource('admin/category', 'CategoryController');
    Route::resource('admin/user', 'UserController');
    Route::resource('admin/draft', 'DraftController');
    Route::resource('admin/role','RoleController');
    Route::resource('admin/permission','PermissionController');
    /*Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
    Route::get('admin/profile', 'UserController@profile')->name('admin.profile');
    Route::post('admin/profile', 'UserController@updateAdminImage');
    Route::post('admin-login', 'Auth\LoginController@login');
    Route::post('admin/save', 'PostController@updateAuthorImage');*/
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
