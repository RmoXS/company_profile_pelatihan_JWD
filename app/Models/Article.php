<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'image', 'published_at', 'created_at', 'updated_at'];

    // Additional model methods and relationships can be defined here
}
