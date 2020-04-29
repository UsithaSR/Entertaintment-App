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


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Demo Admin',
                    'email' => 'admin@usitha.com',
                    'email_verified_at' => NULL,
                    'password' => bcrypt('usitha123'),
                    'remember_token' => 'E9X8iVeQleizludiANM6DrfQjs0SLN2DCz4z24Q4OxyiQbrXYQT0nwRRiriY',
                    'created_at' => '2019-08-20 00:00:00',
                    'updated_at' => '2019-08-20 00:00:00',
                ),
        ));


    }
}
