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
        //
        DB::table('users')->insert([
          'name' => 'Thomas',
          'email' => 'thomas@email.com',
          'password' => bcrypt('thomas'),
          'remember_token' => str_random(10)
        ]);

        factory('App\User', 1)->create();


    }
}
