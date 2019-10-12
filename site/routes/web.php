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

Route::middleware('auth')->group(function () {

    // view
    Route::view('/password', 'profile.password')->name('password');
    // api
    Route::group(['prefix' => 'api/profile'], function() {
        Route::put('/updateAuthUserPassword',
            'ProfileController@updateAuthUserPassword');
    });

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');

Route::get('/party', 'PartyController@index')->middleware('verified')->name('party');

Route::get('/characters', 'CharacterController@index')->middleware('verified')->name('character');

Route::get('/character', 'CharacterController@create')->middleware('verified')->name('characterCreate');

Route::get('/character/{id}', 'CharacterController@edit')->middleware('verified')->name('characterEdit');

Route::post('/character/{id}', 'CharacterController@save')->middleware('verified')->name('characterSave');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
