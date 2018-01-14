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

    public function property_datas()
    {
        return $this->HasMany('App\Property_data','property_id','id');
    }
}
