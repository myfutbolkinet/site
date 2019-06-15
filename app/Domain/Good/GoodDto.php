<?php
namespace App\Domain\Good;

use Auth;
class GoodDto
{



    public function load($data){
        $this->name = $data['name'];
        $this->articul = $data['artikul'];
        $this->price = $data['price'];
        $this->type = $data['type'];
        $this->qnt =$data['count'];
        $this->discount= $data['discount'];
        $this->category=$data['id_cat'];
        $this->description=$data['editor1'];
        $this->description2='';
        $this->user_id=Auth::user()->id;
    }

    public static function fromRequest($request){

        return (new self ())->load($request->post());

    }
}