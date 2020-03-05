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
    return view('landing');
});
Route::get('/landing', 'HomeController@index');
Route::get('/landing/signUp', 'HomeController@signup');
Route::get('/landing/login', 'HomeController@login');
Route::post('/signUp/registration','HomeController@reg')->name('signUp.registration');
Route::post('/login/doLogin','HomeController@doLogin')->name('login.dologin');
Route::post('/login/logout','HomeController@doLogout')->name('login.logout');
Route::get('/showUser', [ 
'uses' => 'HomeController@showUserProfile',
'as' => 'customer.userProfile'
]);

Route::get('/gardener/landing','ProviderController@index');
Route::post('/gardener/providersignUp','ProviderController@providersignUp')->name('gardener.providersignUp');
Route::post('/gardener/editProvider/{id}','ProviderController@editDetails')->name('gardener.editDetails');
Route::post('/gardener/nursery/{id}','ProviderController@nurseryLanding')->name('gardener.nurseryLanding');
Route::post('/gardener/nursery','ProviderController@nurseryCreate')->name('nursery.registration');
Route::post('/gardener/addPlant','ProviderController@addPlant')->name('gardener.addPlant');

Route::post('/gardener/createPackage','ProviderController@createPkg')->name('gardener.createPackage');
