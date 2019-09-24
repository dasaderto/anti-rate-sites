<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ExpertRate extends Model
{
    protected $table = 'expert_rating';

    public function site(){
        return $this->belongsTo(Site::class);
    }

    public function expert(){
        return $this->belongsTo(User::class);
    }
}
