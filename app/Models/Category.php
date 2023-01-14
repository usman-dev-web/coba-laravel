<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    use Sluggable;


    // mencegah error mesassigment
    protected $guarded = ['id'];

    public function posts()
    {
        // satu category bisa punya banyak post
        return $this->hasMany(Post::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'category_name'
            ]
        ];
    }
}
