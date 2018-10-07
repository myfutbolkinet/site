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

            /*1*/
            [
                'type' => 1,
                'name' => 'Амортизаторы Ваз 2110',
                'category'=>63,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>'
            ],
            /*2*/
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
                'description2'=>'<p>Надежные амортизаторы на Мерседес 2</p>'
            ],
            /*3*/
            [
                'type' => 1,
                'name' => 'Амортизаторы Audi',
                'category'=>63,
                'articul'=>'11244237',
                'user_id'=>1,
                'price'=>5129.6,
                'price_without_discount'=>5000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на Audi</p>',
                'description2'=>'<p>Надежные амортизаторы на Audi 2</p>'
            ],
            /*4*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW',
                'category'=>63,
                'articul'=>'11244236',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW 2</p>'
            ],
            /*5*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW2',
                'category'=>63,
                'articul'=>'11244238',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW2</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW2 2</p>'
            ],
            /*6*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW3',
                'category'=>63,
                'articul'=>'11244239',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW3</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW2 2</p>'
            ],
            /*7*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW5',
                'category'=>63,
                'articul'=>'11244240',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW5</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW5 2</p>'
            ],
            /*8*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW7',
                'category'=>63,
                'articul'=>'11244240',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW7</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW7 2</p>'
            ],

            /*9*/
            [
                'type' => 1,
                'name' => 'Амортизаторы Ваз 2110',
                'category'=>63,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>'
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
                'description2'=>'<p>Надежные амортизаторы на Мерседес 2</p>'
            ],
            /*11*/
            [
                'type' => 1,
                'name' => 'Амортизаторы Audi',
                'category'=>63,
                'articul'=>'11244237',
                'user_id'=>1,
                'price'=>5129.6,
                'price_without_discount'=>5000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на Audi</p>',
                'description2'=>'<p>Надежные амортизаторы на Audi 2</p>'
            ],
            /*12*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW',
                'category'=>63,
                'articul'=>'11244236',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW 2</p>'
            ],
            /*13*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW2',
                'category'=>63,
                'articul'=>'11244238',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW2</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW2 2</p>'
            ],
            /*14*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW3',
                'category'=>63,
                'articul'=>'11244239',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW3</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW2 2</p>'
            ],
            /*15*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW5',
                'category'=>63,
                'articul'=>'11244240',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW5</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW5 2</p>'
            ],
            /*16*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW7',
                'category'=>63,
                'articul'=>'11244240',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW7</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW7 2</p>'
            ],
            /*17*/
            [
                'type' => 1,
                'name' => 'Амортизаторы Ваз 2110',
                'category'=>63,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>'
            ],
            /*18*/
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
                'description2'=>'<p>Надежные амортизаторы на Мерседес 2</p>'
            ],
            /*19*/
            [
                'type' => 1,
                'name' => 'Амортизаторы Audi',
                'category'=>63,
                'articul'=>'11244237',
                'user_id'=>1,
                'price'=>5129.6,
                'price_without_discount'=>5000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на Audi</p>',
                'description2'=>'<p>Надежные амортизаторы на Audi 2</p>'
            ],
            /*20*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW',
                'category'=>63,
                'articul'=>'11244236',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW 2</p>'
            ],
            /*21*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW2',
                'category'=>63,
                'articul'=>'11244238',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW2</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW2 2</p>'
            ],
            /*22*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW3',
                'category'=>63,
                'articul'=>'11244239',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW3</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW2 2</p>'
            ],
            /*23*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW5',
                'category'=>63,
                'articul'=>'11244240',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW5</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW5 2</p>'
            ],
            /*24*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW7',
                'category'=>63,
                'articul'=>'11244240',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW7</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW7 2</p>'
            ],

            /*25*/
            [
                'type' => 1,
                'name' => 'Амортизаторы Ваз 2110',
                'category'=>63,
                'articul'=>'11244234',
                'user_id'=>1,
                'price'=>2129.6,
                'price_without_discount'=>2129.6,
                'count'=>10,
                'star'=>2.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы</p>',
                'description2'=>'<p>Надежные амортизаторы 2</p>'
            ],
            /*26*/
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
                'description2'=>'<p>Надежные амортизаторы на Мерседес 2</p>'
            ],
            /*27*/
            [
                'type' => 1,
                'name' => 'Амортизаторы Audi',
                'category'=>63,
                'articul'=>'11244237',
                'user_id'=>1,
                'price'=>5129.6,
                'price_without_discount'=>5000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на Audi</p>',
                'description2'=>'<p>Надежные амортизаторы на Audi 2</p>'
            ],
            /*28*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW',
                'category'=>63,
                'articul'=>'11244236',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW 2</p>'
            ],
            /*29*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW2',
                'category'=>63,
                'articul'=>'11244238',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW2</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW2 2</p>'
            ],
            /*30*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW3',
                'category'=>63,
                'articul'=>'11244239',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW3</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW2 2</p>'
            ],
            /*31*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW5',
                'category'=>63,
                'articul'=>'11244240',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW5</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW5 2</p>'
            ],
            /*32*/
            [
                'type' => 1,
                'name' => 'Амортизаторы BMW7',
                'category'=>63,
                'articul'=>'11244240',
                'user_id'=>1,
                'price'=>8129.6,
                'price_without_discount'=>8000.6,
                'count'=>10,
                'star'=>3.5,
                'star_counts'=>10,
                'discount'=>10,
                'description'=>'<p>Надежные амортизаторы на BMW7</p>',
                'description2'=>'<p>Надежные амортизаторы на BMW7 2</p>'
            ],




        ]);

        DB::table('photos')->insert([
            /*1*/
            [
            'id_good'=>1,
            'photo'=>'55265626_w640_h640_ss20159500x500_1538924575.jpg',
            ],
            [
            /*2*/
            'id_good'=>1,
            'photo'=>'55265626_w640_h640_ss20159500x500_1538924583.jpg',
            ],
            /*3*/
            [
            'id_good'=>1,
            'photo'=>'55265626_w640_h640_ss20159500x500_1538924586.jpg',
            ],
            /*4*/
            [
            'id_good'=>1,
            'photo'=>'55265626_w640_h640_ss20159500x500_1538924589.jpg',
            ],
            /*5*/
            [
            'id_good'=>2,
            'photo'=>'53575506_w640_h640_shniva_1538925321.png',
            ],
            /*6*/
            [
            'id_good'=>2,
            'photo'=>'53575506_w640_h640_shniva_1538925325.png',
            ],
            /*7*/
            [
            'id_good'=>2,
            'photo'=>'53575506_w640_h640_shniva_1538925327.png',
            ],
            /*8*/
            [
            'id_good'=>2,
            'photo'=>'53575506_w640_h640_shniva_1538925329.png',
            ],
            /*9*/
            [
            'id_good'=>3,
            'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925558.jpg',
            ],
            /*10*/
            [
            'id_good'=>3,
            'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925562.jpg',
            ],
            /*11*/
            [
            'id_good'=>3,
            'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925565.jpg',
            ],
            /*12*/
            [
            'id_good'=>3,
            'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925567.jpg',
             ],
            /*13*/
            [
                'id_good'=>4,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924575.jpg',
            ],
            [
                /*14*/
                'id_good'=>4,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924583.jpg',
            ],
            /*15*/
            [
                'id_good'=>4,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924586.jpg',
            ],
            /*16*/
            [
                'id_good'=>4,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924589.jpg',
            ],
            /*17*/
            [
                'id_good'=>5,
                'photo'=>'53575506_w640_h640_shniva_1538925321.png',
            ],
            /*18*/
            [
                'id_good'=>5,
                'photo'=>'53575506_w640_h640_shniva_1538925325.png',
            ],
            /*19*/
            [
                'id_good'=>5,
                'photo'=>'53575506_w640_h640_shniva_1538925327.png',
            ],
            /*20*/
            [
                'id_good'=>5,
                'photo'=>'53575506_w640_h640_shniva_1538925329.png',
            ],
            /*21*/
            [
                'id_good'=>6,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925558.jpg',
            ],
            /*22*/
            [
                'id_good'=>6,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925562.jpg',
            ],
            /*23*/
            [
                'id_good'=>6,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925565.jpg',
            ],
            /*24*/
            [
                'id_good'=>6,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925567.jpg',
            ],


            /*25*/
            [
                'id_good'=>7,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924575.jpg',
            ],
            [
                /*26*/
                'id_good'=>7,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924583.jpg',
            ],
            /*27*/
            [
                'id_good'=>7,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924586.jpg',
            ],
            /*28*/
            [
                'id_good'=>7,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924589.jpg',
            ],
            /*29*/
            [
                'id_good'=>8,
                'photo'=>'53575506_w640_h640_shniva_1538925321.png',
            ],
            /*30*/
            [
                'id_good'=>8,
                'photo'=>'53575506_w640_h640_shniva_1538925325.png',
            ],
            /*31*/
            [
                'id_good'=>8,
                'photo'=>'53575506_w640_h640_shniva_1538925327.png',
            ],
            /*32*/
            [
                'id_good'=>8,
                'photo'=>'53575506_w640_h640_shniva_1538925329.png',
            ],
            /*33*/
            [
                'id_good'=>9,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925558.jpg',
            ],
            /*34*/
            [
                'id_good'=>9,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925562.jpg',
            ],
            /*35*/
            [
                'id_good'=>9,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925565.jpg',
            ],
            /*36*/
            [
                'id_good'=>9,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925567.jpg',
            ],
            /*37*/
            [
                'id_good'=>10,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924575.jpg',
            ],
            [
                /*38*/
                'id_good'=>10,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924583.jpg',
            ],
            /*39*/
            [
                'id_good'=>10,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924586.jpg',
            ],
            /*40*/
            [
                'id_good'=>10,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924589.jpg',
            ],
            /*41*/
            [
                'id_good'=>11,
                'photo'=>'53575506_w640_h640_shniva_1538925321.png',
            ],
            /*42*/
            [
                'id_good'=>11,
                'photo'=>'53575506_w640_h640_shniva_1538925325.png',
            ],
            /*43*/
            [
                'id_good'=>11,
                'photo'=>'53575506_w640_h640_shniva_1538925327.png',
            ],
            /*44*/
            [
                'id_good'=>11,
                'photo'=>'53575506_w640_h640_shniva_1538925329.png',
            ],
            /*45*/
            [
                'id_good'=>12,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925558.jpg',
            ],
            /*46*/
            [
                'id_good'=>12,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925562.jpg',
            ],
            /*47*/
            [
                'id_good'=>12,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925565.jpg',
            ],
            /*48*/
            [
                'id_good'=>12,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925567.jpg',
            ],
            /*49*/
            [
                'id_good'=>13,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924575.jpg',
            ],
            [
                /*50*/
                'id_good'=>13,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924583.jpg',
            ],
            /*51*/
            [
                'id_good'=>13,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924586.jpg',
            ],
            /*52*/
            [
                'id_good'=>13,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924589.jpg',
            ],
            /*53*/
            [
                'id_good'=>14,
                'photo'=>'53575506_w640_h640_shniva_1538925321.png',
            ],
            /*54*/
            [
                'id_good'=>14,
                'photo'=>'53575506_w640_h640_shniva_1538925325.png',
            ],
            /*55*/
            [
                'id_good'=>14,
                'photo'=>'53575506_w640_h640_shniva_1538925327.png',
            ],
            /*56*/
            [
                'id_good'=>14,
                'photo'=>'53575506_w640_h640_shniva_1538925329.png',
            ],
            /*57*/
            [
                'id_good'=>15,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925558.jpg',
            ],
            /*58*/
            [
                'id_good'=>15,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925562.jpg',
            ],
            /*59*/
            [
                'id_good'=>15,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925565.jpg',
            ],
            /*60*/
            [
                'id_good'=>15,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925567.jpg',
            ],
            /*61*/
            [
                'id_good'=>16,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924575.jpg',
            ],
            [
                /*62*/
                'id_good'=>16,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924583.jpg',
            ],
            /*63*/
            [
                'id_good'=>16,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924586.jpg',
            ],
            /*64*/
            [
                'id_good'=>16,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924589.jpg',
            ],
            /*65*/
            [
                'id_good'=>17,
                'photo'=>'53575506_w640_h640_shniva_1538925321.png',
            ],
            /*66*/
            [
                'id_good'=>17,
                'photo'=>'53575506_w640_h640_shniva_1538925325.png',
            ],
            /*67*/
            [
                'id_good'=>17,
                'photo'=>'53575506_w640_h640_shniva_1538925327.png',
            ],
            /*68*/
            [
                'id_good'=>17,
                'photo'=>'53575506_w640_h640_shniva_1538925329.png',
            ],
            /*69*/
            [
                'id_good'=>18,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925558.jpg',
            ],
            /*70*/
            [
                'id_good'=>18,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925562.jpg',
            ],
            /*71*/
            [
                'id_good'=>18,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925565.jpg',
            ],
            /*72*/
            [
                'id_good'=>18,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925567.jpg',
            ],


            /*73*/
            [
                'id_good'=>19,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924575.jpg',
            ],
            [
                /*74*/
                'id_good'=>19,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924583.jpg',
            ],
            /*75*/
            [
                'id_good'=>19,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924586.jpg',
            ],
            /*76*/
            [
                'id_good'=>19,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924589.jpg',
            ],
            /*77*/
            [
                'id_good'=>20,
                'photo'=>'53575506_w640_h640_shniva_1538925321.png',
            ],
            /*78*/
            [
                'id_good'=>20,
                'photo'=>'53575506_w640_h640_shniva_1538925325.png',
            ],
            /*79*/
            [
                'id_good'=>20,
                'photo'=>'53575506_w640_h640_shniva_1538925327.png',
            ],
            /*80*/
            [
                'id_good'=>20,
                'photo'=>'53575506_w640_h640_shniva_1538925329.png',
            ],
            /*81*/
            [
                'id_good'=>21,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925558.jpg',
            ],
            /*82*/
            [
                'id_good'=>21,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925562.jpg',
            ],
            /*83*/
            [
                'id_good'=>21,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925565.jpg',
            ],
            /*84*/
            [
                'id_good'=>21,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925567.jpg',
            ],
            /*85*/
            [
                'id_good'=>22,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924575.jpg',
            ],
            [
                /*86*/
                'id_good'=>22,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924583.jpg',
            ],
            /*87*/
            [
                'id_good'=>22,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924586.jpg',
            ],
            /*88*/
            [
                'id_good'=>22,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924589.jpg',
            ],
            /*89*/
            [
                'id_good'=>23,
                'photo'=>'53575506_w640_h640_shniva_1538925321.png',
            ],
            /*90*/
            [
                'id_good'=>23,
                'photo'=>'53575506_w640_h640_shniva_1538925325.png',
            ],
            /*91*/
            [
                'id_good'=>23,
                'photo'=>'53575506_w640_h640_shniva_1538925327.png',
            ],
            /*92*/
            [
                'id_good'=>23,
                'photo'=>'53575506_w640_h640_shniva_1538925329.png',
            ],
            /*93*/
            [
                'id_good'=>24,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925558.jpg',
            ],
            /*94*/
            [
                'id_good'=>24,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925562.jpg',
            ],
            /*95*/
            [
                'id_good'=>24,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925565.jpg',
            ],
            /*96*/
            [
                'id_good'=>24,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925567.jpg',
            ],



            /*97*/
            [
                'id_good'=>25,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924575.jpg',
            ],
            [
                /*98*/
                'id_good'=>25,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924583.jpg',
            ],
            /*99*/
            [
                'id_good'=>25,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924586.jpg',
            ],
            /*100*/
            [
                'id_good'=>25,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924589.jpg',
            ],
            /*101*/
            [
                'id_good'=>26,
                'photo'=>'53575506_w640_h640_shniva_1538925321.png',
            ],
            /*102*/
            [
                'id_good'=>26,
                'photo'=>'53575506_w640_h640_shniva_1538925325.png',
            ],
            /*103*/
            [
                'id_good'=>26,
                'photo'=>'53575506_w640_h640_shniva_1538925327.png',
            ],
            /*104*/
            [
                'id_good'=>26,
                'photo'=>'53575506_w640_h640_shniva_1538925329.png',
            ],
            /*105*/
            [
                'id_good'=>27,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925558.jpg',
            ],
            /*106*/
            [
                'id_good'=>27,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925562.jpg',
            ],
            /*107*/
            [
                'id_good'=>27,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925565.jpg',
            ],
            /*108*/
            [
                'id_good'=>27,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925567.jpg',
            ],
            /*109*/
            [
                'id_good'=>28,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924575.jpg',
            ],
            [
                /*110*/
                'id_good'=>28,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924583.jpg',
            ],
            /*111*/
            [
                'id_good'=>28,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924586.jpg',
            ],
            /*112*/
            [
                'id_good'=>28,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924589.jpg',
            ],
            /*113*/
            [
                'id_good'=>29,
                'photo'=>'53575506_w640_h640_shniva_1538925321.png',
            ],
            /*114*/
            [
                'id_good'=>29,
                'photo'=>'53575506_w640_h640_shniva_1538925325.png',
            ],
            /*115*/
            [
                'id_good'=>29,
                'photo'=>'53575506_w640_h640_shniva_1538925327.png',
            ],
            /*116*/
            [
                'id_good'=>29,
                'photo'=>'53575506_w640_h640_shniva_1538925329.png',
            ],
            /*117*/
            [
                'id_good'=>30,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925558.jpg',
            ],
            /*118*/
            [
                'id_good'=>30,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925562.jpg',
            ],
            /*119*/
            [
                'id_good'=>30,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925565.jpg',
            ],
            /*120*/
            [
                'id_good'=>30,
                'photo'=>'1071884040_w640_h640_cid2241616_pid656000159-5ad824f1_1538925567.jpg',
            ],


            /*121*/
            [
                'id_good'=>31,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924575.jpg',
            ],
            [
                /*122*/
                'id_good'=>31,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924583.jpg',
            ],
            /*123*/
            [
                'id_good'=>31,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924586.jpg',
            ],
            /*124*/
            [
                'id_good'=>31,
                'photo'=>'55265626_w640_h640_ss20159500x500_1538924589.jpg',
            ],
            /*125*/
            [
                'id_good'=>32,
                'photo'=>'53575506_w640_h640_shniva_1538925321.png',
            ],
            /*126*/
            [
                'id_good'=>32,
                'photo'=>'53575506_w640_h640_shniva_1538925325.png',
            ],
            /*127*/
            [
                'id_good'=>32,
                'photo'=>'53575506_w640_h640_shniva_1538925327.png',
            ],
            /*128*/
            [
                'id_good'=>32,
                'photo'=>'53575506_w640_h640_shniva_1538925329.png',
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
