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

# HOME
Route::get('/', 'ProjectsController@index');

# ABOUT
Route::get('/about', 'PagesController@about');

#PROJECTS RESOURCE
Route::resource('/projects', 'ProjectsController');

# AUTHENTICATION RESOURCE
Auth::routes();

# DASHBOARD
Route::get('/dash', 'DashController@index')->name('dash');

# MAIL
Route::post( '/send', 'MailController@send' );
