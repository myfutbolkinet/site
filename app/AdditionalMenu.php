<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdditionalMenu extends Model
{
    //
    protected $table = 'additional_menu';

    protected $fillable = [
        'nestable_id', 'text', 'is_photo', 'photo','link'
    ];
}
