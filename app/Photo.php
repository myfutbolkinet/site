<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Photo extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'photo', 'id_good'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function goods(){

        return $this->belongsTo('App\Good','id');
    }
}
