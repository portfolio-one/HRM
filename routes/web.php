<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>['auth']],function(){
    Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'Admin','middleware' => ['auth','admin']], function () {
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
//        Route::get('/user', 'UserController@index')->name('user');
    });
    Route::group(['prefix'=>'employee','as'=>'employee.','namespace'=>'Employee','middleware' => ['auth','employee']], function () {
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    });
});
