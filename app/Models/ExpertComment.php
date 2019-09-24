<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpertComment extends Model
{
    public function site(){
        return $this->belongsTo('App\Site');
    }

    public function expert(){
        return $this->belongsTo('App\User');
    }
}
