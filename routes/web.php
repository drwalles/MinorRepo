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
    return view('home');
})->name('home');

Route::resource('/problem','ProblemController');
Route::resource('/contest','ContestController');
Route::resource('/editor','EditorController');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact/submit', 'ContactController@store');
Route::get('/submission', 'SubmissionController@index');



//=========================About Routes==========================
Route::get('/about', 'AboutsController@index')->name('about');
Route::get('/about/aminul', 'AboutsController@ami')->name('about.ami');
Route::get('/about/araf', 'AboutsController@jami')->name('about.jami');
Route::get('/about/ashraf', 'AboutsController@ash')->name('about.ash');
Route::get('/about/tahsin', 'AboutsController@tas')->name('about.tas');
//=========================About Route=============================


//=============================Reset Password======================================

//Route::get('password/reset/{token?}', 'PasswordController@showResetForm');
//Route::post('/password/email', 'PasswordController@sendResetLinkEmail');
//Route::post('/password/reset', 'PasswordController@reset');
//=============================Reset Password======================================


Route::group(['middleware' => 'auth'], function () {

// Route::group(['middleware' => ['user']], function () {	
Route::resource('/blog','BlogController');

//=======================Submission Route===============

    Route::post('submit', 'SubmissionController@submit');
//=======================Submission Route===============

//==========================Settings Route=======================================

Route::get('/setting/{id}', 'SettingController@index');
//==========================Settings Route=======================================
//==========================Password Change==============================================
Route::get('/change-password','PasswordController@index')->name('password.change');
Route::post('/update-password','PasswordController@password_update')->name('password.update');
//==========================Password Change==============================================


//===================Admin Route Group=========================
Route::group(['middleware' => ['admin']], function () {

    Route::get('/admin','AdminController@index');

    Route::resource('/admin/blog','Admin\BlogController');
    Route::resource('/admin/contest','Admin\ContestController');


    //============== Admin Problem Routes=======================
    Route::resource('/admin/problem','Admin\ProblemController');
    Route::get('/admin/problem/del/{id}','Admin\ProblemController@destroy');
    Route::get('/admin/problem/create','Admin\ProblemController@create');
    Route::post('/admin/problem/store','Admin\ProblemController@store');
    //============== Admin Problem Routes=======================

//    =======================Setting===========================
    Route::resource('/admin/setting','Admin\SettingController');
    //==========================Password Change==============================================
    Route::get('/admin/change-password','PasswordController@adminindex')->name('admin.password.change');
    Route::post('/admin/update-password','PasswordController@password_update')->name('password.update');
    //==========================Password Change==============================================
//    =======================Setting===========================
//
//
    Route::resource('/admin/tag','Admin\TagController');

    Route::resource('/admin/contacts', 'Admin\ContactsController');
    Route::get('/admin/contacts/del/{id}', 'Admin\ContactsController@destroy');


    //==========================User Controlling Route================
    Route::resource('/admin/user','Admin\UserController');
    Route::get('/admin/user/del/{id}','Admin\UserController@destroy');
    Route::get('/admin/user/{id}/makeAdmin','Admin\UserController@makeAdmin');
    Route::get('/admin/user/create', 'Admin\UserController@create');
    Route::post('/admin/user/store', 'Admin\UserController@store');
    //==========================User Controlling Route================

	});

});
Auth::routes();
//Auth::routes(['verify' => true]);



//Route::get('admin/problem','Admin.ProblemController@index');
