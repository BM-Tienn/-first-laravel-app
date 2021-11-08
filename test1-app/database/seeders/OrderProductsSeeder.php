<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderProducts;
use App\Models\ShopProduct;

class OrderProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderProducts::truncate();
        $orders = Order::all();

        $data = [];

        $faker = \Faker\Factory::create();

        $products = ShopProduct::all();

        foreach ($orders as $order) {
            $data[] = [
                'order_id' => $order->id,
                'shop_product_id' => $products->random()->id,
                'quantity' => rand(1, 5),
            ];

            $data[] = [
                'order_id' => $order->id,
                'shop_product_id' => $products->random()->id,
                'quantity' => rand(1, 5),
            ];
        }

        OrderProducts::insert($data);
    }
}
