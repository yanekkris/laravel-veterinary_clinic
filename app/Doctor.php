<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function visit()
    {
        return $this->hasMany('App\Visit');
    }
}
