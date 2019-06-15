<?php
/**
 * Created by PhpStorm.
 * User: imediasun
 * Date: 16.06.2019
 * Time: 0:02
 */

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
class Good extends Model
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */




    protected $fillable = [
        'facebook_id', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function create(Good $good){

    }


    public function likes(){

        return $this->belongsTo('App\Like','id_goods');
    }
    public function photos(){

        return $this->hasMany('App\Photo','id_good');
    }

    public function colors(){

        return $this->hasMany('App\Colors_of_good','id_good');
    }
    public function videos(){

        return $this->hasMany('App\Video','id_good');
    }
    public function sizes(){

        return $this->hasMany('App\Size','id_good');
    }
}