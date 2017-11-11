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
                'name' => 'Авто Мото',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*2*/
            [
                'parent_id' => 0,
                'name' => 'Одежда, обувь, аксессуары',
                'link'=> '/Odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*3*/
            [
                'parent_id' => 0,
                'name' => 'Материалы для ремонта',
                'link'=> '/Materialy-dlya-remonta',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*4*/
            [
                'parent_id' => 0,
                'name' => 'Техника и электроника',
                'link'=> '/Tehnika-i-elektronika',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*5*/
            [
                'parent_id' => 0,
                'name' => 'Красота и здоровье',
                'link'=> '/Krasota-i-zdorove',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*6*/
            [
                'parent_id' => 0,
                'name' => 'Спорт и отдых',
                'link'=> '/Sport-i-otdykh',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*7*/
            [
                'parent_id' => 0,
                'name' => 'Товары для детей',
                'link'=> '/Tovary-dlya-detej',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*8*/
            [
                'parent_id' => 0,
                'name' => 'Товары для детей',
                'link'=> '/Tovary-dlya-detej',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*9*/
            [
                'parent_id' => 0,
                'name' => 'Подарки, хобби, книги',
                'link'=> '/Podarki-i-suveniry',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*10*/
            [
                'parent_id' => 0,
                'name' => 'Дом и сад',
                'link'=> '/Dom-i-sad',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*11*/
            [
                'parent_id' => 0,
                'name' => 'Домашние животные и зоотовары',
                'link'=> '/Domashnie-zhivotnye-i-zootovary',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*12*/
            [
                'parent_id' => 0,
                'name' => 'Украшения и часы',
                'link'=> '/Ukrasheniya-i-chasy',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*13*/
            [
                'parent_id' => 0,
                'name' => 'Канцтовары',
                'link'=> '/Kantstovary-1',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*14*/
            [
                'parent_id' => 0,
                'name' => 'Свадебные товары',
                'link'=> '/Svadebnye-tovary',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*15*/
            [
                'parent_id' => 0,
                'name' => 'Продукты питания и напитки',
                'link'=> '/Produkty-pitaniya-napitki',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*16*/
            [
                'parent_id' => 0,
                'name' => 'Грузовики автобусы и спецтехника',
                'link'=> '/Avto-moto-spetstehnika',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*17*/
            [
                'parent_id' => 0,
                'name' => 'Инструмент',
                'link'=> '/Instrument',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*18*/
            [
                'parent_id' => 0,
                'name' => 'Антиквариат и коллекционирование',
                'link'=> '/Antikvariat-i-predmety-roskoshi',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*19*/
            [
                'parent_id' => 0,
                'name' => 'Все для пляжа',
                'link'=> '/Vse-dlya-plyazha',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*20*/
            [
                'parent_id' => 0,
                'name' => 'Строительствоа',
                'link'=> '/Stroitelstvo',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*21*/
            [
                'parent_id' => 0,
                'name' => 'Военторг',
                'link'=> '/Voentorg',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*22*/
            [
                'parent_id' => 0,
                'name' => 'Здоровая неделя',
                'link'=> '/Zdorovaya-nedelya',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*23*/
            [
                'parent_id' => 0,'name' =>'Все на пикник',
                'link'=> '/Vse-na-piknik',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*24*/
            [
                'parent_id' => 0,'name' =>'Все для отпуска',
                'link'=> '/Vse-dlya-otpuska',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*25*/

            [
                'parent_id' => 1,
                'name' => 'Автозапчасти',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*26*/
            [
                'parent_id' => 1,
                'name' => 'Аксессуары для авто',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*27*/
            [
                'parent_id' => 1,
                'name' => 'Диски и шины',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*28*/
            [
                'parent_id' => 1,
                'name' => 'Автохимия, автокосметика и автомасла',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*29*/
            [
                'parent_id' => 1,
                'name' => 'Автомобильная электроника',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*30*/
            [
                'parent_id' => 1,
                'name' => 'Электрооборудование автомобилей',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*31*/
            [
                'parent_id' => 1,
                'name' => 'Мототехника',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*32*/
            [
                'parent_id' => 1,
                'name' => 'Дополнительное оборудование',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*33*/
            [
                'parent_id' => 1,
                'name' => 'Автоинструмент',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*34*/
            [
                'parent_id' => 1,
                'name' => 'Легковые автомобили',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*35*/
            [
                'parent_id' => 1,
                'name' => 'Легковые элктромобили',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*36*/
            [
                'parent_id' => 1,
                'name' => 'Автодома',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*37*/
            [
                'parent_id' => 25,
                'name' => 'Детали ходовой',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*38*/
            [
                'parent_id' => 25,
                'name' => 'Двигатели и детали двигателя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*39*/
            [
                'parent_id' => 25,
                'name' => 'Кузовные запчасти',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*40*/
            [
                'parent_id' => 25,
                'name' => 'Световые приборы транспорта',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*41*/
            [
                'parent_id' => 25,
                'name' => 'Система питания двигателя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*42*/
            [
                'parent_id' => 25,
                'name' => 'Запчасти тормозной системы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*43*/
            [
                'parent_id' => 25,
                'name' => 'Детали трансмиссии транспорта',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*44*/
            [
                'parent_id' => 25,
                'name' => 'Кривошипно-шатунный механизм',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*45*/
            [
                'parent_id' => 25,
                'name' => 'Система охлаждения двигателя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*46*/
            [
                'parent_id' => 25,
                'name' => 'Органы управления',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*47*/
            [
                'parent_id' => 25,
                'name' => 'Детали мостов и привода трансмиссии',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*48*/
            [
                'parent_id' => 25,
                'name' => 'Автостекла',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*49*/
            [
                'parent_id' => 25,
                'name' => 'Система зажигания двигателя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*50*/
            [
                'parent_id' => 25,
                'name' => 'Детали салона автомобиля',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*51*/
            [
                'parent_id' => 25,
                'name' => 'Система смазки двигателя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*52*/
            [
                'parent_id' => 25,
                'name' => 'Система выпуска отработавших газов',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*53*/
            [
                'parent_id' => 25,
                'name' => 'Автозеркала и комплектующие',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*54*/
            [
                'parent_id' => 25,
                'name' => 'Газораспределительный механизм',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*55*/
            [
                'parent_id' => 25,
                'name' => 'Кондиционеры и комплектующие',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*56*/
            [
                'parent_id' => 25,
                'name' => 'Фильтры для авто-мото и грузовой техники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*57*/
            [
                'parent_id' => 25,
                'name' => 'Предпусковые обогреватели и автономные отопители',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*58*/
            [
                'parent_id' => 25,
                'name' => 'Шайбы, гровер',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*59*/
            [
                'parent_id' => 25,
                'name' => 'Ремкомплекты автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*60*/
            [
                'parent_id' => 25,
                'name' => 'Стеклоочистители, дворники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*61*/
            [
                'parent_id' => 25,
                'name' => 'Система очистки окон и фар автомобиля',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*62*/
            [
                'parent_id' => 25,
                'name' => 'Авторазборка',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],



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
