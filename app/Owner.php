<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function animal()
    {
        return $this->hasMany('App\Animals');
    }
}
