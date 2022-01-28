<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users/{name?}', function($name = null){
	return 'hello '.$name;
});

Route::get('/products/{id?}', function($id = null){
	return "the product id is : ".$id;
});

// Route::get('/users/{name?}', function ($name = null) {
//     return "hello " .$name;
// })->where('name', '[a-zA-Z]+');

// Route::get('/products/{id?}', function($id = null){
// 	return 'product id is -> '. $id;
// })->where('id', '[0-9]+');


//
Route::match(['get','post', 'put'], '/students',function(Request $req){
	return "the method that you use is : ". $req->method();
});


Route::any('/posts',function(Request $req){
	return 'Request method is : '.$req->method();
});