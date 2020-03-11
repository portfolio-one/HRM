<?php

use Illuminate\Http\Request;



Route::get('/admin/role', 'RoleController@index');
Route::post('/admin/add/role', 'RoleController@store');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
