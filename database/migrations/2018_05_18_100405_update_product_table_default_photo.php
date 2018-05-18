<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProductTableDefaultPhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(" ALTER TABLE `products` MODIFY COLUMN `photo` CHAR(250) DEFAULT 'image/products/default.png' ");
        DB::statement(" UPDATE `products` SET `photo`= 'image/products/default.png' where `photo`= '/images/default_product.jpg'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement(" ALTER TABLE `products` MODIFY COLUMN `photo` CHAR(250) DEFAULT 'image/default.png' ");
        DB::statement(" UPDATE `products` SET `photo`= 'image/default.png' where `photo`= 'image/products/default.png'");
    }
}
