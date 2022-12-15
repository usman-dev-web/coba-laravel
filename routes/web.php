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
        "img" => "foto.jpg"
    ]);
});


Route::get('/blog', function () {

    $blog_posts = [
        [
            "judul" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "M Usman Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse reprehenderit sapiente id tempore dignissimos illum, culpa modi nam aut aperiam quibusdam eum quo molestias ea alias iste explicabo commodi enim quae, unde facilis. Dolore quisquam, tenetur dignissimos, facilis quasi quod dolorum aperiam eaque quidem exercitationem voluptatum magni cumque! Totam eius incidunt esse dolorem tempora beatae, exercitationem error quidem ducimus magni fugiat harum perferendis veniam fugit minus consequuntur corrupti architecto sint enim! Deleniti quos maxime illum molestias ad corporis, nemo assumenda?"
        ],
        [
            "judul" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Adit",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem excepturi vitae voluptatum nulla doloremque totam eligendi laboriosam, illum a in sed quisquam porro fugit deserunt iste assumenda quasi reiciendis consequuntur, omnis maiores nobis similique. Consectetur placeat voluptates neque earum quis ex quia. Consequuntur natus nihil optio, ut explicabo suscipit tempora nostrum cum qui soluta vero, vitae sapiente quos repudiandae. Sequi est minus fugit porro voluptatem error ipsam ipsum neque dolorum, eos quasi, non nihil suscipit cupiditate itaque ratione consequuntur odio asperiores! Officiis minima, vel, incidunt sunt voluptates, at quas ipsam corporis modi sint rem. Fugiat mollitia libero voluptas at perspiciatis?"
        ],
    
    ];
    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug){

    $blog_posts = [
        [
            "judul" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "M Usman Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse reprehenderit sapiente id tempore dignissimos illum, culpa modi nam aut aperiam quibusdam eum quo molestias ea alias iste explicabo commodi enim quae, unde facilis. Dolore quisquam, tenetur dignissimos, facilis quasi quod dolorum aperiam eaque quidem exercitationem voluptatum magni cumque! Totam eius incidunt esse dolorem tempora beatae, exercitationem error quidem ducimus magni fugiat harum perferendis veniam fugit minus consequuntur corrupti architecto sint enim! Deleniti quos maxime illum molestias ad corporis, nemo assumenda?"
        ],
        [
            "judul" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Adit",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem excepturi vitae voluptatum nulla doloremque totam eligendi laboriosam, illum a in sed quisquam porro fugit deserunt iste assumenda quasi reiciendis consequuntur, omnis maiores nobis similique. Consectetur placeat voluptates neque earum quis ex quia. Consequuntur natus nihil optio, ut explicabo suscipit tempora nostrum cum qui soluta vero, vitae sapiente quos repudiandae. Sequi est minus fugit porro voluptatem error ipsam ipsum neque dolorum, eos quasi, non nihil suscipit cupiditate itaque ratione consequuntur odio asperiores! Officiis minima, vel, incidunt sunt voluptates, at quas ipsam corporis modi sint rem. Fugiat mollitia libero voluptas at perspiciatis?"
        ],
    
    ];

    $new_post = [];

    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});