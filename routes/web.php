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

Route::get('/cookie/set', 'CookieController@setCookie');
Route::get('/cookie/get', 'CookieController@getCookie');
Route::get('/json', function(){
	return response()->json(['name' => 'hello', 'state' => 'no']);
});

Route::get('/test', function(){
	return view('test');
});

Route::get('/test2', function(){
	return view('test2');
});

Route::get('/form', function(){
	return view('form');
});

Route::get('session/get', 'SessionController@access');
Route::get('session/set', 'SessionController@store');
Route::get('session/remove', 'SessionController@delete');

Route::get('/uploadfile/', 'UpLoadFileController@index');
Route::post('/uploadfile/', 'UpLoadFileController@show');

Route::get('ajax',function() {
   return view('message');
});
Route::post('/getmsg','AjaxController@index');