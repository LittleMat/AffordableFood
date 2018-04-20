<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNotNullAndDefaultToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(" ALTER TABLE `products` MODIFY COLUMN `description` CHAR(60) NOT NULL DEFAULT '' ");
        DB::statement(" ALTER TABLE `products` MODIFY COLUMN `grade` CHAR(30) NOT NULL DEFAULT 0 ");
        DB::statement(" ALTER TABLE `products` MODIFY COLUMN `photo` CHAR(30) NOT NULL DEFAULT '/images/default_product.jpg' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement(" ALTER TABLE `products` MODIFY COLUMN `description` CHAR(60) NOT NULL DEFAULT NULL ");
        DB::statement(" ALTER TABLE `products` MODIFY COLUMN `grade` CHAR(30) NOT NULL DEFAULT NULL ");
        DB::statement(" ALTER TABLE `products` MODIFY COLUMN `photo` CHAR(30) NOT NULL DEFAULT NULL ");
    }
}
