<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // User::create([
            //     'name' => "M Usman Maulana",
            //     'email' => "usman@gmail.com",
            //     'password' => bcrypt(1234)
            // ]);
            
        User::factory(5)->create();

        Category::create([
            'name' => "Web Programming",
            'slug' => "web-programming"
        ]);

        Category::create([
            'name' => "Web Design",
            'slug' => "web-design"
        ]);

        Category::create([
            'name' => "Personal",
            'slug' => "personal"
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => "Judul Pertama",
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nisi officia, perspiciatis nihil corrupti facere fugiat dolor pariatur reprehenderit assumenda quis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nisi officia, perspiciatis nihil corrupti facere fugiat dolor pariatur reprehenderit assumenda quis hic cumque incidunt perferendis recusandae, ab quae dolorem deserunt maxime architecto non tenetur eveniet! Totam, maxime! Repellat non est cupiditate quia maxime error quas vero consequuntur? Quibusdam nostrum laboriosam, fuga tenetur officia cupiditate quos saepe. Nobis totam accusantium perspiciatis! Exercitationem veniam fugit magni beatae corrupti nulla aliquid sequi illo unde deleniti rem aspernatur voluptatem maiores fugiat quidem dolorum minima labore harum voluptatibus, modi iste vero. Ipsum doloribus quasi minus eum deserunt, facilis totam beatae at inventore mollitia rem quaerat.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => "Judul Kedua",
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nisi officia, perspiciatis nihil corrupti facere fugiat dolor pariatur reprehenderit assumenda quis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nisi officia, perspiciatis nihil corrupti facere fugiat dolor pariatur reprehenderit assumenda quis hic cumque incidunt perferendis recusandae, ab quae dolorem deserunt maxime architecto non tenetur eveniet! Totam, maxime! Repellat non est cupiditate quia maxime error quas vero consequuntur? Quibusdam nostrum laboriosam, fuga tenetur officia cupiditate quos saepe. Nobis totam accusantium perspiciatis! Exercitationem veniam fugit magni beatae corrupti nulla aliquid sequi illo unde deleniti rem aspernatur voluptatem maiores fugiat quidem dolorum minima labore harum voluptatibus, modi iste vero. Ipsum doloribus quasi minus eum deserunt, facilis totam beatae at inventore mollitia rem quaerat.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => "Judul Ketiga",
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nisi officia, perspiciatis nihil corrupti facere fugiat dolor pariatur reprehenderit assumenda quis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nisi officia, perspiciatis nihil corrupti facere fugiat dolor pariatur reprehenderit assumenda quis hic cumque incidunt perferendis recusandae, ab quae dolorem deserunt maxime architecto non tenetur eveniet! Totam, maxime! Repellat non est cupiditate quia maxime error quas vero consequuntur? Quibusdam nostrum laboriosam, fuga tenetur officia cupiditate quos saepe. Nobis totam accusantium perspiciatis! Exercitationem veniam fugit magni beatae corrupti nulla aliquid sequi illo unde deleniti rem aspernatur voluptatem maiores fugiat quidem dolorum minima labore harum voluptatibus, modi iste vero. Ipsum doloribus quasi minus eum deserunt, facilis totam beatae at inventore mollitia rem quaerat.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => "Judul Keempat",
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nisi officia, perspiciatis nihil corrupti facere fugiat dolor pariatur reprehenderit assumenda quis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nisi officia, perspiciatis nihil corrupti facere fugiat dolor pariatur reprehenderit assumenda quis hic cumque incidunt perferendis recusandae, ab quae dolorem deserunt maxime architecto non tenetur eveniet! Totam, maxime! Repellat non est cupiditate quia maxime error quas vero consequuntur? Quibusdam nostrum laboriosam, fuga tenetur officia cupiditate quos saepe. Nobis totam accusantium perspiciatis! Exercitationem veniam fugit magni beatae corrupti nulla aliquid sequi illo unde deleniti rem aspernatur voluptatem maiores fugiat quidem dolorum minima labore harum voluptatibus, modi iste vero. Ipsum doloribus quasi minus eum deserunt, facilis totam beatae at inventore mollitia rem quaerat.',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);


    }
}
