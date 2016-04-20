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
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
=======
    	Model::unguard();
        // $this->call(UsersTableSeeder::class);
        Model::reguard();
>>>>>>> 506b4db3afe005b606f798a994a9dddad3ea4ec6
    }
}
