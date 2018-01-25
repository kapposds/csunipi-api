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
    	DB::table('users')->delete();
    	
        DB::table('users')->insert([
            'name' => 'Dummy User',
            'email' => 'csunipi_dummy_admin@gmail.com',
            'password' => bcrypt('csunipi'),
        ]);

        DB::table('users')->insert([
            'name' => 'Dummy User',
            'email' => 'csunipi_dummy_superadmin@gmail.com',
            'password' => bcrypt('csunipi'),
        ]);        

    }
}
