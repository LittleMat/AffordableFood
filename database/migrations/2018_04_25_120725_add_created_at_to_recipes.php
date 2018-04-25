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
        Schema::table('recipes', function($table) {
            $table->timestamps();
        });//
        
        DB::statement(" ALTER TABLE `recipes` MODIFY COLUMN `slug` CHAR(20) DEFAULT NULL  ");
        
        DB::statement(" ALTER TABLE `recipes` MODIFY COLUMN `grade` CHAR(30)  DEFAULT NULL ");
        
        DB::statement(" ALTER TABLE `recipes` MODIFY COLUMN `photo` CHAR(30)  DEFAULT NULL ");
        
        DB::statement(" ALTER TABLE `recipes` MODIFY COLUMN `author_id` int(11)  DEFAULT NULL  ");
        
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
