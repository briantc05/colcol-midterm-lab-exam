<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment_replies extends Model
{
    use HasFactory;
}

public function users_to_post()
    {
        return $this->hasMany(post::class, 'users');
    }

public function users_to_comment()
    {
        return $this->hasMany(comment::class, 'users');
    }

public function users_posts_to_users()
    {
        return $this->hasMany(post::class, 'users');
    }

public function users_posts_to_past_comments()
    {
        return $this->hasMany(comment_replies::class, 'users');
    }

