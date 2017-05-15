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
          'name' => 'Thomas Lawanson',
          'email' => 'thomas@email.com',
          'password' => bcrypt('secret'),
          'remember_token' => str_random(10)
        ]);

        factory('App\User', 1)->create();


    }
}
