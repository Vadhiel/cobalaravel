<?php

use App\Models\Post;
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
    return View (' home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return View ('about', [
    "title" => "About",   
    "name" => "abrar",
    "email" => "mapudiltok@gmail.com",
    "image" => "denah.png" 
    ]);
});




Route::get('/Posts', function () {
    return view ('posts',[
      "title" => "Posts", 
      "posts" => post::all()


    ]);
});




//halaman singel post
route::get('posts/{slug}', function($slug)  {
    



    return view('post',[
        "title" => "Singel Post",
        "post" => post::find($slug)
    ] );
});









//bawaan
Route::get('/welcome', function () {
    return view ('welcome');
});