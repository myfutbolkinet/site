<?php

use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('seasons')->insert([
            /*1*/
            [
                'name' => 'Весна-лето',

            ],
            /*2*/
            [
                'name' => 'Осень-зима',
            ],

        ]);







    }
}
