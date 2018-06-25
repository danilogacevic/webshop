<?php

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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('products')->truncate();

        // $this->call(UsersTableSeeder::class);
        factory(App\Product::class,10)->create();
    }
}
