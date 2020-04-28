<?php

use Illuminate\Database\Seeder;

class AdditionalMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('additional_menu')->insert([

        ['nestable_id'=>1,
                'text'=>'Уникальные принты',
                'is_photo'=>false,
                'photo'=>'',
                'link'=>'not_linked'

            ],
            ['nestable_id'=>2,
                'text'=>'Уникальные принты слайд номер один',
                'is_photo'=>true,
                'photo'=>'01.jpg',
                'link'=>'/category/1'

            ],
            ['nestable_id'=>3,
                'text'=>'Уникальные принты слайд номер два',
                'is_photo'=>true,
                'photo'=>'02.jpg',
                'link'=>'/category/2'

            ],
            ['nestable_id'=>4,
                'text'=>'Уникальные принты слайд номер три',
                'is_photo'=>true,
                'photo'=>'03.jpg',
                'link'=>'/category/3'

            ],
            ['nestable_id'=>5,
                'text'=>'Уникальные принты слайд номер четыре',
                'is_photo'=>true,
                'photo'=>'04.jpg',
                'link'=>'/category/4'

            ],
            ['nestable_id'=>6,
                'text'=>'Футболки',
                'is_photo'=>false,
                'photo'=>'',
                'link'=>'not_linked'

            ],
            ['nestable_id'=>7,
                'text'=>'Футболки номер один',
                'is_photo'=>false,
                'photo'=>'',
                'link'=>'/category/5'

            ],
            ['nestable_id'=>8,
                'text'=>'Футболки номер два',
                'is_photo'=>false,
                'photo'=>'',
                'link'=>'/category/6'

            ],
            ['nestable_id'=>9,
                'text'=>'Футболки номер три',
                'is_photo'=>false,
                'photo'=>'',
                'link'=>'/category/7'

            ],


        ]);





    }
}
