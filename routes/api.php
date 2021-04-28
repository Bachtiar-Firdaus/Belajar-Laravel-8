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

//Basic Routing 1
// Route::get('/users',function(){
//     return 'Hi Users';
// });

//Basic Routing 2
// Route::get('/users/{name}',function($name){
//     return 'Hello ' . $name;
// });

//Basic Routing 3
// Route::get('/users/{name?}',function($name = null){
//     return 'Hello ' . $name;
// });

//Basic Routing 4
// Route::get('/users/{name?}',function($name = null){
//     return 'Hello ' . $name;
// })->where('name','[a-zA-Z]+');

// Route::get('/products/{id?}',function($id = null){
//     return 'Product id is ' . $id;
// })->where('id','[0-9]+');

//Basic Routing 5 aturan patern di pindahkan ke APP/Provider/RouteServicesProvider
Route::get('/users/{name?}',function($name = null){
    return 'Hello ' . $name;
});

Route::get('/products/{id?}',function($id = null){
    return 'Product id is ' . $id;
});

Route::match(['get','post'],'/students',function(Request $req){
    return 'Requested method is '. $req->method();
});

Route::any('/posts',function(Request $req){
    return 'Requested method is '. $req->method();
});