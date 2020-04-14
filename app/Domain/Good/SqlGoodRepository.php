<?php

namespace App\Domain\Good;

use App\Domain\Good\GoodRepositoryInterface;
use App\ModelsGoods;
use Intervention\Image\ImageManagerStatic as Image;
use \DB;
use Illuminate\Http\Request;

class SqlGoodRepository implements GoodRepositoryInterface
{


    public function create(\App\Good $good)
    {


        //dd('resarray',$res_array);

        try {
            //dump('G',$good);
            foreach ($good->getFillable() as $field) {
                //dump($field);
                if ($field !== 'user_id') {
                    $res_array[$field] = $good->$field;
                } else {
                    $res_array['user_id'] = $good->getUser()->getId();
                }
                $res_array['site_id'] = 1;

            }
            //dump('$res_array',$res_array);
            $last_good=DB::table('goods')->latest('id')->first();
            dump('good',$good);
            $result = DB::transaction(function () use ($good, $res_array,$last_good) {

                if($res_array['model_id']==null){
                    $model=new \App\Models();
                    $model->save();
                    dump('model=>',$model);
                    $res_array['model_id']=$model->id;
                }




                DB::table('goods')->insert($res_array);
                //dump(session()->all());
                $good_id = DB::getPdo()->lastInsertId();


                //$good_id=$last_good->id+1;
                //dd('last_good_id==>',$good_id);

                foreach($good->seasons as $val){
                    $seasons_array=[
                        'good_id'=>$good_id,
                        'season_id'=>$val
                    ];
                    DB::table('seasons_goods')->insert($seasons_array);
                }

                foreach($good->sizes as $val){
                    $sizes_array=[
                        'id_good'=>$good_id,
                        'id_size'=>$val
                    ];
                    DB::table('sizes_goods')->insert($sizes_array);
                }
                foreach($good->fabric as $val){
                    $fabric_array=[
                        'good_id'=>$good_id,
                        'fabric_id'=>$val
                    ];
                    DB::table('fabrics_goods')->insert($fabric_array);
                }

                foreach($good->decorations as $val){
                    $fabric_array=[
                        'good_id'=>$good_id,
                        'decoration_id'=>$val
                    ];
                    DB::table('decorations_goods')->insert($fabric_array);
                }
                foreach($good->producttypes as $val){
                    $fabric_array=[
                        'good_id'=>$good_id,
                        'producttype_id'=>$val
                    ];
                    DB::table('producttypes_goods')->insert($fabric_array);
                }
                $models_goods= new \App\ModelsGoods();
                $models_goods->model_id=$res_array['model_id'];
                $models_goods->good_id=$good_id;
                dump('models_goods',$models_goods);
                $models_goods->save();

                if(null!=session('images')){
                foreach (session('images') as $file) {
                    DB::table('photos')->insert(
                        [
                            'id_good' => $good_id,
                            'photo' => $file

                        ]

                    );

                }}

                dump('session(\'color\')',session('color'));
                if(null!=session('color')){
                    foreach (session('color') as $value) {
                        if (!empty($value)) {
                            DB::table('colors_of_goods')->insert(
                                [
                                    'id_good' => $good_id,
                                    'color' => $value
                                ]
                            );
                        }
                    }
                 }



                return $good_id;
            });
            session()->forget('images');
            session()->forget('color');
            //dd($result);
            return $result;

        }catch (\Exception $e) {
            dd($e);
            return $e;
        }

    }


    public function editAction(Request $request,$user_id, \App\Good $good, $goodId)
    {


        //dd('resarray',$res_array);

        try {
            //dump('G',$good);
            foreach ($good->getFillable() as $field) {
                //dump($field);
                if ($field !== 'user_id') {
                    $res_array[$field] = $good->$field;
                } else {
                    $res_array['user_id'] = $good->getUser()->getId();
                }

            }

            dump($goodId);
            $result = DB::transaction(function () use ($good, $res_array,$goodId,$request) {
/*
                $goodArray=array_merge($res_array, $request->input());
                unset($goodArray['good_id']);
                unset($goodArray['artikul']);
                unset($goodArray['spinner-decimal']);
                unset($goodArray['id_cat']);
                dump('$good_array',$goodArray);*/
                DB::table('goods')->where('id',$goodId)->update($res_array);
                if(null!=session('images')){
                foreach (session('images') as $file) {
                    DB::table('photos')->insert(
                        [
                            'id_good' => $goodId,
                            'photo' => $file
                        ]
                    );
                }}

                DB::table('seasons_goods')->where('good_id',$goodId)->delete();
                dump('why=>',$good);
                foreach($good->seasons as $val){
                    $seasons_array=[
                        'good_id'=>$goodId,
                        'season_id'=>$val
                    ];
                    DB::table('seasons_goods')->insert($seasons_array);
                }
                DB::table('fabrics_goods')->where('good_id',$goodId)->delete();
                foreach($good->fabric as $val){
                    $fabric_array=[
                        'good_id'=>$goodId,
                        'fabric_id'=>$val
                    ];
                    DB::table('fabrics_goods')->insert($fabric_array);
                }
                DB::table('sizes_goods')->where('id_good',$goodId)->delete();
                foreach($good->sizes as $val){
                    $sizes_array=[
                        'id_good'=>$goodId,
                        'id_size'=>$val
                    ];
                    DB::table('sizes_goods')->insert($sizes_array);
                }
                  DB::table('decorations_goods')->where('good_id',$goodId)->delete();
                foreach($good->decorations as $val){
                    $decoration_array=[
                        'good_id'=>$goodId,
                        'decoration_id'=>$val
                    ];
                    DB::table('decorations_goods')->insert($decoration_array);
                }
                DB::table('producttypes_goods')->where('good_id',$goodId)->delete();
                foreach($good->producttypes as $val){
                    $producttype_array=[
                        'good_id'=>$goodId,
                        'producttype_id'=>$val
                    ];
                    DB::table('producttypes_goods')->insert($producttype_array);
                }

                if(null!=(session('color'))){
                foreach (session('color') as $value) {
                    if (!empty($value)) {
                        DB::table('colors_of_goods')->where('id_good' , $goodId)->update(
                            [
                            'color' => $value
                            ]
                        );
                    }
                }}



                //dd($goodId);
                return $goodId;
            });
            session()->forget('images');
            session()->forget('color');
            return $result;

        }catch (\Exception $e) {
            dd($e);
            return $e;
        }

    }

}
