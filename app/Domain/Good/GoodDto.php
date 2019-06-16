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
    public $description;
    public $description2;
    public $color;


    public static function load($data)
    {
        $obj= new self;
        $obj->name = $data['name'];
        $obj->articul = $data['artikul'];
        $obj->price = $data['price'];
        $obj->type = (isset($data['type'])) ? $data['type'] : null;
        $obj->qnt = $data['count'];
        $obj->discount = $data['spinner-decimal'];
        $obj->category = $data['id_cat'];
        $obj->description = $data['editor1'];
        $obj->description2 = '';
        $obj->color = $data['color'];
        //$this->user_id = Auth::user()->id;
        return $obj;
    }

    public static function fromRequest($request)
    {
        return (new self ())->load($request->input());

    }
}