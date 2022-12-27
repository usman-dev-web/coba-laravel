<?php

namespace App\Http\Controllers;

use App\Models\Post;
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

        // dd(request('search'));

        // menangkap apa yang diketikan user di form search
        return view('posts', [
            "title" => "All Posts",
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search']))->get()
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
