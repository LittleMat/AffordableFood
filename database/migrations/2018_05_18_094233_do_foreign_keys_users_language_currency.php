<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DoForeignKeysUsersLanguageCurrency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('language')->references('id')->on('languages');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('currency')->references('id')->on('currencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
                    $table->dropForeign('users_language_id_foreign');
                });
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_currency_foreign');
        });
    }
}
