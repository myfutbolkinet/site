<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('answer_statuses')->insert([

            [

                'name' => 'Заказ',

            ],
            [

                'name' => 'Подумаю сам перезвоню',

            ],

            [

                'name' => 'Готов заказать перезвонить через период',

            ],
            [

                'name' => 'Подумаю перезвонить через период',

            ],
            [

                'name' => 'Нет времени',

            ],
            [

                'name' => 'Нет необходимости в заказе',

            ],
            [

                'name' => 'Не взяли трубку',

            ],
            [

            'name' => 'Не беспокоить никогда',

        ],[

                'name' => 'Дорого',

            ],

        ]);



    }
}
