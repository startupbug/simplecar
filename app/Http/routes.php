<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Home Page Route */

Route::get('/', 'HomeController@index')->name('home');


/* Dashboard Routes */

//Dashboard Home Page
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

//Dashboard Add Brand and Type view
Route::get('/dashboard/add-brand-type', 'DashboardController@add_brand_type')->name('add_brand_type');

//Dashboard Edit Model
Route::get('/dashboard/edit-model/{id}', 'DashboardController@edit_model_view')->name('edit_model_view');

//Dashboard Edit Model
Route::post('/dashboard/edit_model_submit', 'DashboardController@edit_model_submit')->name('edit_model_submit');

//Dashboard Add Brand
Route::post('/dashboard/add-brand', 'DashboardController@add_brand')->name('brand_post');

//Dashboard Add Model Car
Route::post('/dashboard/add-model', 'DashboardController@model_submit')->name('model_submit');

/* Request Page Dashboard */
Route::get('/dashboard/requests', 'DashboardController@requests')->name('requests');

/*Get Request table Data DataTable */
Route::get('/dashboard/get-requests', 'DashboardController@add_reqs_dt')->name('add_reqs_dt');

/* Delete Model */
Route::post('/dashboard/delete-model', 'DashboardController@del_model')->name('del_mdoel');

/* All Models Display */
Route::get('/dashboard/get-models', 'DashboardController@models_dt')->name('models_dt');

/* Users Dashboard Index */
Route::get('/dashboard/users', 'DashboardController@user_mgnt_index')->name('user_mgnt_index');

/* Users Datatable */
Route::get('/dashboard/get-users', 'DashboardController@users_dt')->name('users_dt');

/* Models Datatable */
Route::get('/dashboard/get-models', 'DashboardController@models_dt')->name('models_dt');


/* Dashboard Request responses */
Route::get('/dashboard/request-responses/{requestid}', 'DashboardController@request_responses')->name('request_responses');

/* Authentication Routes */

//Login View
//Route::get('/login',  'AuthenticationController@login_index')->name('login_view');

//Login Post
Route::post('/login',  'AuthenticationController@login_post')->name('login_post');

//Signup view
Route::get('/register',  'AuthenticationController@register_index')->name('register_index'); 

//Signup Post
Route::post('/register',  'AuthenticationController@register_post')->name('signup_post');

//Logout Route
Route::get('/logout',  'AuthenticationController@logout_user')->name('logout_user');

/* Get Model Car Dropdown Ajax Request */

Route::post('/getmodelcar', 'CarController@modelcar_dropdown')->name('modelcar_dropdown');

/* Send Request of Specified Car Model */
Route::post('/sendrequest', 'CarController@send_model_request')->name('send_model_request');

/*Submit Request by Users for Seller to See */
Route::post('/submit_req', 'CarController@submit_req')->name('submit_req');

/* Seller Request Page */
Route::get('/sel_reqs',  'CarController@sel_reqs')->name('sel_reqs');

/* Seller request page of Model Single Contact Page */
Route::get('/deal-model/{id}',  'CarController@deal_model')->name('deal_model');

/* Submitting Sellers Response on user requests Models */
Route::post('/submit_sell_res',  'CarController@submit_sell_res')->name('submit_sell_res');

/* Profile Controller */
Route::get('/profile',  'ProfileController@index')->name('profile');