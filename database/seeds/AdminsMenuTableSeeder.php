<?php

use Illuminate\Database\Seeder;

class AdminsMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        DB::table('admin_categories')->insert([
            /*1*/
            [
                'parent_id' => 0,
                'name' => 'Користувачі',
                'icon'=> 'fa-users',
                'link'=> '/admin',
                'type'=>'not_linked'
            ],
            /*2*/
            [
                'parent_id' => 1,
                'name' => 'Управління користувачами',
                'icon'=> 'fa-registered',
                'link'=> '/admin/customers_managment',
                'type'=>'linked'
            ],
            /*3*/
            [
                'parent_id' => 0,
                'name' => 'Товари',
                'icon'=> 'fa-gift',
                'link'=> '/admin',
                'type'=>'not_linked'
            ],
            /*4*/
            [
                'parent_id' => 3,
                'name' => 'Додати товар',
                'icon'=> 'fa-envelope','link'=> '/admin/add_good',
                'type'=>'linked'
            ],
            /*5*/
            [
                'parent_id' => 3,
                'name' => 'Видалити товар',
                'icon'=> 'fa-envelope','link'=> '/admin/delete_good',
                'type'=>'linked'
            ],
            /*6*/
            [
                'parent_id' => 3,
                'name' => 'Категоріі товаров',
                'icon'=> 'fa-envelope','link'=> '/admin/categories',
                'type'=>'linked'
            ],
            /*7*/

            [
                'parent_id' => 0,
                'name' => 'Замовлення',
                'icon'=> 'fa-envelope',
                'link'=> '/admin',
                'type'=>'linked'

            ],
            /*8*/
            [
                'parent_id' => 0,
                'name' => 'Реклама',
                'icon'=> 'fa-bullhorn',
                'link'=> '/admin',
                'type'=>'linked'
            ],
            /*9*/
            [
                'parent_id' => 0,
                'name' => 'Партнери',
                'icon'=> 'fa-thumbs-o-up',
                'link'=> '/admin/partners',
                'type'=>'not_linked'
            ],
            /*10*/
            [
                'parent_id' => 9,
                'name' => 'Додати логотипи',
                'icon'=> 'fa-envelope','link'=> '/admin/add_logos',
                'type'=>'linked'
            ],
            /*11*/
            [
                'parent_id' => 9,
                'name' => 'Видалити логотипи',
                'icon'=> 'fa-envelope','link'=> '/admin/del_logos',
                'type'=>'linked'
            ],
            /*12*/
            [
                'parent_id' => 0,
                'name' => 'Внешний вид',
                'icon'=> 'fa-envelope','link'=> '/admin/themes',
                'type'=>'not_linked'
            ],
            /*13*/
            [
                'parent_id' => 12,
                'name' => 'Категории товаров',
                'icon'=> 'fa-envelope','link'=> '/admin/menu_areas',
                'type'=>'linked'
            ],
            /*14*/
            [
                'parent_id' => 12,
                'name' => 'Редактор меню страниц сайта',
                'icon'=> 'fa-envelope','link'=> '/admin/site_navigation',
                'type'=>'linked'
            ],
            /*15*/
            [
                'parent_id' => 0,
                'name' => 'Подчиненные списки',
                'icon'=> 'fa-envelope',
                'link'=> '/admin/subordinate lists',
                'type'=>'linked'
            ],
        ]);
    }
}
