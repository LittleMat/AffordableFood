<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCreatedAtToRecipes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            $table->timestamps();
        });//
        
        DB::statement(" ALTER TABLE `recipes` MODIFY COLUMN `slug` CHAR(20) NULL DEFAULT  ");
        
        DB::statement(" ALTER TABLE `recipes` MODIFY COLUMN `grade` CHAR(30)  NULL DEFAULT ");
        
        DB::statement(" ALTER TABLE `recipes` MODIFY COLUMN `photo` CHAR(30)  NULL DEFAULT ");
        
        DB::statement(" ALTER TABLE `recipes` MODIFY COLUMN `author_id` int(11)  NULL DEFAULT ");
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
