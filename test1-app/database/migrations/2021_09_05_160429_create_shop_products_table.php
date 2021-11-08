<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_products', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name', 100);
            $table->float('price', 10, 2)->nullable();//giá 
            $table->float('price_sale', 10, 2)->nullable();//giá sale
            $table->text('image');
            $table->text('description');//mô tả
            $table->integer('quantity');//số lượng
            $table->tinyInteger('status');//trạng thái
            $table->text('classify'); //phân loại
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_products');
    }
}
