<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDummyDataCurrencyLanguage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::Table('currencies')->insert([
            [
                'name'  => 'Euro',
                'currency_name'=> 'EUR' 
            ],[
                'name'  => 'Danish krone',
                'currency_name'=> 'DKK' 
            ],[
                'name'  => 'British pound',
                'currency_name'=> 'GPD' 
            ],[
                'name'  => 'Australian dollar',
                'currency_name'=> 'AUD' 
            ],[
                'name'  => 'Chinese Yuan',
                'currency_name'=> 'CNY' 
            ]
        ]);

        DB::Table('languages')->insert([
            [
                'name'  => 'English'
            ],[
                'name'  => 'Danish'
            ],[
                'name'  => 'Frensh'
            ],[
                'name'  => 'German'
            ],[
                'name'  => 'Dutch'
            ],[
                'name'  => 'Italian'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("truncate table languages");       
        DB::statement("truncate table currencies"); 
    }
}
