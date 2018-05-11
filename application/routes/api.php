<?php

Route::middleware('auth:api')->get('/v1/generics', 'RecommendSearch\GenericsController@search');
Route::middleware('auth:api')->get('/v1/generics/{id}', 'RecommendSearch\GenericsController@show');

Route::post('/v1/user','Personal\UserController@store');

Route::post('/v1/login','Personal\UserController@login');