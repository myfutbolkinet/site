<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class GGFilter extends Eloquent {

    //protected $connection = 'mongodb';
    protected $connection = 'mongodb';
    protected $collection = 'goods_and_groups_filters';


}