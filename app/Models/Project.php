<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
     use HasFactory;
protected $fillable = [
    'title', 'slug', 'category', 'image_url', 'content', 'role',
    'duration', 'status', 'technologies', 'demo_url', 'source_url'
];

}
