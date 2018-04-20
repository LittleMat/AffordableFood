<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeMoreNullableColumnsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(" ALTER TABLE `users` MODIFY COLUMN `adress` CHAR(60) NOT NULL DEFAULT 'Horsens' ");
        DB::statement(" ALTER TABLE `users` MODIFY COLUMN `language` CHAR(30) NOT NULL DEFAULT 'english' ");
        DB::statement(" ALTER TABLE `users` MODIFY COLUMN `currency` CHAR(30) NOT NULL DEFAULT 'euro' ");
        DB::statement(" ALTER TABLE `users` MODIFY COLUMN `member_status_id` INT(11) NOT NULL DEFAULT 1 ");
        DB::statement(" ALTER TABLE `users` MODIFY COLUMN `photo` CHAR(250) NOT NULL DEFAULT '/public/images/default.jpg' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement(" ALTER TABLE `users` MODIFY COLUMN `adress` CHAR(60) NOT NULL DEFAULT NULL ");
        DB::statement(" ALTER TABLE `users` MODIFY COLUMN `language` CHAR(30) NOT NULL DEFAULT NULL ");
        DB::statement(" ALTER TABLE `users` MODIFY COLUMN `currency` CHAR(30) NOT NULL DEFAULT NULL ");
        DB::statement(" ALTER TABLE `users` MODIFY COLUMN `member_status_id` INT(11) NOT NULL DEFAULT NULL ");
        DB::statement(" ALTER TABLE `users` MODIFY COLUMN `photo` CHAR(250) NOT NULL DEFAULT NULL ");
    }
}
