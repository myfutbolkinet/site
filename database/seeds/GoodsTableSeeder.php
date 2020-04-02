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

        DB::table('merchants')->insert([

            /*1*/
            [
                'user_id'=>1
            ]
        ]);

        DB::table('sites')->insert([

            /*1*/
            [
                'merchant_id'=>1,
                'domain'=>'marafett.loc',
                'package'=>1,
                'paid_until'=>\Carbon\Carbon::parse('2020-01-01'),
                'template'=>1

            ]
        ]);

        DB::table('goods')->insert([

            /*1*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>1
            ],
            /*2*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>1
            ],
            /*3*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>1
            ],
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>1
            ],
            /*5*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>1
            ],
            /*6*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*7*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*8*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],

            /*9*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*10*/
            [
                'type' => 1,
                'name' => 'Амортизаторы Mersedes',
                'category'=>63,
                'articul'=>'11244235',
                'user_id'=>1,
                'price'=>5129.6,
                'price_without_discount'=>5000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на Мерседес</p>',
                'description2'=>'<p>Надежные амортизаторы на Мерседес 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*11*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*12*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*13*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*14*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*15*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*16*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*17*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*18*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*19*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*20*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*21*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*22*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*23*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*24*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],

            /*25*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*26*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*27*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*28*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*29*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*30*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*31*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],
            /*32*/
            [
                'type' => 1,
                'name' => 'Футболка с принтом',
                'category'=>12,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>',
                'site_id'=>1,
                'is_featured'=>null
            ],




        ]);

        DB::table('photos')->insert([
            /*1*/
            [
            'id_good'=>1,
            'photo'=>'0001.jpg',
            ],
            [
            /*2*/
            'id_good'=>1,
            'photo'=>'0001.jpg',
            ],
            /*3*/
            [
            'id_good'=>1,
            'photo'=>'0001.jpg',
            ],
            /*4*/
            [
            'id_good'=>1,
            'photo'=>'0001.jpg',
            ],
            /*5*/
            [
            'id_good'=>2,
            'photo'=>'0001.jpg',
            ],
            /*6*/
            [
            'id_good'=>2,
            'photo'=>'0001.jpg',
            ],
            /*7*/
            [
            'id_good'=>2,
            'photo'=>'0001.jpg',
            ],
            /*8*/
            [
            'id_good'=>2,
            'photo'=>'0001.jpg',
            ],
            /*9*/
            [
            'id_good'=>3,
            'photo'=>'0001.jpg',
            ],
            /*10*/
            [
            'id_good'=>3,
            'photo'=>'0001.jpg',
            ],
            /*11*/
            [
            'id_good'=>3,
            'photo'=>'0001.jpg',
            ],
            /*12*/
            [
            'id_good'=>3,
            'photo'=>'0001.jpg',
             ],
            /*13*/
            [
                'id_good'=>4,
                'photo'=>'0001.jpg',
            ],
            [
                /*14*/
                'id_good'=>4,
                'photo'=>'0001.jpg',
            ],
            /*15*/
            [
                'id_good'=>4,
                'photo'=>'0001.jpg',
            ],
            /*16*/
            [
                'id_good'=>4,
                'photo'=>'0001.jpg',
            ],
            /*17*/
            [
                'id_good'=>5,
                'photo'=>'0001.jpg',
            ],
            /*18*/
            [
                'id_good'=>5,
                'photo'=>'0001.jpg',
            ],
            /*19*/
            [
                'id_good'=>5,
                'photo'=>'0001.jpg',
            ],
            /*20*/
            [
                'id_good'=>5,
                'photo'=>'0001.jpg',
            ],
            /*21*/
            [
                'id_good'=>6,
                'photo'=>'0001.jpg',
            ],
            /*22*/
            [
                'id_good'=>6,
                'photo'=>'0001.jpg',
            ],
            /*23*/
            [
                'id_good'=>6,
                'photo'=>'0001.jpg',
            ],
            /*24*/
            [
                'id_good'=>6,
                'photo'=>'0001.jpg',
            ],


            /*25*/
            [
                'id_good'=>7,
                'photo'=>'0001.jpg',
            ],
            [
                /*26*/
                'id_good'=>7,
                'photo'=>'0001.jpg',
            ],
            /*27*/
            [
                'id_good'=>7,
                'photo'=>'0001.jpg',
            ],
            /*28*/
            [
                'id_good'=>7,
                'photo'=>'0001.jpg',
            ],
            /*29*/
            [
                'id_good'=>8,
                'photo'=>'0001.jpg',
            ],
            /*30*/
            [
                'id_good'=>8,
                'photo'=>'0001.jpg',
            ],
            /*31*/
            [
                'id_good'=>8,
                'photo'=>'0001.jpg',
            ],
            /*32*/
            [
                'id_good'=>8,
                'photo'=>'0001.jpg',
            ],
            /*33*/
            [
                'id_good'=>9,
                'photo'=>'0001.jpg',
            ],
            /*34*/
            [
                'id_good'=>9,
                'photo'=>'0001.jpg',
            ],
            /*35*/
            [
                'id_good'=>9,
                'photo'=>'0001.jpg',
            ],
            /*36*/
            [
                'id_good'=>9,
                'photo'=>'0001.jpg',
            ],
            /*37*/
            [
                'id_good'=>10,
                'photo'=>'0001.jpg',
            ],
            [
                /*38*/
                'id_good'=>10,
                'photo'=>'0001.jpg',
            ],
            /*39*/
            [
                'id_good'=>10,
                'photo'=>'0001.jpg',
            ],
            /*40*/
            [
                'id_good'=>10,
                'photo'=>'0001.jpg',
            ],
            /*41*/
            [
                'id_good'=>11,
                'photo'=>'0001.jpg',
            ],
            /*42*/
            [
                'id_good'=>11,
                'photo'=>'0001.jpg',
            ],
            /*43*/
            [
                'id_good'=>11,
                'photo'=>'0001.jpg',
            ],
            /*44*/
            [
                'id_good'=>11,
                'photo'=>'0001.jpg',
            ],
            /*45*/
            [
                'id_good'=>12,
                'photo'=>'0001.jpg',
            ],
            /*46*/
            [
                'id_good'=>12,
                'photo'=>'0001.jpg',
            ],
            /*47*/
            [
                'id_good'=>12,
                'photo'=>'0001.jpg',
            ],
            /*48*/
            [
                'id_good'=>12,
                'photo'=>'0001.jpg',
            ],
            /*49*/
            [
                'id_good'=>13,
                'photo'=>'0001.jpg',
            ],
            [
                /*50*/
                'id_good'=>13,
                'photo'=>'0001.jpg',
            ],
            /*51*/
            [
                'id_good'=>13,
                'photo'=>'0001.jpg',
            ],
            /*52*/
            [
                'id_good'=>13,
                'photo'=>'0001.jpg',
            ],
            /*53*/
            [
                'id_good'=>14,
                'photo'=>'0001.jpg',
            ],
            /*54*/
            [
                'id_good'=>14,
                'photo'=>'0001.jpg',
            ],
            /*55*/
            [
                'id_good'=>14,
                'photo'=>'0001.jpg',
            ],
            /*56*/
            [
                'id_good'=>14,
                'photo'=>'0001.jpg',
            ],
            /*57*/
            [
                'id_good'=>15,
                'photo'=>'0001.jpg',
            ],
            /*58*/
            [
                'id_good'=>15,
                'photo'=>'0001.jpg',
            ],
            /*59*/
            [
                'id_good'=>15,
                'photo'=>'0001.jpg',
            ],
            /*60*/
            [
                'id_good'=>15,
                'photo'=>'0001.jpg',
            ],
            /*61*/
            [
                'id_good'=>16,
                'photo'=>'0001.jpg',
            ],
            [
                /*62*/
                'id_good'=>16,
                'photo'=>'0001.jpg',
            ],
            /*63*/
            [
                'id_good'=>16,
                'photo'=>'0001.jpg',
            ],
            /*64*/
            [
                'id_good'=>16,
                'photo'=>'0001.jpg',
            ],
            /*65*/
            [
                'id_good'=>17,
                'photo'=>'0001.jpg',
            ],
            /*66*/
            [
                'id_good'=>17,
                'photo'=>'0001.jpg',
            ],
            /*67*/
            [
                'id_good'=>17,
                'photo'=>'0001.jpg',
            ],
            /*68*/
            [
                'id_good'=>17,
                'photo'=>'0001.jpg',
            ],
            /*69*/
            [
                'id_good'=>18,
                'photo'=>'0001.jpg',
            ],
            /*70*/
            [
                'id_good'=>18,
                'photo'=>'0001.jpg',
            ],
            /*71*/
            [
                'id_good'=>18,
                'photo'=>'0001.jpg',
            ],
            /*72*/
            [
                'id_good'=>18,
                'photo'=>'0001.jpg',
            ],


            /*73*/
            [
                'id_good'=>19,
                'photo'=>'0001.jpg',
            ],
            [
                /*74*/
                'id_good'=>19,
                'photo'=>'0001.jpg',
            ],
            /*75*/
            [
                'id_good'=>19,
                'photo'=>'0001.jpg',
            ],
            /*76*/
            [
                'id_good'=>19,
                'photo'=>'0001.jpg',
            ],
            /*77*/
            [
                'id_good'=>20,
                'photo'=>'0001.jpg',
            ],
            /*78*/
            [
                'id_good'=>20,
                'photo'=>'0001.jpg',
            ],
            /*79*/
            [
                'id_good'=>20,
                'photo'=>'0001.jpg',
            ],
            /*80*/
            [
                'id_good'=>20,
                'photo'=>'0001.jpg',
            ],
            /*81*/
            [
                'id_good'=>21,
                'photo'=>'0001.jpg',
            ],
            /*82*/
            [
                'id_good'=>21,
                'photo'=>'0001.jpg',
            ],
            /*83*/
            [
                'id_good'=>21,
                'photo'=>'0001.jpg',
            ],
            /*84*/
            [
                'id_good'=>21,
                'photo'=>'0001.jpg',
            ],
            /*85*/
            [
                'id_good'=>22,
                'photo'=>'0001.jpg',
            ],
            [
                /*86*/
                'id_good'=>22,
                'photo'=>'0001.jpg',
            ],
            /*87*/
            [
                'id_good'=>22,
                'photo'=>'0001.jpg',
            ],
            /*88*/
            [
                'id_good'=>22,
                'photo'=>'0001.jpg',
            ],
            /*89*/
            [
                'id_good'=>23,
                'photo'=>'0001.jpg',
            ],
            /*90*/
            [
                'id_good'=>23,
                'photo'=>'0001.jpg',
            ],
            /*91*/
            [
                'id_good'=>23,
                'photo'=>'0001.jpg',
            ],
            /*92*/
            [
                'id_good'=>23,
                'photo'=>'0001.jpg',
            ],
            /*93*/
            [
                'id_good'=>24,
                'photo'=>'0001.jpg',
            ],
            /*94*/
            [
                'id_good'=>24,
                'photo'=>'0001.jpg',
            ],
            /*95*/
            [
                'id_good'=>24,
                'photo'=>'0001.jpg',
            ],
            /*96*/
            [
                'id_good'=>24,
                'photo'=>'0001.jpg',
            ],



            /*97*/
            [
                'id_good'=>25,
                'photo'=>'0001.jpg',
            ],
            [
                /*98*/
                'id_good'=>25,
                'photo'=>'0001.jpg',
            ],
            /*99*/
            [
                'id_good'=>25,
                'photo'=>'0001.jpg',
            ],
            /*100*/
            [
                'id_good'=>25,
                'photo'=>'0001.jpg',
            ],
            /*101*/
            [
                'id_good'=>26,
                'photo'=>'0001.jpg',
            ],
            /*102*/
            [
                'id_good'=>26,
                'photo'=>'0001.jpg',
            ],
            /*103*/
            [
                'id_good'=>26,
                'photo'=>'0001.jpg',
            ],
            /*104*/
            [
                'id_good'=>26,
                'photo'=>'0001.jpg',
            ],
            /*105*/
            [
                'id_good'=>27,
                'photo'=>'0001.jpg',
            ],
            /*106*/
            [
                'id_good'=>27,
                'photo'=>'0001.jpg',
            ],
            /*107*/
            [
                'id_good'=>27,
                'photo'=>'0001.jpg',
            ],
            /*108*/
            [
                'id_good'=>27,
                'photo'=>'0001.jpg',
            ],
            /*109*/
            [
                'id_good'=>28,
                'photo'=>'0001.jpg',
            ],
            [
                /*110*/
                'id_good'=>28,
                'photo'=>'0001.jpg',
            ],
            /*111*/
            [
                'id_good'=>28,
                'photo'=>'0001.jpg',
            ],
            /*112*/
            [
                'id_good'=>28,
                'photo'=>'0001.jpg',
            ],
            /*113*/
            [
                'id_good'=>29,
                'photo'=>'0001.jpg',
            ],
            /*114*/
            [
                'id_good'=>29,
                'photo'=>'0001.jpg',
            ],
            /*115*/
            [
                'id_good'=>29,
                'photo'=>'0001.jpg',
            ],
            /*116*/
            [
                'id_good'=>29,
                'photo'=>'0001.jpg',
            ],
            /*117*/
            [
                'id_good'=>30,
                'photo'=>'0001.jpg',
            ],
            /*118*/
            [
                'id_good'=>30,
                'photo'=>'0001.jpg',
            ],
            /*119*/
            [
                'id_good'=>30,
                'photo'=>'0001.jpg',
            ],
            /*120*/
            [
                'id_good'=>30,
                'photo'=>'0001.jpg',
            ],


            /*121*/
            [
                'id_good'=>31,
                'photo'=>'0001.jpg',
            ],
            [
                /*122*/
                'id_good'=>31,
                'photo'=>'0001.jpg',
            ],
            /*123*/
            [
                'id_good'=>31,
                'photo'=>'0001.jpg',
            ],
            /*124*/
            [
                'id_good'=>31,
                'photo'=>'0001.jpg',
            ],
            /*125*/
            [
                'id_good'=>32,
                'photo'=>'0001.jpg',
            ],
            /*126*/
            [
                'id_good'=>32,
                'photo'=>'0001.jpg',
            ],
            /*127*/
            [
                'id_good'=>32,
                'photo'=>'0001.jpg',
            ],
            /*128*/
            [
                'id_good'=>32,
                'photo'=>'0001.jpg',
            ],


        ]);


        DB::table('colors_of_goods')->insert([
            /*1*/
            [
           'id_good'=>1,
           'color'=>'#000000'
            ],
            /*2*/
            [
                'id_good'=>2,
                'color'=>'#eee'
            ],
            /*3*/
            [
                'id_good'=>3,
                'color'=>'#ee9'
            ],
            /*4*/
            [
                'id_good'=>4,
                'color'=>'#000000'
            ],
            /*5*/
            [
                'id_good'=>5,
                'color'=>'#eee'
            ],
            /*6*/
            [
                'id_good'=>6,
                'color'=>'#ee9'
            ],
            /*7*/
            [
                'id_good'=>7,
                'color'=>'#000000'
            ],
            /*8*/
            [
                'id_good'=>8,
                'color'=>'#eee'
            ],
            /*9*/
            [
                'id_good'=>9,
                'color'=>'#ee9'
            ],
            /*10*/
            [
                'id_good'=>10,
                'color'=>'#000000'
            ],
            /*11*/
            [
                'id_good'=>11,
                'color'=>'#eee'
            ],
            /*12*/
            [
                'id_good'=>12,
                'color'=>'#ee9'
            ],
            /*13*/
            [
                'id_good'=>13,
                'color'=>'#000000'
            ],
            /*14*/
            [
                'id_good'=>14,
                'color'=>'#eee'
            ],
            /*15*/
            [
                'id_good'=>15,
                'color'=>'#ee9'
            ],
            /*16*/
            [
                'id_good'=>16,
                'color'=>'#000000'
            ],
            /*17*/
            [
                'id_good'=>17,
                'color'=>'#eee'
            ],
            /*18*/
            [
                'id_good'=>18,
                'color'=>'#ee9'
            ],
            /*19*/
            [
                'id_good'=>19,
                'color'=>'#000000'
            ],
            /*20*/
            [
                'id_good'=>20,
                'color'=>'#eee'
            ],
            /*21*/
            [
                'id_good'=>21,
                'color'=>'#ee9'
            ],
            /*22*/
            [
                'id_good'=>22,
                'color'=>'#000000'
            ],
            /*23*/
            [
                'id_good'=>23,
                'color'=>'#eee'
            ],
            /*24*/
            [
                'id_good'=>24,
                'color'=>'#ee9'
            ],


        ]);


        DB::table('likes')->insert([

            [

                'id_good' => 1,
                'id_user'=>1

            ]
        ]);

    }
}
