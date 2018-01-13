<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function properties(){

        return $this->belongsToMany('App\Property','property_category','category_id','property_id');
    }
}
