<?php

use Illuminate\Http\Request;



Route::resource('role','RoleController');
//Route::post('/admin/add/role', 'RoleController@store');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
