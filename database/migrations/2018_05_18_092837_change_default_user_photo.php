<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDefaultUserPhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(" ALTER TABLE `users` MODIFY COLUMN `photo` CHAR(250) DEFAULT 'image/default.png' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement(" ALTER TABLE `users` MODIFY COLUMN `photo` CHAR(250) DEFAULT '/public/images/default.jpg' ");
    }
}
