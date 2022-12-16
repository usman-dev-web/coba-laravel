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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "M Usman Maulana",
        "email" => "um59411@gmail.com",
        "hoby" => "Ngoding",
        "img" => "foto.jpg"
    ]);
});


Route::get('/posts', function () {
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug){
    return view('post',[
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});

Route::get('/contact', function(){
    return view('contact', [
        "title" => "Contact",
        "telp" => "0895392925828",
        "email" => "usman.id",
        "alamat" => "Pandeglang"
    ]);
});