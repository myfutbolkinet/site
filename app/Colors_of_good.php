<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colors_of_good extends Model
{
    public function goods(){

        return $this->belongsTo('App\Good','id');
    }
}
