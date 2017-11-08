<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([

            [
                'parent_id' => 0,
                'name' => 'Женская обувь',
                /*'link'=> '/good_category?id=',*/
                'icon'=>'fa-plus-square'
            ],
            [
                'parent_id' => 0,
                'name' => 'Сумки',
                /*'link'=> '/good?id=123456',*/
                'icon'=>'fa-usb'
            ],
            [
                'parent_id' => 0,
                'name' => 'Написать нам',
                /*'link'=> '/good?id=123456',*/
                'icon'=>''
            ],
            [
                'parent_id' => 1,
                'name' => 'Летняя обувь',
                /*'link'=> '/good?id=123456',*/
                'icon'=>''
            ],
            [
                'parent_id' => 1,
                'name' => 'Зимняя обувь',
                /* 'link'=> '/good?id=123456',*/
                'icon'=>''
            ],
            [
                'parent_id' => 1,
                'name' => 'Распродажа',
                /*'link'=> '/good?id=123456',*/
                'icon'=>''
            ],
            [
                'parent_id' => 1,
                'name' => 'Демисезонная обувь осень-весна',
                /* 'link'=> '/good?id=123456',*/
                'icon'=>''

            ],[
                'parent_id' => 1,
                'name' => 'Гламур спорт',
                /* 'link'=> '/good?id=123456',*/
                'icon'=>''
            ]
        ]);







        DB::table('admin_categories')->insert([

            [
                'parent_id' => 0,
                'name' => 'Користувачі',
                'icon'=> 'fa-users',
                'link'=> '/admin'
            ],
            [
                'parent_id' => 1,
                'name' => 'Управління користувачами',
                'icon'=> 'fa-registered',
                'link'=> '/admin/customers_managment'
            ],
            [
                'parent_id' => 0,
                'name' => 'Товари',
                'icon'=> 'fa-gift',
                'link'=> '/admin'
            ],
            [
                'parent_id' => 3,
                'name' => 'Додати товар',
                'icon'=> 'fa-envelope','link'=> '/admin/add_good'
            ],
            [
                'parent_id' => 3,
                'name' => 'Видалити товар',
                'icon'=> 'fa-envelope','link'=> '/admin/delete_good'
            ],
            [
                'parent_id' => 3,
                'name' => 'Категоріі',
                'icon'=> 'fa-envelope','link'=> '/admin/categories'
            ],
            [
                'parent_id' => 0,
                'name' => 'Замовлення',
                'icon'=> 'fa-envelope',
                'link'=> '/admin'

            ],
            [
                'parent_id' => 0,
                'name' => 'Реклама',
                'icon'=> 'fa-bullhorn',
                'link'=> '/admin'
            ],
            [
                'parent_id' => 0,
                'name' => 'Партнери',
                'icon'=> 'fa-thumbs-o-up',
                'link'=> '/admin/partners'
            ],
            [
                'parent_id' => 9,
                'name' => 'Додати логотипи',
                'icon'=> 'fa-envelope','link'=> '/admin/add_logos'
            ],
            [
                'parent_id' => 9,
                'name' => 'Видалити логотипи',
                'icon'=> 'fa-envelope','link'=> '/admin/del_logos'
            ],
        ]);




        DB::table('logos')->insert([

            [

                'logo' => 'adidas.png'

            ],
            [

                'logo' => 'budweiser.png'

            ],
            [

                'logo' => 'burger-king.png'

            ],
            [

                'logo' => 'chipotle.png'

            ],
            [

            'logo' => 'dunkin-donuts.png'

        ],[

                'logo' => 'ford.png'

            ],
            [

                'logo' => 'klondike.png'

            ],
            [

                'logo' => 'nike.png'

            ],
            [

                'logo' => 'nissan.png'

            ],
            [

                'logo' => 'samsung.png'

            ]
        ]);
    }
}
