<?php

namespace App\Domain\Good;

use App\Domain\Good\GoodRepositoryInterface;
use Intervention\Image\ImageManagerStatic as Image;
use \DB;
use Illuminate\Http\Request;

class SqlGoodRepository implements GoodRepositoryInterface
{


    public function create(\App\Good $good)
    {

        try {
            //dump($good);
            foreach ($good->getFillable() as $field) {
                if ($field !== 'user_id') {
                    $res_array[$field] = $good->$field;
                } else {
                    $res_array['user_id'] = $good->getUser()->getId();
                }

            }

            $result = DB::transaction(function () use ($good, $res_array) {
                DB::table('goods')->insert($res_array);

                //dump(session()->all());
                $good_id = DB::getPdo()->lastInsertId();
                //dump($good_id);

                foreach (session('images') as $file) {
                    $img = Image::make(storage_path() . "/app/public/" . $file);
                    $height = $img->height();
                    $width = $img->width();
                    if ($width > $height) {
                        $pxl_perc = $width / $height;
                        $img->resize($pxl_perc * 1036, 1036);
                    }
                    if ($height > $width) {
                        $pxl_perc = $height / $width;
                        $img->resize(850, $pxl_perc * 850);
                    }
                    $img->crop(850, 1036);
                    $img->save();
                    //echo "<img src='".asset('storage/'.$file.'')."'>";
                    DB::table('photos')->insert(
                        [
                            'id_good' => $good_id,
                            'photo' => $file

                        ]

                    );

                }

                if (!empty($good->color)) {
                    dump($good->color);
                    foreach ($good->color as $value) {
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
            return $result;

        } catch (\Exception $e) {
            return $e;
        }

    }


}
