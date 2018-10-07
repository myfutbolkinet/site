<?php

use Illuminate\Database\Seeder;

class SuperadminsMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('superadmin_categories')->insert([

            [
                'parent_id' => 0,
                'name' => 'Користувачі',
                'icon'=> 'fa-users',
                'link'=> '/superadmin',
                'type'=>'not_linked'
            ],
            [
                'parent_id' => 1,
                'name' => 'Управління користувачами',
                'icon'=> 'fa-registered',
                'link'=> '/superadmin/customers_managment',
                'type'=>'linked'
            ],
            [
                'parent_id' => 0,
                'name' => 'Товари',
                'icon'=> 'fa-gift',
                'link'=> '/superadmin',
                'type'=>'not_linked'
            ],
            [
                'parent_id' => 3,
                'name' => 'Додати товар',
                'icon'=> 'fa-envelope','link'=> '/superadmin/add_good','type'=>'linked'
            ],
            [
                'parent_id' => 3,
                'name' => 'Видалити товар',
                'icon'=> 'fa-envelope','link'=> '/superadmin/delete_good','type'=>'linked'
            ],
            [
                'parent_id' => 3,
                'name' => 'Категоріі',
                'icon'=> 'fa-envelope','link'=> '/superadmin/categories','type'=>'linked'
            ],
            [
                'parent_id' => 3,
                'name' => 'Свойства товаров',
                'icon'=> 'fa-envelope','link'=> '/superadmin/goods_properties','type'=>'linked'
            ],
            [
                'parent_id' => 0,
                'name' => 'Замовлення',
                'icon'=> 'fa-envelope',
                'link'=> '/superadmin','type'=>'linked'

            ],
            [
                'parent_id' => 0,
                'name' => 'Реклама',
                'icon'=> 'fa-bullhorn',
                'link'=> '/superadmin','type'=>'linked'
            ],
            [
                'parent_id' => 0,
                'name' => 'Партнери',
                'icon'=> 'fa-thumbs-o-up',
                'link'=> '/superadmin/partners','type'=>'not_linked'
            ],
            [
                'parent_id' => 9,
                'name' => 'Додати логотипи',
                'icon'=> 'fa-envelope','link'=> '/superadmin/add_logos','type'=>'linked'
            ],
            [
                'parent_id' => 9,
                'name' => 'Видалити логотипи',
                'icon'=> 'fa-envelope','link'=> '/superadmin/del_logos','type'=>'linked'
            ],
            [
                'parent_id' => 6,
                'name' => 'Добавить категорию',
                'icon'=> 'fa-envelope',
                'link'=> '/superadmin/categories/add','type'=>'linked'
            ],
        ]);
    }
}
