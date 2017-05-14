<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $toTruncate = array('users','flyer_photos','flyers');

    public function run()
    {


         $this->call(UsersTableSeeder::class);
         $this->call(FlyersTableSeeder::class);
    }
}
