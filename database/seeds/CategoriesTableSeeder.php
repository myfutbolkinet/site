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
            /*1*/
            [
                'parent_id' => 0,
                'name' => 'Одежда с принтами',
                'link'=> '/Zhenskaya-odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*2*/

            [
                'parent_id' => 0,
                'name' => 'Одежда под печать',
                'link'=> '/Zhenskaya-odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*3*/

            [
                'parent_id' => 0,
                'name' => 'Принты',
                'link'=> '/Zhenskaya-odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*4*/

            [
                'parent_id' => 1,
                'name' => 'Топ продаж',
                'link'=> '/Zhenskaya-odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*5*/

            [
                'parent_id' => 1,
                'name' => 'Модные',
                'link'=> '/Zhenskaya-odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*6*/

            [
                'parent_id' => 1,
                'name' => 'Новые',
                'link'=> '/Zhenskaya-odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*7*/

            [
                'parent_id' => 1,
                'name' => 'Спорт',
                'link'=> '/Zhenskaya-odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*8*/

            [
                'parent_id' => 1,
                'name' => 'Хобби',
                'link'=> '/Zhenskaya-odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*9*/

            [
                'parent_id' => 1,
                'name' => 'Праздники',
                'link'=> '/Zhenskaya-odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*10*/

            [
                'parent_id' => 1,
                'name' => 'И тд',
                'link'=> '/Zhenskaya-odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*11*/

            [
                'parent_id' => 2,
                'name' => 'Однотонная одежда',
                'link'=> '/Zhenskaya-odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*12*/

            [
                'parent_id' => 2,
                'name' => 'Футболки',
                'link'=> '/Zhenskaya-odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*13*/

            [
                'parent_id' => 2,
                'name' => 'Майки',
                'link'=> '/Zhenskaya-odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],


        ]);








        DB::table('salesmanager_categories')->insert([

            [
                'parent_id' => 0,
                'name' => 'Клиенты',
                'icon'=> 'fa-users',
                'link'=> '/salesmanager'
            ],
            [
                'parent_id' => 1,
                'name' => 'Управление клиентами',
                'icon'=> 'fa-registered',
                'link'=> '/salesmanager/clients_managment'
            ],
            [
                'parent_id' => 2,
                'name' => 'Добавить клиента',
                'icon'=> 'fa-gift',
                'link'=> '/salesmanager/client/add'
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
