<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
//网站首页
Route::get('/', function (Request $request) {
    //return view('welcome');
   // dd($request);
    $input = $request->input();
    
    $get = Input::get('b');
    //print_r($input);
    
    //print_r($_GET);
    
    print_r(Input::get('a'));
    //echo '<pre>';
   // print_r($_SERVER);
        echo ' this is website index...';
});


//Route::get('/articles/{id}', 'ArticlesController@showArticles');

//RESTFul
Route::resource('articles', 'ArticlesController');

//Route::get('test', 'ArticlesController@test');

Route::get('test/{id?}', 'ArticlesController@test');