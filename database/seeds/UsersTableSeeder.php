<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            /*1*/
            [
                'name' => 'Andrey ',
                'sername'=>'Lopushansky',
                'email'=> 'imediasun@gmail.com',
                'password'=> Hash::make('sunimedia'),
                'active'=>true,
                'non_hashed'=>'sunimedia',
            ],
            /*2*/
            [
                'name' => 'Sergey ',
                'sername'=>'Miroshnichenko',
                'email'=> 'imediasun8@gmail.com',
                'password'=> Hash::make('sunimedia'),
                'active'=>true,
                'non_hashed'=>'sunimedia',
            ],
            /*3*/
            [
                'name' => 'Test',
                'sername'=>'Miroshnichenko',
                'email'=> 'test_email@gmail.com',
                'password'=> Hash::make('sunimedia'),
                'active'=>true,
                'non_hashed'=>'sunimedia',
            ],
            /*4*/
            [
                'name' => 'Manager',
                'sername'=>'Miroshnichenko',
                'email'=> 'senior.dev.php@gmail.com',
                'password'=> Hash::make('sunimedia'),
                'active'=>true,
                'non_hashed'=>'sunimedia',
            ],
            /*5*/
            [
                'name' => 'Company_admin',
                'sername'=>'Miroshnichenko',
                'email'=> 'dev.magellan@gmail.com',
                'password'=> Hash::make('sunimedia'),
                'active'=>true,
                'non_hashed'=>'sunimedia',
            ],

        ]);

        $users=\App\User::get();
        foreach($users as $user){
            $user->remember_token= Str::random(60);
            $user->save();
        }






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
