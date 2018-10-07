<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('type_of_goods')->insert([

            [

                'name' => 'Акційний товар',

            ],
            [

                'name' => 'Оптовий товар',

            ],
            [

                'name' => 'Роздрібний товар',

            ],

        ]);



        DB::table('goods')->insert([

            [
                'type' => 1,
                'name' => 'полуботинки замшевые',
                'category'=>5,
                'articul'=>'11244234',
               'user_id'=>1,
               'price'=>129.6,
                'price_without_discount'=>144,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,

                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'
            ],
            [
                'type' => 1,
                'name' => 'Гламурные кеды',
                'category'=>8,
                'articul'=>'11244235',
                'user_id'=>1,
                'price'=>129.6,
                'price_without_discount'=>144,
                'count'=>10,
                'discount'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'
            ],
            [
                'type' => 1,
                'name' => 'туфли женские выходные',
                'category'=>4,
                'articul'=>'11244235',
                'user_id'=>1,'price'=>129.6,
                'price_without_discount'=>144,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,'star'=>true,
                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'
            ],
            [
                'type' => 1,
                'name' => 'гламурные кеды с цветочками',
                'category'=>8,
                'articul'=>'11244235',
                'user_id'=>1,'price'=>129.6,
                'star'=>2.5,
                'star_counts'=>10,
                'price_without_discount'=>144,
                'count'=>10,
                'discount'=>10,'star'=>true,
                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'
            ],
            [
                'type' => 1,
                'name' => 'гламурные кеды с цветочками',
                'category'=>8,
                'articul'=>'11244235',
                'user_id'=>1,'price'=>129.6,
                'price_without_discount'=>144,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,'star'=>true,
                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'

            ],
            [
                'type' => 1,
                'name' => 'распродажа ',
                'category'=>6,
                'articul'=>'11244235',
                'user_id'=>1,'price'=>129.6,
                'price_without_discount'=>144,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,'star'=>true,
                'description'=>'<p>стильная обувь</p>',
                'description2'=>'<p>стильная обувь</p>'
            ]





        ]);

        DB::table('photos')->insert([

        ]);


        DB::table('likes')->insert([

            [

                'id_good' => 1,
                'id_user'=>1

            ]
        ]);

    }
}
