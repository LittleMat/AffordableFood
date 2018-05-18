<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserTableDummyDataCurrencyLanguage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(" UPDATE `users` SET `language` = 1, `currency`=1 where `id` =1 ");
        DB::statement(" UPDATE `users` SET `language` = 3, `currency`=3 where `id` =2 ");
        DB::statement(" UPDATE `users` SET `language` = 2, `currency`=1 where `id` =3 ");
        DB::statement(" UPDATE `users` SET `language` = 1, `currency`=6 where `id` =4 ");
        DB::statement(" UPDATE `users` SET `language` = 1, `currency`=2 where `id` =5 ");
        DB::statement(" UPDATE `users` SET `language` = 1, `currency`=4 where `id` =6 ");
        DB::statement(" UPDATE `users` SET `language` = 5, `currency`=5 where `id` =7 ");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement(" UPDATE `users` SET `language` = 1, `currency`=1");   
    }
}
