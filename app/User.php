<?php

namespace App;

use App\Models\ExpertRate;
use App\Models\Post;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fillable = ['name','email','phone','password'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function postAuthor(){
        return $this->hasMany('App\Models\Post');
    }

    public function expertComment(){
        return $this->hasMany('App\Models\ExpertComment');
    }

    public function siteSender(){
        return $this->hasMany('App\Models\Site');
    }

    public function commentAuthor(){
        return $this->hasMany('App\Models\Comment');
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function expertRates(){
        return $this->hasMany(ExpertRate::class);
    }
}
