<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('orders')->insert([
            ['order_nr'=>'AS00000008',
        'status'=>'not_payed',
        'client_phone'=>'0965441120',
        'client_email'=>'imediasun@gmail.com',
        'client_name'=>'Andrey',
        'client_city'=>'Odessa',
        'client_country'=>'Ukraine',
        'orders_details'=>'details',
        'client_postal_code'=>'68000',
        'client_address'=>'Parusnaya'
        ],
            ['order_nr'=>'AD00000009',
                'status'=>'not_payed',
                'client_phone'=>'0965441120',
                'client_email'=>'imediasun@gmail.com',
                'client_name'=>'Andrey',
                'client_city'=>'Odessa',
                'client_country'=>'Ukraine',
                'orders_details'=>'details',
                'client_postal_code'=>'68000',
                'client_address'=>'Parusnaya'
            ],
            ['order_nr'=>'AF00000004',
                'status'=>'not_payed',
                'client_phone'=>'0965441120',
                'client_email'=>'imediasun@gmail.com',
                'client_name'=>'Andrey',
                'client_city'=>'Odessa',
                'client_country'=>'Ukraine',
                'orders_details'=>'details',
                'client_postal_code'=>'68000',
                'client_address'=>'Parusnaya'
            ],
            ['order_nr'=>'AM00000005',
                'status'=>'not_payed',
                'client_phone'=>'0965441120',
                'client_email'=>'imediasun@gmail.com',
                'client_name'=>'Andrey',
                'client_city'=>'Odessa',
                'client_country'=>'Ukraine',
                'orders_details'=>'details',
                'client_postal_code'=>'68000',
                'client_address'=>'Parusnaya'
            ],
            ['order_nr'=>'AL00000008',
                'status'=>'not_payed',
                'client_phone'=>'0965441120',
                'client_email'=>'imediasun@gmail.com',
                'client_name'=>'Andrey',
                'client_city'=>'Odessa',
                'client_country'=>'Ukraine',
                'orders_details'=>'details',
                'client_postal_code'=>'68000',
                'client_address'=>'Parusnaya'
            ],
            ['order_nr'=>'AS00000001',
                'status'=>'not_payed',
                'client_phone'=>'0965441120',
                'client_email'=>'imediasun@gmail.com',
                'client_name'=>'Andrey',
                'client_city'=>'Odessa',
                'client_country'=>'Ukraine',
                'orders_details'=>'details',
                'client_postal_code'=>'68000',
                'client_address'=>'Parusnaya'
            ],
            ['order_nr'=>'AS00000002',
                'status'=>'not_payed',
                'client_phone'=>'0965441120',
                'client_email'=>'imediasun@gmail.com',
                'client_name'=>'Andrey',
                'client_city'=>'Odessa',
                'client_country'=>'Ukraine',
                'orders_details'=>'details',
                'client_postal_code'=>'68000',
                'client_address'=>'Parusnaya'
            ],
            ['order_nr'=>'AS00000006',
                'status'=>'not_payed',
                'client_phone'=>'0965441120',
                'client_email'=>'imediasun@gmail.com',
                'client_name'=>'Andrey',
                'client_city'=>'Odessa',
                'client_country'=>'Ukraine',
                'orders_details'=>'details',
                'client_postal_code'=>'68000',
                'client_address'=>'Parusnaya'
            ],


        ]);

        DB::table('orders_goods')->insert([
        ['order_id'=>'AS00000006',
        'good_id'=>1,
        'quantaty'=>2],
         ['order_id'=>'AS00000006',
         'good_id'=>2,
         'quantaty'=>2],
         ['order_id'=>'AS00000006',
                'good_id'=>2,
                'quantaty'=>2],
            ['order_id'=>'AS00000002',
                'good_id'=>2,
                'quantaty'=>2],
            ['order_id'=>'AS00000001',
                'good_id'=>2,
                'quantaty'=>2],
            ['order_id'=>'AL00000008',
                'good_id'=>2,
                'quantaty'=>2],
            ['order_id'=>'AM00000005',
                'good_id'=>2,
                'quantaty'=>2],
            ['order_id'=>'AF00000004',
                'good_id'=>2,
                'quantaty'=>2],
            ['order_id'=>'AF00000004',
                'good_id'=>3,
                'quantaty'=>2],
            ['order_id'=>'AD00000009',
                'good_id'=>2,
                'quantaty'=>2],
            ['order_id'=>'AS00000008',
                'good_id'=>2,
                'quantaty'=>2],

        ]);



    }
}
