<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // mencegah error mesassigment
    protected $guarded = ['id'];

    public function posts(){
        // satu category bisa punya banyak post
        return $this->hasMany(Post::class);
    }
}