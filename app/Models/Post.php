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
}