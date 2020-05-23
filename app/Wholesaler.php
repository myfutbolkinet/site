<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wholesaler extends Model
{
    protected $fillable = [
        'ext_id',
        'name',
        'sername',
        'phone',
        'city',
        'group',
        'active',
        'manager'
    ];
}
