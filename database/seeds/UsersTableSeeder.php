<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        DB::table('roles')->insert([

            [

                'name' => 'SiteAdmin',

            ],
            [

                'name' => 'Moderator',

            ],
            [

                'name' => 'Guest',

            ],
            [

                'name' => 'Superadmin',

            ],
            [

                'name' => 'SalesManager',

            ],

        ]);



        DB::table('permissions')->insert([

            [

                'name' => 'VIEW_ADMIN',

            ],
            [

                'name' => 'ADMIN_USERS',

            ],
            [

                'name' => 'SUPERADMIN_EDIT',

            ],
            [

                'name' => 'SUPERADMIN_SALES',

            ]

        ]);
        DB::table('permission_role')->insert([

            [

                'role_id' => 1,
                'permission_id' => 1,

            ],
            [

                'role_id' => 1,
                'permission_id' => 2,

            ],
            [

                'role_id' => 2,
                'permission_id' => 1,

            ],
            [

                'role_id' => 4,
                'permission_id' => 1,

            ],
            [

                'role_id' => 4,
                'permission_id' => 2,

            ],
            [

                'role_id' => 4,
                'permission_id' => 3,

            ],

            [

                'role_id' => 5,
                'permission_id' => 4,

            ]

        ]);
        DB::table('users')->insert([

            [

                'email'=>'imediasun@gmail.com',
                'password'=>bcrypt('sunimedia'),
                'mobile'=>'+38(096)544-11-20',
                'add_phone'=>'+38(096)544-11-20',
                'information'=>'information description',
                'status'=>1,
                'activated'=> TRUE,
                'name' => 'Лопушанский Андрей'

            ],
            [
                'email'=>'imediasun8@gmail.com',
                'password'=>bcrypt('sunimedia'),
                'mobile'=>'+38(096)544-11-20',
                'add_phone'=>'+38(096)544-11-20',
                'information'=>'information description',
                'status'=>2,
                'activated'=> TRUE,
                'name' => 'Демидов Сергей'

            ],

            [
                'email'=>'leha.razdelishin@yandex.ru',
                'password'=>bcrypt('DrwwehWdjj25'),
                'mobile'=>'+38(093)0712279',
                'add_phone'=>'+38(093)0712279',
                'information'=>'sale manager',
                'status'=>1,
                'activated'=> TRUE,
                'name' => 'Алексей Разделишин'

            ]

        ]);

        DB::table('role_user')->insert([

            [

                'user_id' => 1,
                'role_id' => 1

            ],
            [

                'user_id' => 2,
                'role_id' => 2

            ],
            [

            'user_id' => 1,
            'role_id' => 4

        ],
            [

                'user_id' => 3,
                'role_id' => 5

            ]


        ]);
        DB::table('customers_statuses')->insert([

            [

                'name' => 'Фізична особа'

            ],
            [

                'name' => 'Юридична особа'

            ]


        ]);


        DB::table('customers')->insert([

            [
                'id_user'=>2,
                'name'=>'Южная Пальмира',
                'edrpou'=>4568756,
                'bank'=>'Приватбанк',
                'mfo'=>324568,
                'account'=>24562345644568990,
                'city'=>'Одесса',
                'street'=>'Рішельевська',
                'house'=>45,
                'code'=>465,
                'ofice'=>345,
                'index'=>348766,

            ]


        ]);

        DB::table('site_users')->insert([

            [
                'name' => 'Лопушанский Андрей',
                'email'=>'imediasun@gmail.com',
                'domain'=>'farfalla.loc',
                'password'=>bcrypt('sunimedia'),
                'mobile'=>'+38(096)544-11-20',
                'add_phone'=>'+38(096)544-11-20',
                'information'=>'information description',
                'status'=>1,
                'activated'=> TRUE,


            ],


        ]);
        DB::table('superadmins')->insert([

            [
                'name' => 'Лопушанский Андрей',
                'email'=>'imediasun@gmail.com',
                'password'=>bcrypt('sunimedia'),
                'mobile'=>'+38(096)544-11-20',
                'add_phone'=>'+38(096)544-11-20',
                'information'=>'information description',
                'status'=>1,
                'activated'=> TRUE,


            ],


        ]);
    }
}
