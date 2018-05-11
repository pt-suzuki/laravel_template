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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/getgenerics',function () {
    $http = new GuzzleHttp\Client;

    $response = $http->get('http://192.168.56.103/api/v1/generics', [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer 774348189050687488-17mr2ABjamtWB1XSoXBQmsBlhevtizH'
            ],
            'query' => [],
    ]);

    return json_decode((string) $response->getBody(), true);
});

Route::get('/callback', 'Auth\OauthLoginController@authCode');

Route::get('/auth/twitter', 'Auth\OAuthLoginController@getAuth');
Route::get('/auth/callback/twitter', 'Auth\OAuthLoginController@authCallback');

Route::get('/auth/google', 'Auth\OAuthLoginController@getAuth');
Route::get('/auth/callback/google', 'Auth\OAuthLoginController@authCallback');