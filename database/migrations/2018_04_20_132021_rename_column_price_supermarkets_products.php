<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnPriceSupermarketsProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('supermarket_products', function(Blueprint $table) {
                $table->renameColumn('name', 'price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('supermarket_products', function(Blueprint $table) {
                $table->renameColumn('price', 'name');
        });
    }
}
