<?php

use Illuminate\Database\Seeder;

class MerchantSitePagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('page_types')->insert([
            /*1*/
            [
                'type_name' => 'Главная',

            ],/*2*/
            [
                'type_name' => 'Статья',

            ],/*3*/

            [
                'type_name' => 'Партнеры',
            ],
            /*4*/
            [
                'type_name' => 'О нас',
            ],
            /*5*/
            [
                'type_name' => 'Контакты',
            ],

        ]);

        DB::table('merchants_sites_menu')->insert([
            /*1*/
            [
                'site_id' => 1,
                'menu_name'=>'Main page',
                'slug'=>'/main_page',
                'page_type_id'=>1

            ],/*2*/
            [
                'site_id' => 1,
                'menu_name'=>'Article',
                'slug'=>'/article',
                'page_type_id'=>2

            ],/*3*/

            [
                'site_id' => 1,
                'menu_name'=>'My Partners',
                'slug'=>'/partners',
                'page_type_id'=>3

            ],
            /*4*/
            [
                'site_id' => 1,
                'menu_name'=>'About us',
                'slug'=>'/about_us',
                'page_type_id'=>4

            ],
            /*5*/
            [
                'site_id' => 1,
                'menu_name'=>'Contacts',
                'slug'=>'/contacts',
                'page_type_id'=>5

            ],

        ]);



        DB::table('merchant_site_menu_positions')->insert([
            /*1*/
            [
                'site_id'=>1,
                'merchant_id' => 1,
                'data'=>serialize('[{"id":1},{"id":2},{"id":3,"children":[{"id":4},{"id":5}]},{"id":6},{"id":7},{"id":8},{"id":9}]')
            ]

        ]);









    }
}
