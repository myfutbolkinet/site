<?php

namespace App\Domain\Good;

use App\Domain\Good\GoodRepositoryInterface;
class EloquentGoodRepository implements GoodRepositoryInterface
{

    public function create(\App\Good $good){

     $good::insert(
     [
        'id'=>null,
        'name' => 'sds',
        'user_id'=>$good->getUser()->getId(),
        'articul' => 'artikul',
        'price' => '12345',
        'type' => 1,
        'qnt' =>2,
        'discount'=> 5,
        'category'=>2,
        'description'=>'editor1',
        'description2'=>''
        ]
        );
    }




}
