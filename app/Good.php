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

    private $id;
    private $user;
    private $name;
    private $articul;
    private $price;
    private $type;
    private $qnt;
    private $discount;
    private $model_id;
    private $category;
    private $main_screen;
    private $description;
    private $description2;
    private $color;
    private $_photos;
    private $_seasons;
    private $_sizes;
    private $_fabrics;
    private $seasons;
    private $sizes;
    private $fabric;
    private $decorations;
    private $producttypes;
    private $_decorations;
    private $_producttypes;

    public function __construct(array $attributes = [])
    {


        parent::__construct($attributes);
        if(!empty($attributes)){

        foreach($attributes[0] as $prop=>$val){
            if(property_exists($this, $prop)){
                $this->$prop=$val;
            }

        }
        }

    }


    public function __get($name){
      $attributes=$this->getAttributes();
        if($name=='photos'){
            return self::photos();
        }
        elseif($name=='getSeasons'){
            return self::getSeasons();
        }
        elseif($name=='getSizes'){
            return self::getSizes();
        }
        elseif($name=='getFabrics'){
            return self::getFabrics();
        }
        elseif($name=='getDecorations'){
            return self::getDecorations();
        }
        elseif($name=='getProducttypes'){
            return self::getProducttypes();
        }
        elseif($name=='colors'){
            return self::colors();
        }
        elseif($name=='getModel'){
            return self::getModel();
        }
        elseif($name=='latestPhoto'){
            return self::latestPhoto();
        }
        elseif($name=='firstPhoto'){
            return self::firstPhoto();
        }
        else{
      if(!$this->$name ){
          if(isset($attributes[$name])){
          $this->$name=$attributes[$name];
          return $this->$name;}
      }
        else{
            return $this->$name;
        }}

    }


    public function getUser(){
        return $this->user;
    }

    public function getLastId(){
        return \DB::getPdo()->lastInsertId();;
    }

    public function getFillable(){
        return $this->fillable;
    }

    protected $fillable = [
    'user_id',
    'name',
    'articul',
    'price',
    'type',
    'qnt',
    'discount',
    'model_id',
    'category',
    'description',
    'description2',
        'main_screen','site_id'
    ];

    protected $functions=[
        'photos'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function likes(){

        return $this->belongsTo('App\Like','id_goods');
    }
    public function photos(){

        return $this->_photos=$this->hasMany('App\Photo','id_good');
    }

    public function getSeasons(){
        return $this->_seasons=$this->hasManyThrough('App\Season', 'App\Seasons_good','good_id','id','id','season_id');
    }

    public function getSizes(){
        return $this->_sizes=$this->hasManyThrough('App\Size', 'App\Sizes_good','id_good','id','id','id_size');
    }

    public function getDecorations(){
        return $this->_decorations=$this->hasManyThrough('App\Decoration', 'App\Decorations_good','good_id','id','id','decoration_id');
    }
    public function getProducttypes(){
        return $this->_producttypes=$this->hasManyThrough('App\Producttype', 'App\Producttypes_good','good_id','id','id','producttype_id');
    }

    public function getFabrics(){
        return $this->_sizes=$this->hasManyThrough('App\Fabric', 'App\Fabrics_good','good_id','id','id','fabric_id');
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
    public function getModel(){
        return $this->hasOne('App\ModelsGoods','good_id','id');
    }
}