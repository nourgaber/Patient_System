<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/personalInformation', 'RegistrationController@getSavePersonalInformationView');
Route::post('/personalInformation', 'RegistrationController@savePersonalInformation');
Route::get('/welcome', 'RegistrationController@createHomeView');


 
Route::get('/register', 'RegistrationController@register');
Route::post('register', 'RegistrationController@store');
 
