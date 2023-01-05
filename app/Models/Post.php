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

    // model search untuk menangkap apa yang diketikan user di from search
    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //     ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn ($query, $author) =>
        $query->whereHas(
            'author',
            fn ($query) =>
            $query->where('username', $author)
        ));
    }

    // membuat relasi ke tabel kategory
    public function category()
    {
        // 1 ke 1
        // satu post hanya boleh punya satu category
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        // satu post hanya boleh punya satu user
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
