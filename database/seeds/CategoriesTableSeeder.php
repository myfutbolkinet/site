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
            /*63*/
            [
                'parent_id' => 37,
                'name' => 'Амортизаторы,стойки,подушки стоек',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*64*/
            [
                'parent_id' => 37,
                'name' => 'Подшипники для транспорта',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*65*/
            [
                'parent_id' => 37,
                'name' => 'Пружины,рессоры для техники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*66*/
            [
                'parent_id' => 37,
                'name' => 'Сайлентблоки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*67*/
            [
                'parent_id' => 37,
                'name' => 'Стабилизаторы,стойки стабилизатора,тяги стабилизатора',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*68*/
            [
                'parent_id' => 37,
                'name' => 'Втулки автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*69*/
            [
                'parent_id' => 37,
                'name' => 'Пневморессоры, пневмоподушки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*70*/
            [
                'parent_id' => 37,
                'name' => 'Рычаги,тяги',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*71*/
            [
                'parent_id' => 37,
                'name' => 'Шаровые опоры',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*72*/
            [
                'parent_id' => 37,
                'name' => 'Пыльники,отбойники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*73*/
            [
                'parent_id' => 37,
                'name' => 'Ступицы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*74*/
            [
                'parent_id' => 37,
                'name' => 'Автомобильные опоры стоек',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*75*/
            [
                'parent_id' => 37,
                'name' => 'Поворотные кулаки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*76*/
            [
                'parent_id' => 37,
                'name' => 'Балки передней и задней подвески',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*77*/
            [
                'parent_id' => 37,
                'name' => 'Ступичные болты,шпильки и гайки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*78*/
            [
                'parent_id' => 37,
                'name' => 'Автомобильные шкворни',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*79*/
            [
                'parent_id' => 37,
                'name' => 'Крепежи узлов подвески',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*80*/
            [
                'parent_id' => 37,
                'name' => 'Торсионы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*81*/
            [
                'parent_id' => 38,
                'name' => 'Турбины, турбокомпрессоры',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*82*/
            [
                'parent_id' => 38,
                'name' => 'Двигатели для техники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*83*/
            [
                'parent_id' => 38,
                'name' => 'Подшипники для транспорта',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*84*/
            [
                'parent_id' => 38,
                'name' => 'Прокладки для техники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*85*/
            [
                'parent_id' => 38,
                'name' => 'Сальники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*86*/
            [
                'parent_id' => 38,
                'name' => 'Ремни приводные автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*87*/
            [
                'parent_id' => 38,
                'name' => 'Ролики и натяжители',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*88*/
            [
                'parent_id' => 38,
                'name' => 'Подушки двигателя',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*89*/
            [
                'parent_id' => 38,
                'name' => 'Шкивы двигателей',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*90*/
            [
                'parent_id' => 38,
                'name' => 'Ремни вариатора',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*91*/
            [
                'parent_id' => 38,
                'name' => 'Ремни вариаторные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*92*/
            [
                'parent_id' => 39,
                'name' => 'Бамперы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*93*/
            [
                'parent_id' => 39,
                'name' => 'Автомобильные двери',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*94*/
            [
                'parent_id' => 39,
                'name' => 'Крылья, арки автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*95*/
            [
                'parent_id' => 39,
                'name' => 'Пистоны, заглушки, крепежные элементы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*96*/
            [
                'parent_id' => 39,
                'name' => 'Брызговики',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*97*/
            [
                'parent_id' => 39,
                'name' => 'Защита картера и КПП',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*98*/
            [
                'parent_id' => 39,
                'name' => 'Фаркопы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*99*/
            [
                'parent_id' => 39,
                'name' => 'Автомобильные решетки на бамперы и радиаторы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*100*/
            [
                'parent_id' => 39,
                'name' => 'Капоты',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*101*/
            [
                'parent_id' => 39,
                'name' => 'Автомобильные дверные ручки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*102*/
            [
                'parent_id' => 39,
                'name' => 'Стеклоподъемники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*103*/
            [
                'parent_id' => 39,
                'name' => 'Автомобильные подкрылки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*104*/
            [
                'parent_id' => 39,
                'name' => 'Автомобильные эиблемы',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*105*/
            [
                'parent_id' => 39,
                'name' => 'Автомобильные замки и ключи',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*106*/
            [
                'parent_id' => 39,
                'name' => 'Передние панели кузова',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*107*/
            [
                'parent_id' => 39,
                'name' => 'Амортизаторы капота, багажника',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*108*/
            [
                'parent_id' => 39,
                'name' => 'Усилители бампера, буфер бампера',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*109*/
            [
                'parent_id' => 39,
                'name' => 'Кронштейны автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*110*/
            [
                'parent_id' => 39,
                'name' => 'Петли, ограничители автомобильные',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*111*/
            [
                'parent_id' => 39,
                'name' => 'Крышки багажника',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*112*/
            [
                'parent_id' => 39,
                'name' => 'Задние панели кузова',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*113*/
            [
                'parent_id' => 39,
                'name' => 'Боковины кузова',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*114*/
            [
                'parent_id' => 39,
                'name' => 'Лонжироны, подрамники',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*115*/
            [
                'parent_id' => 39,
                'name' => 'Кузова легковых автомобилей',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*116*/
            [
                'parent_id' => 39,
                'name' => 'Лючки, крышки бензобака',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*117*/
            [
                'parent_id' => 39,
                'name' => 'Автомобильные крыши',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*118*/
            [
                'parent_id' => 39,
                'name' => 'Автомобильные люки',
                'link'=> '/auto_moto',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            /*119*/
            [
                'parent_id' => 39,
                'name' => 'Ноускаты',
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
                'name' => 'Категоріі товаров',
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
