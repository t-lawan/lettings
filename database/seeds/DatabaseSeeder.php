<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $toTruncate = array('photos','flyers','users','messages');

    public function run()
    {
      foreach ($this->toTruncate as $table)
        {
          DB::table($table)->truncate();
        }

         $this->call(UsersTableSeeder::class);
         $this->call(FlyersTableSeeder::class);
         $this->call(PhotosTableSeeder::class);
         $this->call(MessagesTableSeeder::class);
    }
}
