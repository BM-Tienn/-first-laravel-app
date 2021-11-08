<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        $data = [
            [
                'name' => 'Fruits And Vegetables',
                'image' => 'images/p2.jpg',
                'classify' => 'BEVERAGES',
            ],
            
            [
                'name' => 'Grocery & Staples',
                'image' => 'images/p3.jpg',
                'classify' => 'GOURMET',
            ],

            [
                'name' => 'PersonalCare',
                'image' => 'images/p4.jpg',
                'classify' => 'PERSONALCARE',
            ],

            [
                'name' => 'Household',
                'image' => 'images/111.jpg',
                'classify' => 'HOUSEHOLD',
            ],
        ];

        DB::table('categories')->insert($data);
    }
}
