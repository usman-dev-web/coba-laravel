<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function home(){
        return view('home', [
            "title" => "Home"
        ]);
    }

    public function about(){
        return view('about', [
            "title" => "About",
            "name" => "M Usman Maulana",
            "email" => "um59411@gmail.com",
            "hoby" => "Ngoding",
            "img" => "foto.jpg"
        ]);
    }
    public function index(){
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function singlePost(Post $post){
        return view('post',[
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    public function contact(){
        return view('contact', [
            "title" => "Contact",
            "telp" => "0895392925828",
            "email" => "usman.id",
            "alamat" => "Pandeglang"
        ]);
    }

}
