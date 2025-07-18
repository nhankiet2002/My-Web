<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'category', 'image_url', 'intro', 'content', 'tags', 'published_at'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    // THÊM ĐOẠN NÀY VÀO
    protected $casts = [
        'published_at' => 'datetime',
    ];
}