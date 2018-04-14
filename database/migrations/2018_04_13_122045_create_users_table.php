<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name', 50);
            $table->char('password', 60);
            $table->char('first_name', 30);
            $table->char('last_name', 30);
            $table->char('email', 30);
            $table->char('adress', 60);
            $table->char('language', 30);
            $table->char('currency', 30);
            $table->integer('member_status_id');
            $table->char('photo', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
