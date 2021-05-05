<?php

use App\Client;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            ClientsTableSeeder::class,
            MenusTableSeeder::class,
            CommandesTableSeeder::class,
            GestionnairesTableSeeder::class,

            ]);

    }
}
