<?php

use App\Http\Controllers\PostController;
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
Route::get('/', [PostController::class, 'home']);

Route::get('/about', [PostController::class, 'about']);


Route::get('/posts',[PostController::class, 'index']);

// halaman single post
Route::get('posts/{slug}', [PostController::class, 'singlePost']);

Route::get('/contact', [PostController::class, 'contact']);