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

Route::get('role/{name}', [
	'middleware' => "Role:editor",
	'uses' => 'TestController@index'
]);

Route::resource('my', 'MyController');

Route::get('/register', function(){
	return view('register');
});

Route::post('/user/register', [
	'uses' => 'UserRegistration@postRegister'
]);