<?php

Route::middleware('auth:api')->get('/v1/user','Personal\UserController@show');

Route::post('/v1/login','Personal\UserController@login');