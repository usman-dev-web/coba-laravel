<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // field yang boleh diisi, sisanya tidak boleh
    // protected $fillable = ['title', 'excerpt', 'body'];

    // field yang tidak boleh diisi, sisinya boleh
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];
    // membuat relasi ke tabel kategory
    public function category(){
        // 1 ke 1
        // satu post hanya boleh punya satu category
        return $this->belongsTo(Category::class);
    }

    public function author(){
        // satu post hanya boleh punya satu user
        return $this->belongsTo(User::class, 'user_id');
    }
}