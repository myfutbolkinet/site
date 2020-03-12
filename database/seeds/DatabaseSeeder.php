<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(GoodsTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionItemTableSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(SuperadminsMenuTableSeeder::class);
        $this->call(AdminsMenuTableSeeder::class);
        $this->call(SeasonsTableSeeder::class);
        $this->call(MerchantSitePagesTableSeeder::class);



    }



}
