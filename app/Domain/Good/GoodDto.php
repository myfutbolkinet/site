<?php

namespace App\Domain\Good;


class GoodDto
{

    public $user;
    public $name;
    public $articul;
    public $price;
    public $type;
    public $qnt;
    public $discount;
    public $category;
    public $model_id;
    public $description;
    public $description2;
    public $color;


    public static function load($data)
    {
        $obj= new self;
        $obj->name = $data['name'];
        $obj->articul = $data['artikul'];
        $obj->price = $data['price'];
        $obj->type = (isset($data['type'])) ? $data['type'] : 1;
        $obj->qnt = $data['count'];
        $obj->discount = $data['spinner-decimal'];
        $obj->category = $data['id_cat'];
        $obj->model_id = (isset($data['model_id']) && $data['model_id']!=null) ? $data['model_id'] : null;
        $obj->description = $data['editor1'];
        $obj->description2 = 'description2';
        $obj->seasons = $data['season'];
        $obj->sizes = $data['sizes'];
        $obj->fabric = $data['fabric'];
        $obj->decorations = $data['decoration'];
        $obj->producttypes = $data['product_type'];
        //$obj->color = $data['color'];
        //$this->user_id = Auth::user()->id;
        dump('obj',$obj);
        return $obj;
    }

    public static function fromRequest($request)
    {
        dump('request',$request->input());
        return (new self ())->load($request->input());

    }
}