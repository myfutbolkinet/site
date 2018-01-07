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
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*2*/
            [
                'parent_id' => 0,
                'name' => 'Одежда, обувь, аксессуары',
                'link'=> '/Odezhda',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*3*/
            [
                'parent_id' => 0,
                'name' => 'Материалы для ремонта',
                'link'=> '/Materialy-dlya-remonta',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*4*/
            [
                'parent_id' => 0,
                'name' => 'Техника и электроника',
                'link'=> '/Tehnika-i-elektronika',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*5*/
            [
                'parent_id' => 0,
                'name' => 'Красота и здоровье',
                'link'=> '/Krasota-i-zdorove',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*6*/
            [
                'parent_id' => 0,
                'name' => 'Спорт и отдых',
                'link'=> '/Sport-i-otdykh',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*7*/
            [
                'parent_id' => 0,
                'name' => 'Товары для детей',
                'link'=> '/Tovary-dlya-detej',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*8*/
            [
                'parent_id' => 0,
                'name' => 'Товары для детей',
                'link'=> '/Tovary-dlya-detej',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*9*/
            [
                'parent_id' => 0,
                'name' => 'Подарки, хобби, книги',
                'link'=> '/Podarki-i-suveniry',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*10*/
            [
                'parent_id' => 0,
                'name' => 'Дом и сад',
                'link'=> '/Dom-i-sad',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*11*/
            [
                'parent_id' => 0,
                'name' => 'Домашние животные и зоотовары',
                'link'=> '/Domashnie-zhivotnye-i-zootovary',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*12*/
            [
                'parent_id' => 0,
                'name' => 'Украшения и часы',
                'link'=> '/Ukrasheniya-i-chasy',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*13*/
            [
                'parent_id' => 0,
                'name' => 'Канцтовары',
                'link'=> '/Kantstovary-1',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*14*/
            [
                'parent_id' => 0,
                'name' => 'Свадебные товары',
                'link'=> '/Svadebnye-tovary',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*15*/
            [
                'parent_id' => 0,
                'name' => 'Продукты питания и напитки',
                'link'=> '/Produkty-pitaniya-napitki',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*16*/
            [
                'parent_id' => 0,
                'name' => 'Грузовики автобусы и спецтехника',
                'link'=> '/Avto-moto-spetstehnika',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*17*/
            [
                'parent_id' => 0,
                'name' => 'Инструмент',
                'link'=> '/Instrument',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*18*/
            [
                'parent_id' => 0,
                'name' => 'Антиквариат и коллекционирование',
                'link'=> '/Antikvariat-i-predmety-roskoshi',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*19*/
            [
                'parent_id' => 0,
                'name' => 'Все для пляжа',
                'link'=> '/Vse-dlya-plyazha',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*20*/
            [
                'parent_id' => 0,
                'name' => 'Строительствоа',
                'link'=> '/Stroitelstvo',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*21*/
            [
                'parent_id' => 0,
                'name' => 'Военторг',
                'link'=> '/Voentorg',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*22*/
            [
                'parent_id' => 0,
                'name' => 'Здоровая неделя',
                'link'=> '/Zdorovaya-nedelya',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*23*/
            [
                'parent_id' => 0,'name' =>'Все на пикник',
                'link'=> '/Vse-na-piknik',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*24*/
            [
                'parent_id' => 0,'name' =>'Все для отпуска',
                'link'=> '/Vse-dlya-otpuska',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*25*/

            [
                'parent_id' => 1,
                'name' => 'Автозапчасти',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*26*/
            [
                'parent_id' => 1,
                'name' => 'Аксессуары для авто',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*27*/
            [
                'parent_id' => 1,
                'name' => 'Диски и шины',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*28*/
            [
                'parent_id' => 1,
                'name' => 'Автохимия, автокосметика и автомасла',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*29*/
            [
                'parent_id' => 1,
                'name' => 'Автомобильная электроника',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*30*/
            [
                'parent_id' => 1,
                'name' => 'Электрооборудование автомобилей',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*31*/
            [
                'parent_id' => 1,
                'name' => 'Мототехника',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*32*/
            [
                'parent_id' => 1,
                'name' => 'Дополнительное оборудование',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*33*/
            [
                'parent_id' => 1,
                'name' => 'Автоинструмент',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*34*/
            [
                'parent_id' => 1,
                'name' => 'Легковые автомобили',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*35*/
            [
                'parent_id' => 1,
                'name' => 'Легковые элктромобили',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*36*/
            [
                'parent_id' => 1,
                'name' => 'Автодома',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*37*/
            [
                'parent_id' => 25,
                'name' => 'Детали ходовой',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*38*/
            [
                'parent_id' => 25,
                'name' => 'Двигатели и детали двигателя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*39*/
            [
                'parent_id' => 25,
                'name' => 'Кузовные запчасти',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*40*/
            [
                'parent_id' => 25,
                'name' => 'Световые приборы транспорта',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*41*/
            [
                'parent_id' => 25,
                'name' => 'Система питания двигателя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*42*/
            [
                'parent_id' => 25,
                'name' => 'Запчасти тормозной системы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*43*/
            [
                'parent_id' => 25,
                'name' => 'Детали трансмиссии транспорта',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*44*/
            [
                'parent_id' => 25,
                'name' => 'Кривошипно-шатунный механизм',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*45*/
            [
                'parent_id' => 25,
                'name' => 'Система охлаждения двигателя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*46*/
            [
                'parent_id' => 25,
                'name' => 'Органы управления',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*47*/
            [
                'parent_id' => 25,
                'name' => 'Детали мостов и привода трансмиссии',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*48*/
            [
                'parent_id' => 25,
                'name' => 'Автостекла',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*49*/
            [
                'parent_id' => 25,
                'name' => 'Система зажигания двигателя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*50*/
            [
                'parent_id' => 25,
                'name' => 'Детали салона автомобиля',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*51*/
            [
                'parent_id' => 25,
                'name' => 'Система смазки двигателя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*52*/
            [
                'parent_id' => 25,
                'name' => 'Система выпуска отработавших газов',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*53*/
            [
                'parent_id' => 25,
                'name' => 'Автозеркала и комплектующие',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*54*/
            [
                'parent_id' => 25,
                'name' => 'Газораспределительный механизм',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*55*/
            [
                'parent_id' => 25,
                'name' => 'Кондиционеры и комплектующие',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*56*/
            [
                'parent_id' => 25,
                'name' => 'Фильтры для авто-мото и грузовой техники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*57*/
            [
                'parent_id' => 25,
                'name' => 'Предпусковые обогреватели и автономные отопители',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*58*/
            [
                'parent_id' => 25,
                'name' => 'Шайбы, гровер',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*59*/
            [
                'parent_id' => 25,
                'name' => 'Ремкомплекты автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*60*/
            [
                'parent_id' => 25,
                'name' => 'Стеклоочистители, дворники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*61*/
            [
                'parent_id' => 25,
                'name' => 'Система очистки окон и фар автомобиля',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*62*/
            [
                'parent_id' => 25,
                'name' => 'Авторазборка',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*63*/
            [
                'parent_id' => 37,
                'name' => 'Амортизаторы,стойки,подушки стоек',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*64*/
            [
                'parent_id' => 37,
                'name' => 'Подшипники для транспорта',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*65*/
            [
                'parent_id' => 37,
                'name' => 'Пружины,рессоры для техники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*66*/
            [
                'parent_id' => 37,
                'name' => 'Сайлентблоки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*67*/
            [
                'parent_id' => 37,
                'name' => 'Стабилизаторы,стойки стабилизатора,тяги стабилизатора',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*68*/
            [
                'parent_id' => 37,
                'name' => 'Втулки автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*69*/
            [
                'parent_id' => 37,
                'name' => 'Пневморессоры, пневмоподушки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*70*/
            [
                'parent_id' => 37,
                'name' => 'Рычаги,тяги',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*71*/
            [
                'parent_id' => 37,
                'name' => 'Шаровые опоры',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*72*/
            [
                'parent_id' => 37,
                'name' => 'Пыльники,отбойники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*73*/
            [
                'parent_id' => 37,
                'name' => 'Ступицы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*74*/
            [
                'parent_id' => 37,
                'name' => 'Автомобильные опоры стоек',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*75*/
            [
                'parent_id' => 37,
                'name' => 'Поворотные кулаки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*76*/
            [
                'parent_id' => 37,
                'name' => 'Балки передней и задней подвески',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*77*/
            [
                'parent_id' => 37,
                'name' => 'Ступичные болты,шпильки и гайки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*78*/
            [
                'parent_id' => 37,
                'name' => 'Автомобильные шкворни',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*79*/
            [
                'parent_id' => 37,
                'name' => 'Крепежи узлов подвески',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*80*/
            [
                'parent_id' => 37,
                'name' => 'Торсионы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*81*/
            [
                'parent_id' => 38,
                'name' => 'Турбины, турбокомпрессоры',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*82*/
            [
                'parent_id' => 38,
                'name' => 'Двигатели для техники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*83*/
            [
                'parent_id' => 38,
                'name' => 'Подшипники для транспорта',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*84*/
            [
                'parent_id' => 38,
                'name' => 'Прокладки для техники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*85*/
            [
                'parent_id' => 38,
                'name' => 'Сальники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*86*/
            [
                'parent_id' => 38,
                'name' => 'Ремни приводные автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*87*/
            [
                'parent_id' => 38,
                'name' => 'Ролики и натяжители',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*88*/
            [
                'parent_id' => 38,
                'name' => 'Подушки двигателя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*89*/
            [
                'parent_id' => 38,
                'name' => 'Шкивы двигателей',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*90*/
            [
                'parent_id' => 38,
                'name' => 'Ремни вариатора',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*91*/
            [
                'parent_id' => 38,
                'name' => 'Ремни вариаторные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*92*/
            [
                'parent_id' => 39,
                'name' => 'Бамперы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*93*/
            [
                'parent_id' => 39,
                'name' => 'Автомобильные двери',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*94*/
            [
                'parent_id' => 39,
                'name' => 'Крылья, арки автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*95*/
            [
                'parent_id' => 39,
                'name' => 'Пистоны, заглушки, крепежные элементы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*96*/
            [
                'parent_id' => 39,
                'name' => 'Брызговики',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*97*/
            [
                'parent_id' => 39,
                'name' => 'Защита картера и КПП',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*98*/
            [
                'parent_id' => 39,
                'name' => 'Фаркопы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*99*/
            [
                'parent_id' => 39,
                'name' => 'Автомобильные решетки на бамперы и радиаторы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*100*/
            [
                'parent_id' => 39,
                'name' => 'Капоты',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*101*/
            [
                'parent_id' => 39,
                'name' => 'Автомобильные дверные ручки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*102*/
            [
                'parent_id' => 39,
                'name' => 'Стеклоподъемники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*103*/
            [
                'parent_id' => 39,
                'name' => 'Автомобильные подкрылки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*104*/
            [
                'parent_id' => 39,
                'name' => 'Автомобильные эиблемы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*105*/
            [
                'parent_id' => 39,
                'name' => 'Автомобильные замки и ключи',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*106*/
            [
                'parent_id' => 39,
                'name' => 'Передние панели кузова',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*107*/
            [
                'parent_id' => 39,
                'name' => 'Амортизаторы капота, багажника',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*108*/
            [
                'parent_id' => 39,
                'name' => 'Усилители бампера, буфер бампера',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*109*/
            [
                'parent_id' => 39,
                'name' => 'Кронштейны автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*110*/
            [
                'parent_id' => 39,
                'name' => 'Петли, ограничители автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*111*/
            [
                'parent_id' => 39,
                'name' => 'Крышки багажника',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*112*/
            [
                'parent_id' => 39,
                'name' => 'Задние панели кузова',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*113*/
            [
                'parent_id' => 39,
                'name' => 'Боковины кузова',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*114*/
            [
                'parent_id' => 39,
                'name' => 'Лонжироны, подрамники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*115*/
            [
                'parent_id' => 39,
                'name' => 'Кузова легковых автомобилей',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*116*/
            [
                'parent_id' => 39,
                'name' => 'Лючки, крышки бензобака',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*117*/
            [
                'parent_id' => 39,
                'name' => 'Автомобильные крыши',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*118*/
            [
                'parent_id' => 39,
                'name' => 'Автомобильные люки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*119*/
            [
                'parent_id' => 39,
                'name' => 'Ноускаты',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],






        ]);







        DB::table('admin_categories')->insert([
            /*1*/
            [
                'parent_id' => 0,
                'name' => 'Користувачі',
                'icon'=> 'fa-users',
                'link'=> '/admin'
            ],
            /*2*/
            [
                'parent_id' => 1,
                'name' => 'Управління користувачами',
                'icon'=> 'fa-registered',
                'link'=> '/admin/customers_managment'
            ],
            /*3*/
            [
                'parent_id' => 0,
                'name' => 'Товари',
                'icon'=> 'fa-gift',
                'link'=> '/admin'
            ],
            /*4*/
            [
                'parent_id' => 3,
                'name' => 'Додати товар',
                'icon'=> 'fa-envelope','link'=> '/admin/add_good'
            ],
            /*5*/
            [
                'parent_id' => 3,
                'name' => 'Видалити товар',
                'icon'=> 'fa-envelope','link'=> '/admin/delete_good'
            ],
            /*6*/
            [
                'parent_id' => 3,
                'name' => 'Категоріі товаров',
                'icon'=> 'fa-envelope','link'=> '/admin/categories'
            ],
            /*7*/

            [
                'parent_id' => 0,
                'name' => 'Замовлення',
                'icon'=> 'fa-envelope',
                'link'=> '/admin'

            ],
            /*8*/
            [
                'parent_id' => 0,
                'name' => 'Реклама',
                'icon'=> 'fa-bullhorn',
                'link'=> '/admin'
            ],
            /*9*/
            [
                'parent_id' => 0,
                'name' => 'Партнери',
                'icon'=> 'fa-thumbs-o-up',
                'link'=> '/admin/partners'
            ],
            /*10*/
            [
                'parent_id' => 9,
                'name' => 'Додати логотипи',
                'icon'=> 'fa-envelope','link'=> '/admin/add_logos'
            ],
            /*11*/
            [
                'parent_id' => 9,
                'name' => 'Видалити логотипи',
                'icon'=> 'fa-envelope','link'=> '/admin/del_logos'
            ],
            /*12*/
            [
                'parent_id' => 0,
                'name' => 'Внешний вид',
                'icon'=> 'fa-envelope','link'=> '/admin/themes'
            ],
            /*13*/
            [
                'parent_id' => 12,
                'name' => 'Меню категорий товаров',
                'icon'=> 'fa-envelope','link'=> '/admin/nav_goods_menu'
            ],
        ]);

        DB::table('superadmin_categories')->insert([

            [
                'parent_id' => 0,
                'name' => 'Користувачі',
                'icon'=> 'fa-users',
                'link'=> '/superadmin'
            ],
            [
                'parent_id' => 1,
                'name' => 'Управління користувачами',
                'icon'=> 'fa-registered',
                'link'=> '/superadmin/customers_managment'
            ],
            [
                'parent_id' => 0,
                'name' => 'Товари',
                'icon'=> 'fa-gift',
                'link'=> '/superadmin'
            ],
            [
                'parent_id' => 3,
                'name' => 'Додати товар',
                'icon'=> 'fa-envelope','link'=> '/superadmin/add_good'
            ],
            [
                'parent_id' => 3,
                'name' => 'Видалити товар',
                'icon'=> 'fa-envelope','link'=> '/superadmin/delete_good'
            ],
            [
                'parent_id' => 3,
                'name' => 'Категоріі',
                'icon'=> 'fa-envelope','link'=> '/superadmin/categories'
            ],
            [
                'parent_id' => 3,
                'name' => 'Свойства товаров',
                'icon'=> 'fa-envelope','link'=> '/superadmin/goods_properties'
            ],
            [
                'parent_id' => 0,
                'name' => 'Замовлення',
                'icon'=> 'fa-envelope',
                'link'=> '/superadmin'

            ],
            [
                'parent_id' => 0,
                'name' => 'Реклама',
                'icon'=> 'fa-bullhorn',
                'link'=> '/superadmin'
            ],
            [
                'parent_id' => 0,
                'name' => 'Партнери',
                'icon'=> 'fa-thumbs-o-up',
                'link'=> '/superadmin/partners'
            ],
            [
                'parent_id' => 9,
                'name' => 'Додати логотипи',
                'icon'=> 'fa-envelope','link'=> '/superadmin/add_logos'
            ],
            [
                'parent_id' => 9,
                'name' => 'Видалити логотипи',
                'icon'=> 'fa-envelope','link'=> '/superadmin/del_logos'
            ],
            [
                'parent_id' => 6,
                'name' => 'Добавить категорию',
                'icon'=> 'fa-envelope',
                'link'=> '/superadmin/categories/add'
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
