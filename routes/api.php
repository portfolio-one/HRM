<?php

use Illuminate\Http\Request;



Route::resource('role','RoleController');
Route::resource('department','DepartmentController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
