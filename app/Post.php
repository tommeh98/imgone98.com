<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Post extends Authenticatable
{
    protected $fillable = [
        'title', 'url_title', 'content', 'user_id', 'tags'
    ];
}
