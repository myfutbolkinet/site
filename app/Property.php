<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //

    public function categories()
    {
        return $this->belongsToMany('App\Category','property_category','property_id','category_id');
    }
}
