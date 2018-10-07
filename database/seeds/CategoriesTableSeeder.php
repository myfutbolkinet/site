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
                'name' => 'Строительство',
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
                'parent_id' => 0,
                'name' =>'Все на пикник',
                'link'=> '/Vse-na-piknik',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>false
            ],
            /*24*/
            [
                'parent_id' => 0,
                'name' =>'Все для отпуска',
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
                'name' => 'Сситемы очистки окон и фар автомобиля',
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
            /*120*/
            [
                'parent_id' => 40,
                'name' => 'Лампочки для световых приборов автомобиля',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*121*/
            [
                'parent_id' => 40,
                'name' => 'Автомобильные передние фары',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*122*/
            [
                'parent_id' => 40,
                'name' => 'Задние фонари, фонари видимости',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*123*/
            [
                'parent_id' => 40,
                'name' => 'Дополнительные противотуманные фары',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*124*/
            [
                'parent_id' => 40,
                'name' => 'Комплекты ксенона',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*125*/
            [
                'parent_id' => 40,
                'name' => 'Повторители поворотов',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*126*/
            [
                'parent_id' => 40,
                'name' => 'Стекла фар и фонарей',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*127*/
            [
                'parent_id' => 40,
                'name' => 'Блоки розжига',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*128*/
            [
                'parent_id' => 40,
                'name' => 'Плафоны внутреннего освещения',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*129*/
            [
                'parent_id' => 40,
                'name' => 'Отражатели, корпуса фар и фонарей',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*130*/
            [
                'parent_id' => 40,
                'name' => 'Световые приборы транспорта, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*131*/
            [
                'parent_id' => 41,
                'name' => 'Турбины, турбокомпрессоры',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*132*/
            [
                'parent_id' => 41,
                'name' => 'Распылители и топливные форсунки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*133*/
            [
                'parent_id' => 41,
                'name' => 'Фильтры топливные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*134*/
            [
                'parent_id' => 41,
                'name' => 'Фильтры воздушные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*135*/
            [
                'parent_id' => 41,
                'name' => 'Топливные насосы высокого давления',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*136*/
            [
                'parent_id' => 41,
                'name' => 'Автомобильные топливные насосы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*137*/
            [
                'parent_id' => 41,
                'name' => 'Топливные трубки, магистрали и рампы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*138*/
            [
                'parent_id' => 41,
                'name' => 'Топливные, маслянные баки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*139*/
            [
                'parent_id' => 41,
                'name' => 'Корбюраторы и комплектующие',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*140*/
            [
                'parent_id' => 41,
                'name' => 'Комплектующие системы питания',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*141*/
            [
                'parent_id' => 41,
                'name' => 'Дроссельные заслонки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*142*/
            [
                'parent_id' => 41,
                'name' => 'Впускные коллекторы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*143*/
            [
                'parent_id' => 41,
                'name' => 'Регуляторы давления топлива',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*144*/
            [
                'parent_id' => 41,
                'name' => 'Топливные насосы низкого давления',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*145*/
            [
                'parent_id' => 41,
                'name' => 'Штатные воздухозаборники и комплектующие',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*146*/
            [
                'parent_id' => 41,
                'name' => 'Горловины, пробки топливного бака',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*147*/
            [
                'parent_id' => 41,
                'name' => 'Детали системы питания, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*148*/
            [
                'parent_id' => 42,
                'name' => 'Тормозные колодки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*149*/
            [
                'parent_id' => 42,
                'name' => 'Тормозные диски',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*150*/
            [
                'parent_id' => 42,
                'name' => 'Тормозные суппорта, ремкомплекты суппорта',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*151*/
            [
                'parent_id' => 42,
                'name' => 'Детали тормозной системы грузовиков',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*152*/
            [
                'parent_id' => 42,
                'name' => 'Тормозные циллиндры',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*153*/
            [
                'parent_id' => 42,
                'name' => 'Тормозные шланги, трубы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*154*/
            [
                'parent_id' => 42,
                'name' => 'Тормозные барабаны',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*155*/
            [
                'parent_id' => 42,
                'name' => 'Усилители тормозов',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*156*/
            [
                'parent_id' => 42,
                'name' => 'Детали тормозной системы ABS, EBD',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*157*/
            [
                'parent_id' => 42,
                'name' => 'Комплектующие тормозной системы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*158*/
            [
                'parent_id' => 42,
                'name' => 'Элементы тормозной системы, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*159*/
            [
                'parent_id' => 43,
                'name' => 'Элементы механизма сцепления',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*160*/
            [
                'parent_id' => 43,
                'name' => 'Подшипники для транспорта',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*161*/
            [
                'parent_id' => 43,
                'name' => 'Прокладки для техники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*162*/
            [
                'parent_id' => 43,
                'name' => 'Коробки переключения передач (КПП)',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*163*/
            [
                'parent_id' => 43,
                'name' => 'Сальники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*164*/
            [
                'parent_id' => 43,
                'name' => 'Коробки отбора мощности',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*165*/
            [
                'parent_id' => 43,
                'name' => 'Шестерни трансмиссии',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*166*/
            [
                'parent_id' => 43,
                'name' => 'Валы для коробки передач и редуктора',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*167*/
            [
                'parent_id' => 43,
                'name' => 'Синхронизаторы коробки передач',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*168*/
            [
                'parent_id' => 43,
                'name' => 'Фильтры трансмиссионные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*169*/
            [
                'parent_id' => 43,
                'name' => 'Детали трансмиссии, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*170*/
            [
                'parent_id' => 44,
                'name' => 'Вкладыши коренные и шатунные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*171*/
            [
                'parent_id' => 44,
                'name' => 'Поршневые кольца',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*172*/
            [
                'parent_id' => 44,
                'name' => 'Поршни',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*173*/
            [
                'parent_id' => 44,
                'name' => 'Коленчатый вал, шестерни коленчатого вала',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*174*/
            [
                'parent_id' => 44,
                'name' => 'Головки блока цилиндров',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*175*/
            [
                'parent_id' => 44,
                'name' => 'Поршневые группы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*176*/
            [
                'parent_id' => 44,
                'name' => 'Маховики двигателей',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*177*/
            [
                'parent_id' => 44,
                'name' => 'Шатуны',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*178*/
            [
                'parent_id' => 44,
                'name' => 'Гильзы двигателя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*179*/
            [
                'parent_id' => 44,
                'name' => 'Блоки цилиндров',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*180*/
            [
                'parent_id' => 44,
                'name' => 'Поршневые пальцы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*181*/
            [
                'parent_id' => 44,
                'name' => 'Крышки головки блока цилиндров',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*182*/
            [
                'parent_id' => 44,
                'name' => 'Детали КШМ',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*183*/
            [
                'parent_id' => 44,
                'name' => 'Кривошипно-шатунный механизм, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*184*/
            [
                'parent_id' => 45,
                'name' => 'Радиаторы автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*185*/
            [
                'parent_id' => 45,
                'name' => 'Автомобильные водяные насосы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*186*/
            [
                'parent_id' => 45,
                'name' => 'Термостаты и комплектующие системы охлаждения',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*187*/
            [
                'parent_id' => 45,
                'name' => 'Автомобильные диффузоры и вентиляторы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*188*/
            [
                'parent_id' => 45,
                'name' => 'Компрессора системы охлаждения',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*189*/
            [
                'parent_id' => 45,
                'name' => 'Фильтры антикоррозионные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*190*/
            [
                'parent_id' => 46,
                'name' => 'Сальники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*191*/
            [
                'parent_id' => 46,
                'name' => 'Наконечники рулевых тяг',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*192*/
            [
                'parent_id' => 46,
                'name' => 'Пыльники, отбойники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*193*/
            [
                'parent_id' => 46,
                'name' => 'Гидроусилитель руля и комплектующие',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*194*/
            [
                'parent_id' => 46,
                'name' => 'Рулевой механизм',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*195*/
            [
                'parent_id' => 46,
                'name' => 'Рулевые тяги',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*196*/
            [
                'parent_id' => 46,
                'name' => 'Тросики автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*197*/
            [
                'parent_id' => 46,
                'name' => 'Педали автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*198*/
            [
                'parent_id' => 46,
                'name' => 'Органы управления, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*199*/
            [
                'parent_id' => 47,
                'name' => 'Сальники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*200*/
            [
                'parent_id' => 47,
                'name' => 'Шарниры равных угловых скоростей, приводные валы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*201*/
            [
                'parent_id' => 47,
                'name' => 'Карданные валы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*202*/
            [
                'parent_id' => 47,
                'name' => 'Карданная передача',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*203*/
            [
                'parent_id' => 47,
                'name' => 'Редукторы мостов',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*204*/
            [
                'parent_id' => 47,
                'name' => 'Задний мост',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*205*/
            [
                'parent_id' => 47,
                'name' => 'Передний мост',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*206*/
            [
                'parent_id' => 47,
                'name' => 'Раздаточные коробки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*207*/
            [
                'parent_id' => 47,
                'name' => 'Средний мост',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*208*/
            [
                'parent_id' => 47,
                'name' => 'Детали мостов и привода трансмиссии, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*209*/
            [
                'parent_id' => 47,
                'name' => 'Муфты свободного хода',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*210*/
            [
                'parent_id' => 47,
                'name' => 'Муфты карданного вала',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*211*/
            [
                'parent_id' => 49,
                'name' => 'Свечи накаливания и зажигания',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*212*/
            [
                'parent_id' => 49,
                'name' => 'Замки зажигания и ключи',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*213*/
            [
                'parent_id' => 49,
                'name' => 'Автомобильные провода зажигания',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*214*/
            [
                'parent_id' => 49,
                'name' => 'Катушки зажигания, модули зажигания',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*215*/
            [
                'parent_id' => 49,
                'name' => 'Трамблеры автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*216*/
            [
                'parent_id' => 49,
                'name' => 'Комплектующие системы зажигания',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*217*/
            [
                'parent_id' => 49,
                'name' => 'Автомобильные коммутаторы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*218*/
            [
                'parent_id' => 49,
                'name' => 'Системы зажигания, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*219*/
            [
                'parent_id' => 50,
                'name' => 'Пистоны, заглушки, крепежные элементы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*220*/
            [
                'parent_id' => 50,
                'name' => 'Автомобильные ремни и подушки безопасности',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*221*/
            [
                'parent_id' => 50,
                'name' => 'Обшивки дверей, багажника, потолков, накладники салона',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*222*/
            [
                'parent_id' => 50,
                'name' => 'Сидения автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*223*/
            [
                'parent_id' => 50,
                'name' => 'Торпедо, накладки на торпедо, воздуховоды',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*224*/
            [
                'parent_id' => 50,
                'name' => 'Ручки КПП и ручника',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*225*/
            [
                'parent_id' => 50,
                'name' => 'Рули',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*226*/
            [
                'parent_id' => 50,
                'name' => 'Бардачки и перчаточные ящики',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*227*/
            [
                'parent_id' => 50,
                'name' => 'Детали салона автомобиля, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*228*/
            [
                'parent_id' => 51,
                'name' => 'Фильтры маслянные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*229*/
            [
                'parent_id' => 51,
                'name' => 'Автомобильные маслянные насосы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*230*/
            [
                'parent_id' => 51,
                'name' => 'Фильтры гидравлические',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*231*/
            [
                'parent_id' => 51,
                'name' => 'Поддоны двигателя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*232*/
            [
                'parent_id' => 51,
                'name' => 'Комплектующие системы смазки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*233*/
            [
                'parent_id' => 51,
                'name' => 'Детали системы смазки, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*234*/
            [
                'parent_id' => 52,
                'name' => 'Глушители',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*235*/
            [
                'parent_id' => 52,
                'name' => 'Гофры для выхлопных систем',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*236*/
            [
                'parent_id' => 52,
                'name' => 'Насадки и наконечники на глушитель',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*237*/
            [
                'parent_id' => 52,
                'name' => 'Резонаторы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*238*/
            [
                'parent_id' => 52,
                'name' => 'Приемные трубы глушителя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*239*/
            [
                'parent_id' => 52,
                'name' => 'Выпускные коллекторы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*240*/
            [
                'parent_id' => 52,
                'name' => 'Катализаторы для транспорта',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*241*/
            [
                'parent_id' => 52,
                'name' => 'Пламегасители',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*242*/
            [
                'parent_id' => 52,
                'name' => 'Крипежи элементов выхлопной системы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*243*/
            [
                'parent_id' => 52,
                'name' => 'Комплектующие системы выпуска отработавших газов',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*244*/
            [
                'parent_id' => 52,
                'name' => 'Выхлопные системы в сборе',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*245*/
            [
                'parent_id' => 52,
                'name' => 'Выхлопная система, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*246*/
            [
                'parent_id' => 54,
                'name' => 'Ремни ГРМ, цепи ГРМ',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*247*/
            [
                'parent_id' => 54,
                'name' => 'Клапаны, оси, коромысла двигателя, толкатели клапонов',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*248*/
            [
                'parent_id' => 54,
                'name' => 'Распределительный вал, шестерни распределительного вала',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*249*/
            [
                'parent_id' => 54,
                'name' => 'Детали ГРМ',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*250*/
            [
                'parent_id' => 54,
                'name' => 'Гидрокомпенсаторы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*251*/
            [
                'parent_id' => 54,
                'name' => 'Газораспределительный механизм, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*252*/
            [
                'parent_id' => 55,
                'name' => 'Комплектующие системы отопления',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*253*/
            [
                'parent_id' => 55,
                'name' => 'Детали для автокондиционеров',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*254*/
            [
                'parent_id' => 55,
                'name' => 'Компрессоры кондиционера',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*255*/
            [
                'parent_id' => 55,
                'name' => 'Автомобильные комплектующие для кондиционеров, отопления, охлаждения, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*256*/
            [
                'parent_id' => 55,
                'name' => 'Автомобильные кондиционеры',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*257*/
            [
                'parent_id' => 55,
                'name' => 'Конденсаторы кондиционера',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*258*/
            [
                'parent_id' => 55,
                'name' => 'Блоки управления кондиционером',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*259*/
            [
                'parent_id' => 56,
                'name' => 'Фильтры топливные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*260*/
            [
                'parent_id' => 56,
                'name' => 'Фильтры воздушные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*261*/
            [
                'parent_id' => 56,
                'name' => 'Фильтры маслянные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*262*/
            [
                'parent_id' => 56,
                'name' => 'Фильтры салона',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*263*/
            [
                'parent_id' => 56,
                'name' => 'Фильтры гидравлические',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*264*/
            [
                'parent_id' => 56,
                'name' => 'Комплекты автомобильных фильтров',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*265*/
            [
                'parent_id' => 56,
                'name' => 'Автомобильные фильтры, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*266*/
            [
                'parent_id' => 56,
                'name' => 'Фильтры трансмиссионные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*267*/
            [
                'parent_id' => 56,
                'name' => 'Фильтры антикоррозионные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*268*/
            [
                'parent_id' => 60,
                'name' => 'Стеклоочистители, дворники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*269*/
            [
                'parent_id' => 60,
                'name' => 'Комплектующие системы стеклоочистителя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*270*/
            [
                'parent_id' => 60,
                'name' => 'Бачки, баки, емкости',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*271*/
            [
                'parent_id' => 60,
                'name' => 'Сситема очистки окон и фар автомобиля, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*272*/
            [
                'parent_id' => 26,
                'name' => 'Аксессуары салона автомобиля',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*273*/
            [
                'parent_id' => 26,
                'name' => 'Аксессуары для автотюнинга',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*274*/
            [
                'parent_id' => 26,
                'name' => 'Аксессуары для кузова автомобиля',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*275*/
            [
                'parent_id' => 26,
                'name' => 'Автомобильные электронные аксессуары',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*276*/
            [
                'parent_id' => 26,
                'name' => 'Багажники и крепления на крышу',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*277*/
            [
                'parent_id' => 26,
                'name' => 'Средства аварийной безопасности',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*278*/
            [
                'parent_id' => 26,
                'name' => 'Автоаксессуары, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*279*/
            [
                'parent_id' => 26,
                'name' => 'Щетки и скребки автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*280*/
            [
                'parent_id' => 26,
                'name' => 'Автомобильный скотч, самоклеющиеся карманы для талонов',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*281*/
            [
                'parent_id' => 26,
                'name' => 'Утеплители автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*282*/
            [
                'parent_id' => 26,
                'name' => 'Устройства для экономии топлива',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*283*/
            [
                'parent_id' => 26,
                'name' => 'Конистры, лейки для топлива',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*284*/
            [
                'parent_id' => 26,
                'name' => 'Автомобильные сейфы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*285*/
            [
                'parent_id' => 27,
                'name' => 'Шины',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*286*/
            [
                'parent_id' => 27,
                'name' => 'Колесные диски',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*287*/
            [
                'parent_id' => 27,
                'name' => 'Колпаки для дисков',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*288*/
            [
                'parent_id' => 27,
                'name' => 'Болты, секретные болты, гайки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*289*/
            [
                'parent_id' => 27,
                'name' => 'Проставки, цетровочные кольца для дисков',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*290*/
            [
                'parent_id' => 27,
                'name' => 'Камеры для шин и ободные ленты',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*291*/
            [
                'parent_id' => 27,
                'name' => 'Средства повышения проходимости',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*292*/
            [
                'parent_id' => 27,
                'name' => 'Комплекты колес в сборе',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*293*/
            [
                'parent_id' => 27,
                'name' => 'Автомобильные диски и шины, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*294*/
            [
                'parent_id' => 27,
                'name' => 'Шины, ремкомплекты',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*295*/
            [
                'parent_id' => 28,
                'name' => 'Авто, мото масла, смазки и жидкости',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*296*/
            [
                'parent_id' => 28,
                'name' => 'Полироли и шампуни автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*297*/
            [
                'parent_id' => 28,
                'name' => 'Автомобильные герметики, клея',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*298*/
            [
                'parent_id' => 28,
                'name' => 'Очистители для автомобиля',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*299*/
            [
                'parent_id' => 28,
                'name' => 'Автокраски, автоэмали',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*300*/
            [
                'parent_id' => 28,
                'name' => 'Жидкости для стеклоочистителя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*301*/
            [
                'parent_id' => 28,
                'name' => 'Химические средства для двигателя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*302*/
            [
                'parent_id' => 28,
                'name' => 'Салфетки и губки для автомобиля',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*303*/
            [
                'parent_id' => 28,
                'name' => 'Антикоррозионная защита',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*304*/
            [
                'parent_id' => 28,
                'name' => 'Топливные присадки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*305*/
            [
                'parent_id' => 28,
                'name' => 'Расходные материалы, автохимия и автокосметика, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*306*/
            [
                'parent_id' => 28,
                'name' => 'Средства для удаления царапин с автомобилей',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*307*/
            [
                'parent_id' => 28,
                'name' => 'Средства по уходу за шинами',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*308*/
            [
                'parent_id' => 28,
                'name' => 'Средства от запотевания и размораживатели стекол',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*309*/
            [
                'parent_id' => 28,
                'name' => 'Жидкая резина',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*310*/
            [
                'parent_id' => 28,
                'name' => 'Химические средства для трансмиссии',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*311*/
            [
                'parent_id' => 29,
                'name' => 'Автозвук',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*312*/
            [
                'parent_id' => 29,
                'name' => 'Автомобильные видеосистемы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*313*/
            [
                'parent_id' => 29,
                'name' => 'GPS',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*314*/
            [
                'parent_id' => 29,
                'name' => 'Противоугонные системы и аксессуары',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*315*/
            [
                'parent_id' => 29,
                'name' => 'Автомобильные адаптеры питания',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*316*/
            [
                'parent_id' => 29,
                'name' => 'Системы мониторинга транспорта и контроля топлива',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*317*/
            [
                'parent_id' => 29,
                'name' => 'FM трансмиттеры автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*318*/
            [
                'parent_id' => 29,
                'name' => 'Парковочные системы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*319*/
            [
                'parent_id' => 29,
                'name' => 'Автомобильные антены',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*320*/
            [
                'parent_id' => 29,
                'name' => 'Бортовые компьютеры',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*321*/
            [
                'parent_id' => 29,
                'name' => 'Разветвители для прикуривателя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*322*/
            [
                'parent_id' => 29,
                'name' => 'Антирадары',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*323*/
            [
                'parent_id' => 29,
                'name' => 'Автомобильные системы связи',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*324*/
            [
                'parent_id' => 29,
                'name' => 'Подогрев автомобильных сидений и зеркал',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*325*/
            [
                'parent_id' => 29,
                'name' => 'Автоэлектроника, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*326*/
            [
                'parent_id' => 29,
                'name' => 'Системы круиз-контроля',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*327*/
            [
                'parent_id' => 29,
                'name' => 'Таксометры',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*328*/
            [
                'parent_id' => 29,
                'name' => 'Проекторы автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*329*/
            [
                'parent_id' => 30,
                'name' => 'Аккумуляторы автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*330*/
            [
                'parent_id' => 30,
                'name' => 'Реле и датчики автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*331*/
            [
                'parent_id' => 30,
                'name' => 'Стартеры и комплектующие',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*332*/
            [
                'parent_id' => 30,
                'name' => 'Генераторы, альтернаторы и комплектующие',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*333*/
            [
                'parent_id' => 30,
                'name' => 'Блоки управления',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*334*/
            [
                'parent_id' => 30,
                'name' => 'Предохранители и переключатели автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*335*/
            [
                'parent_id' => 30,
                'name' => 'Проводка, провода, клемы и разъемы автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*336*/
            [
                'parent_id' => 30,
                'name' => 'Индикаторы, панели приборов и управления автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*337*/
            [
                'parent_id' => 30,
                'name' => 'Звуковые сигналы и клаксоны автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*338*/
            [
                'parent_id' => 30,
                'name' => 'Электрооборудование автомобилей, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*339*/
            [
                'parent_id' => 30,
                'name' => 'Электродвигатели, корректоры и приводы автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*340*/
            [
                'parent_id' => 31,
                'name' => 'Запчасти для мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*341*/
            [
                'parent_id' => 31,
                'name' => 'Мотоэкипировка',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*342*/
            [
                'parent_id' => 31,
                'name' => 'Мотоциклы, мотороллеры скутеры, мопеды',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*343*/
            [
                'parent_id' => 31,
                'name' => 'Аксессуары для мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*344*/
            [
                'parent_id' => 31,
                'name' => 'Электроскутеры, электромотоциклы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*345*/
            [
                'parent_id' => 31,
                'name' => 'Квадроциклы и багги',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*346*/
            [
                'parent_id' => 31,
                'name' => 'Мотобуксировщики',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*347*/
            [
                'parent_id' => 31,
                'name' => 'Мототехника, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*348*/
            [
                'parent_id' => 31,
                'name' => 'Моточехлы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*349*/
            [
                'parent_id' => 31,
                'name' => 'Инструмент для ремонта мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*350*/
            [
                'parent_id' => 31,
                'name' => 'Аксессуары для снегоходов и буксировщиков',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*351*/
            [
                'parent_id' => 31,
                'name' => 'Снегоходы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*352*/
            [
                'parent_id' => 31,
                'name' => 'Трициклы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*353*/
            [
                'parent_id' => 340,
                'name' => 'Детали двигателя мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*354*/
            [
                'parent_id' => 340,
                'name' => 'Запчасти для мототехники, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*355*/
            [
                'parent_id' => 340,
                'name' => 'Детали привода для мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*356*/
            [
                'parent_id' => 340,
                'name' => 'Гусеницы для техники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*357*/
            [
                'parent_id' => 340,
                'name' => 'Детали выхлопной системы мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*358*/
            [
                'parent_id' => 340,
                'name' => 'Электрооборудование для мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*359*/
            [
                'parent_id' => 340,
                'name' => 'Детали рамы и облицовки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*360*/
            [
                'parent_id' => 340,
                'name' => 'Аккумуляторы для мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*361*/
            [
                'parent_id' => 340,
                'name' => 'Детали ходовой части мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*362*/
            [
                'parent_id' => 340,
                'name' => 'Топливная система мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*363*/
            [
                'parent_id' => 340,
                'name' => 'Колеса для мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*364*/
            [
                'parent_id' => 340,
                'name' => 'Фильтры для мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*365*/
            [
                'parent_id' => 340,
                'name' => 'Световые приборы для мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*366*/
            [
                'parent_id' => 340,
                'name' => 'Детали рулевого управления мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*367*/
            [
                'parent_id' => 340,
                'name' => 'Элементы сцепления для мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*368*/
            [
                'parent_id' => 340,
                'name' => 'Детали тормозной системы мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*369*/
            [
                'parent_id' => 340,
                'name' => 'Тросики для мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*370*/
            [
                'parent_id' => 340,
                'name' => 'Защитные накладки для мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*371*/
            [
                'parent_id' => 340,
                'name' => 'Свечи зажигания для мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*372*/
            [
                'parent_id' => 340,
                'name' => 'Подножки для мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*373*/
            [
                'parent_id' => 340,
                'name' => 'Сидения для мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*374*/
            [
                'parent_id' => 340,
                'name' => 'Детали системы охлаждения мототехники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*375*/
            [
                'parent_id' => 341,
                'name' => 'Мотошлемы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*376*/
            [
                'parent_id' => 341,
                'name' => 'Балаклавы, подшлемники, маски',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*377*/
            [
                'parent_id' => 341,
                'name' => 'Мотоперчатки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*378*/
            [
                'parent_id' => 341,
                'name' => 'Мотокуртки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*379*/
            [
                'parent_id' => 341,
                'name' => 'Мотоочки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*380*/
            [
                'parent_id' => 341,
                'name' => 'Мотозащита',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*381*/
            [
                'parent_id' => 341,
                'name' => 'Мотоботы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*382*/
            [
                'parent_id' => 341,
                'name' => 'Мотоштаны',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*383*/
            [
                'parent_id' => 341,
                'name' => 'Мотокомбинезоны',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*384*/
            [
                'parent_id' => 341,
                'name' => 'Мотоэкипировка, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*385*/
            [
                'parent_id' => 32,
                'name' => 'Газобалонное оборудование и комплектующие автотранспорта',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*386*/
            [
                'parent_id' => 32,
                'name' => 'Дополнительное оборудование, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*387*/
            [
                'parent_id' => 32,
                'name' => 'Лебедки автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*388*/
            [
                'parent_id' => 32,
                'name' => 'Механические противоугонные системы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*389*/
            [
                'parent_id' => 32,
                'name' => 'Пневматическая подвеска',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*390*/
            [
                'parent_id' => 32,
                'name' => 'Проставки для увеличения клиренса',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*391*/
            [
                'parent_id' => 33,
                'name' => 'Наборы инструментов',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*392*/
            [
                'parent_id' => 33,
                'name' => 'Отвертки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*393*/
            [
                'parent_id' => 33,
                'name' => 'Головки торцовые',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*394*/
            [
                'parent_id' => 33,
                'name' => 'Ключи комбинированные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*395*/
            [
                'parent_id' => 33,
                'name' => 'Домкраты, подставки автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*396*/
            [
                'parent_id' => 33,
                'name' => 'Автомобильные насосы, компрессоры и манометры',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*397*/
            [
                'parent_id' => 33,
                'name' => 'Пасатижи, плоскогубцы, тонкогубцы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*398*/
            [
                'parent_id' => 33,
                'name' => 'Ключи накидные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*399*/
            [
                'parent_id' => 33,
                'name' => 'Ключи шестигранные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*400*/
            [
                'parent_id' => 33,
                'name' => 'Ключи торцовые',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*401*/
            [
                'parent_id' => 33,
                'name' => 'Ключи рожковые',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*402*/
            [
                'parent_id' => 33,
                'name' => 'Ключи разводные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*403*/
            [
                'parent_id' => 33,
                'name' => 'Автоинструмент, общее',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png',
                'can_be_last_cat'=>true
            ],
            /*404*/
            [
                'parent_id' => 33,
                'name' => 'Ключи балонные',
                'link'=> '/auto_moto',
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
