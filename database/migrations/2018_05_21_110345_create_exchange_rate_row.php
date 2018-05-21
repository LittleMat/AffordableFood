<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExchangeRateRow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('currencies', function (Blueprint $table) {
            $table->double('rate')->nullable(); //
        }); //
        Schema::table('currencies', function (Blueprint $table) {
            $table->string('symbol')->nullable(); //
        }); 
        DB::statement(" UPDATE `currencies` SET `rate` = 0.134,`symbol`='€'  where `id` =1 "); 
        DB::statement(" UPDATE `currencies` SET `rate` = 1    ,`symbol`='kr' where `id` =2 ");   
        DB::statement(" UPDATE `currencies` SET `rate` = 0.24 ,`symbol`='£'  where `id` =3 ");  
        DB::statement(" UPDATE `currencies` SET `rate` = 0.42 ,`symbol`='$'  where `id` =4 ");  
        DB::statement(" UPDATE `currencies` SET `rate` = 2.01 ,`symbol`='¥'  where `id` =5 "); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('currencies', function (Blueprint $table) {
            $table->dropColumn('rate');//
        });
        Schema::table('currencies', function (Blueprint $table) {
            $table->dropColumn('symbol');//
        });//
    }
}
