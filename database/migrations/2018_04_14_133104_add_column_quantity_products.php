<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnQuantityProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('supermarket_products', function (Blueprint $table) {
            $table->integer('quantity')->default(0);
            $table->string('measure_type')->default('kg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        chema::table('supermarket_products', function (Blueprint $table) {
            $table->dropColumn(['quantity', 'measure_type']);
        });
    }
}
