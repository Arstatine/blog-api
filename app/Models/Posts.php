<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'post_title',
        'post_description',
        'post_content',
    ];
}
