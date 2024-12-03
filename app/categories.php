<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public function articles(){
        return $this->hasMany(articles::class);
    }
}
