<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public function sender(){
        return $this->belongsTo('App\User');
    }

    public function experts(){
        return $this->hasMany('App\ExpertComment');
    }

    public function expertRate(){
        return $this->hasMany(ExpertRate::class);
    }
}
