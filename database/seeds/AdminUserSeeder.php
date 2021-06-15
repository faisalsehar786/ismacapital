<?php

use App\AdminUser;
use Illuminate\Database\Seeder;
use App\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminUser::create([
           'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);




        $user_id = 1;
        Role::create([
           'role' => 'Seller',
            'status' => 1,
            'user_id' => $user_id,
        ]);

        $user_id = 1;
        Role::create([
           'role' => 'Buyer',
            'status' => 1,
            'user_id' => $user_id,
        ]);


         DB::update("ALTER TABLE users AUTO_INCREMENT =2;");
    }

     
    
}