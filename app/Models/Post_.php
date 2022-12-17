<?php

namespace App\Models;



class Post_
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


// Post::create([
//     'title' => "Judul Ke Ketiga",
//     'slug' => "judul-ke-ketiga",
//     'excerpt' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque quasi obcaecati eveniet inventore ipsam temporibus, pariatur vitae ut est numquam, cumque blanditiis quam sed, earum veritatis consectetur sit eius totam perspiciatis hic",
//     'body' => "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque quasi obcaecati eveniet inventore ipsam temporibus, pariatur vitae ut est numquam, cumque blanditiis quam sed, earum veritatis consectetur sit eius totam perspiciatis hic. Rem a quis dolorum sed doloribus impedit magnam dolor recusandae earum consectetur laboriosam quasi minus molestias sapiente laudantium aperiam,</p><p> voluptas eaque vel temporibus incidunt quos illum. Ad nam iusto harum. Est sunt, reprehenderit, esse accusantium tenetur minus facilis quisquam laudantium et, libero dolorum aut fugit tempora tempore? Nobis sed hic, aliquam ipsa ab maxime repellendus reprehenderit molestiae? Rerum, voluptas cupiditate? Ab laborum, dolore facere at laudantium magni et labore</p><p> deserunt quia totam incidunt sint rem quaerat. Quae cumque iste voluptatibus? Ipsa quidem qui quis ducimus nobis sunt distinctio, incidunt, quas sapiente fugiat laboriosam error commodi a aliquam minima. Et exercitationem, reprehenderit iusto repudiandae ad saepe laboriosam quibusdam, veritatis non dolores quidem quam ratione eum? Provident in quo sapiente!</p>"
// ])