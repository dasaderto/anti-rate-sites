<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author(){
        return $this->belongsTo('App\User');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
