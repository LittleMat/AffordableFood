<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserTableCurrencyLanguage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(" UPDATE `users` SET `language` = 1, `currency` = 1 ");
        DB::statement(" ALTER TABLE `users` MODIFY COLUMN `language` INT(10) NOT NULL DEFAULT 1 ");
        DB::statement(" ALTER TABLE `users` MODIFY COLUMN `currency` INT(10) NOT NULL DEFAULT 1 ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->string('currency')->change();
            $table->string('language')->change();
        });
    }
}
