<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductImagesUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(" UPDATE `products` SET `photo` = 'image1.png' where `id` =1 ");
        DB::statement(" UPDATE `products` SET `photo` = 'image2.png' where `id` =2 ");
        DB::statement(" UPDATE `products` SET `photo` = 'image3.png' where `id` =3 ");
        DB::statement(" UPDATE `products` SET `photo` = 'image4.png' where `id` =4 ");
        DB::statement(" UPDATE `products` SET `photo` = 'image5.png' where `id` =5 ");
        DB::statement(" UPDATE `products` SET `photo` = 'default.png' where `id` =6 ");
        DB::statement(" UPDATE `products` SET `photo` = 'default.png' where `id` =7 ");
        DB::statement(" UPDATE `products` SET `photo` = 'default.png' where `id` =8 ");
        DB::statement(" UPDATE `products` SET `photo` = 'default.png' where `id` =9 ");
        DB::statement(" UPDATE `products` SET `photo` = 'default.png' where `id` =10 ");
        DB::statement(" UPDATE `products` SET `photo` = 'default.png' where `id` =11 ");
        DB::statement(" UPDATE `products` SET `photo` = 'default.png' where `id` =12 ");
        DB::statement(" UPDATE `products` SET `photo` = 'default.png' where `id` =13 ");
        DB::statement(" UPDATE `products` SET `photo` = 'default.png' where `id` =14 ");
        DB::statement(" UPDATE `products` SET `photo` = 'default.png' where `id` =15 ");
        DB::statement(" UPDATE `products` SET `photo` = 'default.png' where `id` =16 ");
        DB::statement(" UPDATE `products` SET `photo` = 'default.png' where `id` =17 ");
        DB::statement(" UPDATE `products` SET `photo` = 'default.png' where `id` =18 ");
        DB::statement(" UPDATE `products` SET `photo` = 'default.png' where `id` =19 ");
        DB::statement(" UPDATE `products` SET `photo` = 'default.png' where `id` =20 ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
