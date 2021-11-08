<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        $this->call([
            CategorySeeder::class,
            ShopSeeder::class,
            OrderSeeder::class,
            OrderProductsSeeder::class,
        ]);
    }
}
