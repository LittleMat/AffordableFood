<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DoAllForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('member_status_id')->references('id')->on('member_statuses');
        });

        Schema::table('feedbacks', function (Blueprint $table) {
            $table->foreign('author_id')->references('id')->on('users');
        });

        Schema::table('favorite_recipes', function (Blueprint $table) {
            $table->foreign('recipe_id')->references('id')->on('recipes');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('recipes', function (Blueprint $table) {
            $table->foreign('author_id')->references('id')->on('users');
        });

        Schema::table('favorite_products', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('supermarket_products', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('supermarket_id')->references('id')->on('supermarkets');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('category_id')->references('id')->on('categories');
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
            $table->dropForeign('users_member_status_id_foreign');
        });

        Schema::table('feedbacks', function (Blueprint $table) {
            $table->dropForeign('feedbacks_author_id_foreign');
        });

        Schema::table('favorite_recipes', function (Blueprint $table) {
            $table->dropForeign('favorite_recipes_recipe_id_foreign');
            $table->dropForeign('favorite_recipes_user_id_foreign');
        });

        Schema::table('recipes', function (Blueprint $table) {
            $table->dropForeign('recipes_author_id_foreign');
        });

        Schema::table('favorite_products', function (Blueprint $table) {
            $table->dropForeign('favorite_products_product_id_foreign');
            $table->dropForeign('favorite_products_user_id_foreign');
        });

        Schema::table('supermarket_products', function (Blueprint $table) {
            $table->dropForeign('supermarket_products_product_id_foreign');
            $table->dropForeign('supermarket_products_supermarket_id_foreign');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_brand_id_foreign');
            $table->dropForeign('products_category_id_foreign');
        });
    }
}
