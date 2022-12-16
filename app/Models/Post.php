<?php

namespace App\Models;



class Post
{
    private static $blog_posts =  [
        [
            "judul" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "M Usman Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse reprehenderit sapiente id tempore dignissimos illum, culpa modi nam aut aperiam quibusdam eum quo molestias"
        ],
        [
            "judul" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Adit",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem excepturi vitae voluptatum nulla doloremque totam eligendi laboriosam, illum a in sed quisquam porro fugit deserunt iste assumenda quasi reiciendis consequuntur, omnis maiores nobis similique."
        ],
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
