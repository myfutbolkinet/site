<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    //
    public function sites(){
        return $this->hasMany('App\Site');
    }
}
