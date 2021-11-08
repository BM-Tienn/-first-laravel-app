<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_products')->truncate();
        
        $data = [
            [
                'id' => 1 ,
                'name' => 'Sampann-Toor-Dal',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'image' => 'images/pf4.png',
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
                'category_id' => 1 ,
            ],

            [
                'id' => 2 ,
                'name' => 'Parryss-sugar',
                'image' => 'images/bv3.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
                'category_id' => 1 ,
            ],

            [
                'id' => 3 ,
                'name' => 'Saffola-gold',
                'image' => 'images/16.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
                'category_id' => 1 ,
            ],

            [
                'id' => 4 ,
                'name' => 'Sampann-toor-dal',
                'image' => 'images/hh4.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
                'category_id' => 1 ,
            ],

            [
                'id' => 5 ,
                'name' => 'Saffola-gold',
                'image' => 'images/pc6.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
                'category_id' => 1 ,
            ],

            [
                'id' => 6 ,
                'name' => 'Saffola-gold',
                'image' => 'images/gu4.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
                'category_id' => 1 ,
            ],

            [
                'id' => 7 ,
                'name' => 'Saffola-gold',
                'image' => 'images/5.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
                'category_id' => 1 ,
            ],

            [
                'id' => 8 ,
                'name' => 'Saffola-gold',
                'image' => 'images/6.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
                'category_id' => 1 ,
            ],

            [
                'id' => 9 ,
                'name' => 'Saffola-gold',
                'image' => 'images/16.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
                'category_id' => 1 ,
            ],
            
            [
                'id' => 10 ,
                'name' => 'Baby Lotion',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'image' => 'images/pc1.png',
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PERSONALCARE',
                'category_id' => 2 ,
            ],

            [
                'id' => 11 ,
                'name' => 'Rash Cream',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'image' => 'images/pc2.png',
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PERSONALCARE',
                'category_id' => 2 ,
            ],

            [
                'id' => 12 ,
                'name' => 'Parryss Cream',
                'image' => 'images/pc3.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PERSONALCARE',
                'category_id' => 2 ,
            ],

            [
                'id' => 13 ,
                'name' => 'Rash Cream',
                'image' => 'images/pc4.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PERSONALCARE',
                'category_id' => 2 ,
            ],

            [
                'id' => 14 ,
                'name' => 'Sampann Baby Lotion',
                'image' => 'images/pc5.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PERSONALCARE',
                'category_id' => 2 ,
            ],

            [
                'id' => 15 ,
                'name' => 'Saffola Gold',
                'image' => 'images/pc6.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PERSONALCARE',
                'category_id' => 2 ,
            ],

            [
                'id' => 16 ,
                'name' => 'Saffola Cream',
                'image' => 'images/pc7.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PERSONALCARE',
                'category_id' => 2 ,
            ],

            [
                'id' => 17 ,
                'name' => 'Saffola Gold',
                'image' => 'images/pc8.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PERSONALCARE',
                'category_id' => 2 ,
            ],

            [
                'id' => 18 ,
                'name' => 'Rash Cream',
                'image' => 'images/pc9.jpg',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PERSONALCARE',
                'category_id' => 2 ,
            ],
            
            [
                'id' => 19 ,
                'name' => 'Sampann-toor-dal',
                'image' => 'images/pf9.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PACKAGEDFOODS',
                'category_id' => 3 ,
            ],

            [
                'id' => 20 ,
                'name' => 'Baby Lotion',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'image' => 'images/pf1.png',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PACKAGEDFOODS',
                'category_id' => 3 ,
            ],

            [
                'id' => 21 ,
                'name' => 'Sampann-toor-dal',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'image' => 'images/pf2.png',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PACKAGEDFOODS',
                'category_id' => 3 ,
            ],

            [
                'id' => 22 ,
                'name' => 'Parryss Cream',
                'image' => 'images/pf3.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PACKAGEDFOODS',
                'category_id' => 3 ,
            ],

            [
                'id' => 23 ,
                'name' => 'Sampann-toor-dal',
                'image' => 'images/pf4.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PACKAGEDFOODS',
                'category_id' => 3 ,
            ],

            [
                'id' => 24 ,
                'name' => 'Sampann Baby Lotion',
                'image' => 'images/pf5.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PACKAGEDFOODS',
                'category_id' => 3 ,
            ],

            [
                'id' => 25 ,
                'name' => 'Saffola Gold',
                'image' => 'images/pf6.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PACKAGEDFOODS',
                'category_id' => 3 ,
            ],

            [
                'id' => 26 ,
                'name' => 'Saffola Cream',
                'image' => 'images/pf7.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PACKAGEDFOODS',
                'category_id' => 3 ,
            ],

            [
                'id' => 27 ,
                'name' => 'Saffola Gold',
                'image' => 'images/pf8.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'PACKAGEDFOODS',
                'category_id' => 3 ,
            ],

            [
                'id' => 28 ,
                'name' => 'Flask',
                'image' => 'images/hh9.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'HOUSEHOLD',
                'category_id' => 4 ,
            ],

            [
                'id' => 29 ,
                'name' => 'Saffola Cream',
                'image' => 'images/hh7.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'HOUSEHOLD',
                'category_id' => 4 ,
            ],

            [
                'id' => 30 ,
                'name' => 'Fry Pan',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'image' => 'images/hh1.png',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'HOUSEHOLD',
                'category_id' => 4 ,
            ],

            [
                'id' => 31 ,
                'name' => 'Flask',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'image' => 'images/hh2.png',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'HOUSEHOLD',
                'category_id' => 4 ,
            ],

            [
                'id' => 32 ,
                'name' => 'Elite Set',
                'image' => 'images/hh3.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'HOUSEHOLD',
                'category_id' => 4 ,
            ],

            [
                'id' => 33 ,
                'name' => 'Flask',
                'image' => 'images/hh4.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'HOUSEHOLD',
                'category_id' => 4 ,
            ],

            [
                'id' => 34 ,
                'name' => 'Breakfast Pan',
                'image' => 'images/hh5.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'HOUSEHOLD',
                'category_id' => 4 ,
            ],

            [
                'id' => 35 ,
                'name' => 'Kadai Idly',
                'image' => 'images/hh6.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'HOUSEHOLD',
                'category_id' => 4 ,
            ],
            
            [
                'id' => 36 ,
                'name' => 'Kadai Idly',
                'image' => 'images/hh8.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'HOUSEHOLD',
                'category_id' => 4 ,
            ],
            
            [
                'id' => 37 ,
                'name' => 'Le-Gourmet',
                'image' => 'images/gu8.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'GOURMET',
                'category_id' => 1 ,
            ],

            [
                'id' => 38 ,
                'name' => 'Fruit Nut',
                'image' => 'images/gu9.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'GOURMET',
                'category_id' => 1 ,
            ],
            
            [
                'id' => 39 ,
                'name' => 'Miniatures',
                'image' => 'images/gu7.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'GOURMET',
                'category_id' => 1 ,
            ],

            [
                'id' => 40 ,
                'name' => 'Fry Pan',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'image' => 'images/gu1.png',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'GOURMET',
                'category_id' => 1 ,
            ],

            [
                'id' => 41 ,
                'name' => 'Sandwich',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'image' => 'images/gu2.png',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'GOURMET',
                'category_id' => 1 ,
            ],

            [
                'id' => 42 ,
                'name' => 'Poultry Rub',
                'image' => 'images/gu3.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'GOURMET',
                'category_id' => 1 ,
            ],

            [
                'id' => 43 ,
                'name' => 'Fruit Nut',
                'image' => 'images/gu4.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'GOURMET',
                'category_id' => 1 ,
            ],

            [
                'id' => 44 ,
                'name' => 'Chocolate Bar',
                'image' => 'images/gu5.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'GOURMET',
                'category_id' => 1 ,
            ],

            [
                'id' => 45 ,
                'name' => 'Le-Gourmet',
                'image' => 'images/gu6.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'GOURMET',
                'category_id' => 1 ,
            ],

            [
                'id' => 46 ,
                'name' => 'Frooti',
                'image' => 'images/bv6.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'BEVERAGES',
                'category_id' => 2 ,
            ],

            [
                'id' => 47 ,
                'name' => 'Minute Maid',
                'image' => 'images/bv8.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'BEVERAGES',
                'category_id' => 2 ,
            ],

            [
                'id' => 48 ,
                'name' => 'Coca Cola',
                'image' => 'images/bv9.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'BEVERAGES',
                'category_id' => 2 ,
            ],
            
            [
                'id' => 49 ,
                'name' => 'Miniatures',
                'image' => 'images/bv7.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'BEVERAGES',
                'category_id' => 2 ,
            ],

            [
                'id' => 50 ,
                'name' => 'Red Bull',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'image' => 'images/bv1.png',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'BEVERAGES',
                'category_id' => 2 ,
            ],

            [
                'id' => 51 ,
                'name' => 'Real',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'image' => 'images/bv2.png',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'BEVERAGES',
                'category_id' => 2 ,
            ],

            [
                'id' => 52 ,
                'name' => 'Appy',
                'image' => 'images/bv3.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'BEVERAGES',
                'category_id' => 2 ,
            ],

            [
                'id' => 53 ,
                'name' => 'Coca Cola',
                'image' => 'images/bv4.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'BEVERAGES',
                'category_id' => 2 ,
            ],

            [
                'id' => 54 ,
                'name' => 'Tropicana',
                'image' => 'images/bv5.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'BEVERAGES',
                'category_id' => 2 ,
            ],
        ];

        DB::table('shop_products')->insert($data);
    }
}
