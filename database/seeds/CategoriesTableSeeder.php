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
                'name' => 'Женская одежда',
                'link'=> '/Zhenskaya-odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*2*/
            [
                'parent_id' => 1,
                'name' => 'Платья',
                'link'=> '/Platya',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*3*/
            [
                'parent_id' => 1,
                'name' => 'Блузы',
                'link'=> '/Bluzi',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*4*/
            [
                'parent_id' => 1,
                'name' => 'Кардиганы, ветровки',
                'link'=> '/kardigani-vetrovki',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*5*/
            [
                'parent_id' => 1,
                'name' => 'Для пышных дам',
                'link'=> '/Dly-pishnih-dam',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*6*/
            [
                'parent_id' => 1,
                'name' => 'Юбки',
                'link'=> '/Ubki',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*7*/
            [
                'parent_id' => 1,
                'name' => 'Брюки, комбенизоны',
                'link'=> '/Bruki-kombenizoni',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*8*/
            [
                'parent_id' => 1,
                'name' => 'Товары со скидкой',
                'link'=> '/Tovary-so-skidkoy',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*9*/
            [
                'parent_id' => 1,
                'name' => 'Кофты',
                'link'=> '/Kofti',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*10*/
            [
                'parent_id' => 1,
                'name' => 'Спортивная одежда',
                'link'=> '/Sportivnaya-odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*11*/
            [
                'parent_id' => 0,
                'name' => 'Детская одежда',
                'link'=> '/Detskaya-odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*12*/
            [
                'parent_id' => 11,
                'name' => 'Платья для девочек',
                'link'=> '/Platya-dlya-devocheck',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*13*/
            [
                'parent_id' => 0,
                'name' => 'Школьная форма',
                'link'=> '/Shkolnaya-forma',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*14*/
            [
                'parent_id' => 13,
                'name' => 'Для девочек',
                'link'=> '/Dlya-devochek',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*15*/
            [
                'parent_id' => 0,
                'name' => 'Аксессуары',
                'link'=> '/Aksessuari',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*16*/
            [
                'parent_id' => 15,
                'name' => 'Бижутерия',
                'link'=> '/Bizhuteria',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ]

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
