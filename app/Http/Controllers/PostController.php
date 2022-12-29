<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function home(){
        return view('home', [
            "title" => "Home",
            "active" => "home"
        ]);
    }

    public function about(){
        return view('about', [
            "title" => "About",
            "active" => "about",
            "name" => "M Usman Maulana",
            "email" => "um59411@gmail.com",
            "hoby" => "Ngoding",
            "img" => "foto.jpg"
        ]);
    }
    public function index(){
        // untuk mendapatkan title berdasarkan category
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        // untuk mendapatkan title berdasarkan author
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        // menangkap apa yang diketikan user di form search
        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function singlePost(Post $post){
        return view('post',[
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }

    public function contact(){
        return view('contact', [
            "title" => "Contact",
            'active' => "contact",
            "telp" => "0895392925828",
            "email" => "usman.id",
            "alamat" => "Pandeglang"
        ]);
    }

}
