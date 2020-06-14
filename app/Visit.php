<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }
    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }
    public function Animal()
    {
        return $this->belongsTo('App\Animal');
    }
}
