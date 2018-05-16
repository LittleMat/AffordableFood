<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertDummyData extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Members and statuses
        DB::statement("truncate table users");       
        DB::statement("truncate table member_statuses"); 

        Db::Table('member_statuses')->insert([
            [
                'name'  => 'user'
            ],[
                'name'  => 'admin'
            ]
        ]);

        DB::table('users')->insert([
                [
                    'name'              => 'admin',
                    'password'          => '$2y$10$/1aolI498H22YHfY2CyYP.biXWUnE.TQ3DsIIW76hF5y4Z0bRqB0u',
                    'first_name'        => 'Admin',
                    'last_name'         => 'Admin',
                    'email'             => 'admin@gmail.com',
                    'adress'            => 'Chr M Østergaards Vej 4, 8700 Horsens',
                    'language'          => 'english',
                    'currency'          => 'euro',
                    'member_status_id'  => 2,
                    'created_at'        => now(),
                    'updated_at'        => now()
                ],[
                    'name'              => 'user',
                    'password'          => '$2y$10$/1aolI498H22YHfY2CyYP.biXWUnE.TQ3DsIIW76hF5y4Z0bRqB0u',
                    'first_name'        => 'User',
                    'last_name'         => 'User',
                    'email'             => 'user@gmail.com',
                    'adress'            => 'Chr M Østergaards Vej 4, 8700 Horsens',
                    'language'          => 'english',
                    'currency'          => 'euro',
                    'member_status_id'  => 1,
                    'created_at'        => now(),
                    'updated_at'        => now()
                ],[
                    'name'              => 'someone',
                    'password'          => '$2y$10$/1aolI498H22YHfY2CyYP.biXWUnE.TQ3DsIIW76hF5y4Z0bRqB0u',
                    'first_name'        => 'Aha',
                    'last_name'         => 'Someone',
                    'email'             => 'lol@gmail.com',
                    'adress'            => 'Chr M Østergaards Vej 4, 8700 Horsens',
                    'language'          => 'english',
                    'currency'          => 'euro',
                    'member_status_id'  => 1,
                    'created_at'        => now(),
                    'updated_at'        => now()
                ],[
                    'name'              => 'MathieuP',
                    'password'          => '$2y$10$/1aolI498H22YHfY2CyYP.biXWUnE.TQ3DsIIW76hF5y4Z0bRqB0u',
                    'first_name'        => 'Mathieu',
                    'last_name'         => 'Pontoto',
                    'email'             => 'mathieu@ponto.com',
                    'adress'            => 'en france xd',
                    'language'          => 'french',
                    'currency'          => 'franc',
                    'member_status_id'  => 1,
                    'created_at'        => now(),
                    'updated_at'        => now()
                ],[
                    'name'              => 'remyy',
                    'password'          => '$2y$10$/1aolI498H22YHfY2CyYP.biXWUnE.TQ3DsIIW76hF5y4Z0bRqB0u',
                    'first_name'        => 'Remy',
                    'last_name'         => 'Buiiitten',
                    'email'             => 'rems@buita.com',
                    'adress'            => 'dutchland',
                    'language'          => 'dutch',
                    'currency'          => 'euro',
                    'member_status_id'  => 1,
                    'created_at'        => now(),
                    'updated_at'        => now()
                ],[
                    'name'              => 'mathieum',
                    'password'          => '$2y$10$/1aolI498H22YHfY2CyYP.biXWUnE.TQ3DsIIW76hF5y4Z0bRqB0u',
                    'first_name'        => 'Mathieu',
                    'last_name'         => 'Mtg',
                    'email'             => 'mathieu@mtg.dk',
                    'adress'            => 'Alsace',
                    'language'          => 'french',
                    'currency'          => 'euro',
                    'member_status_id'  => 1,
                    'created_at'        => now(),
                    'updated_at'        => now() 
                ],[
                    'name'              => 'jorne',
                    'password'          => '$2y$10$/1aolI498H22YHfY2CyYP.biXWUnE.TQ3DsIIW76hF5y4Z0bRqB0u',
                    'first_name'        => 'Joren',
                    'last_name'         => 'Slav_king',
                    'email'             => 'jo_gopnik@laposte.dk',
                    'adress'            => 'ufr math info',
                    'language'          => 'russ',
                    'currency'          => 'crypto_rubbles',
                    'member_status_id'  => 1,
                    'created_at'        => now(),
                    'updated_at'        => now() 
                ]]
            );

        DB::statement("truncate table supermarket_products");       
        DB::statement("truncate table products");       
        DB::statement("truncate table supermarkets"); 
        DB::statement("truncate table brands"); 
        DB::statement("truncate table categories");         
        
        DB::table('categories')->insert([
                ['name' => 'Fruit']     ,   ['name' => 'Vegetable'] ,  ['name' => 'Bread'],
                ['name' => 'Pizza']     ,   ['name' => 'Nuddle']    ,  ['name' => 'Fish'],
                ['name' => 'Meat']      ,   ['name' => 'Sauce']     ,  ['name' => 'Sweets'],
                ['name' => 'Cake']      ,   ['name' => 'Snacks']    ,  ['name' => 'Spread'],
                ['name' => 'Raw food']  ,   ['name' => 'Grain']     ,  ['name' => 'Cheese'],
                ['name' => 'i dunno']
            ]);

        DB::table('brands')->insert([
                ['name' => 'Cucina']        ,   ['name' => 'Casa Moranda']      ,   ['name' => 'Farchioni'],
                ['name' => 'Valdigrando']   ,   ['name' => 'Lorenzo']           ,   ['name' => 'Guldwang'],
                ['name' => 'Trader Joes']   ,   ['name' => 'Rema 1000']         ,   ['name' => 'Allgäuland'],
                ['name' => 'Bulko']         ,   ['name' => 'Coca Cola Company'] ,   ['name' => 'Fynbo'],
                ['name' => 'Tuborg']        ,   ['name' => 'Jacks Farm']        ,   ['name' => 'Mama Macini'],
                ['name' => 'Ferrero']       ,   ['name' => 'Modena']            ,   ['name' => 'Valblanc'],
                ['name' => 'i dunno']
            ]);

        DB::table('supermarkets')->insert([
                [
                     'Name'             =>  'Rema 1000',
                     'Adress'           =>  'Sundparkens Butikstorv, 8700 Horsens',
                     'opening_hours'    =>  'All days 07h30 - 22h00',
                     'description'      =>  'Cheap small supermarket'
                ],[
                     'Name'             =>  'Bilka',
                     'Adress'           =>  'Høegh Guldbergs Gade 10, 8700 Horsens',
                     'opening_hours'    =>  'All days 06h00 - 00h00',
                     'description'      =>  'Very big supermarket in Horsens'
                ],[
                     'Name'             =>  'Lovberg',
                     'Adress'           =>  'Borgergade 12, 8700 Horsens',
                     'opening_hours'    =>  'All days 08h00 - 21h00',
                     'description'      =>  'Small supermarket near Kamjakta'
                ],[
                     'Name'             =>  'Aldi',
                     'Adress'           =>  'Sundvej 109, 8700 Horsens',
                     'opening_hours'    =>  'All days 08h00 - 20h00',
                     'description'      =>  'Good supermarket near Student village'
                ],[
                     'Name'             =>  'Fakta',
                     'Adress'           =>  'Langmarksvej 105, 8700 Horsens',
                     'opening_hours'    =>  'All days 08h00 - 22h00',
                     'description'      =>  'A bit expensive but good'
                ]
            ]);



        
        DB::table('products')->insert([
                [
                     'name'         =>  'Salami Stenovnspizza',
                     'description'  =>  'A 3 fromage pizzae',
                     'grade'        =>  4,  'brand_id'  =>  15, 'category_id'   =>  4
                ],[
                     'name'         =>  'Modena Peperoni',
                     'description'  =>  'Italian Pizza with peperoni',
                     'grade'        =>  4,  'brand_id'  =>  17, 'category_id'   =>  4
                ],[
                     'name'         =>  'Gramigna',
                     'description'  =>  'Nuddles from La pasta di Lorenzo',
                     'grade'        =>  4.2,'brand_id'  =>  5,  'category_id'   =>  5
                ],[
                     'name'         =>  'Fusilli Pasta',
                     'description'  =>  'Pasta',
                     'grade'        =>  3,  'brand_id'  =>  4,  'category_id'   =>  5
                ],[
                     'name'         =>  'Groft Brod',
                     'description'  =>  'Kernerugbrod, very healthy and Danish',
                     'grade'        =>  3.4,'brand_id'  =>  6,  'category_id'   =>  3
                ],[
                     'name'         =>  'Bread Grow Sandwitch',
                     'description'  =>  'White bread for sandwitch',
                     'grade'        =>  2,  'brand_id'  =>  7,  'category_id'   =>  3
                ],[
                     'name'         =>  'Ementaler',
                     'description'  =>  'Cheese that meelts',
                     'grade'        =>  5,  'brand_id'  =>  9,  'category_id'   =>  15
                ],[
                     'name'         =>  'Arrabiata',
                     'description'  =>  'Sauce for nuddles',
                     'grade'        =>  4,  'brand_id'  =>  2,  'category_id'   =>  8
                ],[
                     'name'         =>  'Pesto verde',
                     'description'  =>  'Sauce for nuddles and sandwitch',
                     'grade'        =>  4.8,'brand_id'  =>  2,  'category_id'   =>  8
                ],[
                     'name'         =>  'Plante Margarine 60',
                     'description'  =>  '',
                     'grade'        =>  3.2,'brand_id'  =>  8,  'category_id'   =>  12
                ],[
                     'name'         =>  'Ribsgele',
                     'description'  =>  'Some jam made of current',
                     'grade'        =>  2,  'brand_id'  =>  12, 'category_id'   =>  12
                ],[
                     'name'         =>  'Bacon',
                     'description'  =>  '',
                     'grade'        =>  3.7,'brand_id'  =>  8,  'category_id'   =>  7
                ],[
                     'name'         =>  'Salami',
                     'description'  =>  '',
                     'grade'        =>  2,  'brand_id'  =>  8,  'category_id'   =>  7
                ],[
                     'name'         =>  'Toast cheese',
                     'description'  =>  'Perfect for cheese',
                     'grade'        =>  1,  'brand_id'  =>  18,  'category_id'   =>  15
                ],[
                     'name'         =>  'Piece of chicken',
                     'description'  =>  'Perfect for cheese',
                     'grade'        =>  0,  'brand_id'  =>  8,  'category_id'   =>  7
                ],[
                     'name'         =>  'Olivenolie',
                     'description'  =>  'Good to cook things in a pan',
                     'grade'        =>  5,  'brand_id'  =>  2,  'category_id'   =>  15
                ],[
                     'name'         =>  'Olivenolie',
                     'description'  =>  'Good to cook things in a pan',
                     'grade'        =>  4,  'brand_id'  =>  3,  'category_id'   =>  15
                ],[
                     'name'         =>  'Balsamique toping',
                     'description'  =>  'Good for salade',
                     'grade'        =>  3,  'brand_id'  =>  1,  'category_id'   =>  15
                ]
            ]);



        DB::table('supermarket_products')->insert([
                ['supermarket_id'   =>  1,  'product_id' =>  1,  'price' =>  8,     'quantity' =>  1050,  'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  1,  'product_id' =>  2,  'price' =>  7,     'quantity' =>  410,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  1,  'product_id' =>  3,  'price' =>  2,     'quantity' =>  500,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  1,  'product_id' =>  4,  'price' =>  7.5,   'quantity' =>  500,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  1,  'product_id' =>  5,  'price' =>  10.5,  'quantity' =>  1000,  'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  1,  'product_id' =>  6,  'price' =>  8,     'quantity' =>  750,  'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  1,  'product_id' =>  7,  'price' =>  20.5,  'quantity' =>  400,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  1,  'product_id' =>  8,  'price' =>  7,     'quantity' =>  420,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  1,  'product_id' =>  9,  'price' =>  8.3,   'quantity' =>  490,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  1,  'product_id' =>  10, 'price' =>  10,    'quantity' =>  340,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  1,  'product_id' =>  11, 'price' =>  7.2,   'quantity' =>  400,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  1,  'product_id' =>  12, 'price' =>  10,    'quantity' =>  150,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  1,  'product_id' =>  13, 'price' =>  10.2,  'quantity' =>  250,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  1,  'product_id' =>  14, 'price' =>  26,    'quantity' =>  250,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  1,  'product_id' =>  15, 'price' =>  32,    'quantity' =>  450,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  1,  'product_id' =>  16, 'price' =>  35,    'quantity' =>  750,   'measure_type'  =>  'ml'],
                ['supermarket_id'   =>  1,  'product_id' =>  17, 'price' =>  40,    'quantity' =>  500,   'measure_type'  =>  'ml'],
                ['supermarket_id'   =>  1,  'product_id' =>  18, 'price' =>  7,     'quantity' =>  250,   'measure_type'  =>  'ml'],


                ['supermarket_id'   =>  2,  'product_id' =>  1,  'price' =>  9,     'quantity' =>  1050,  'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  2,  'product_id' =>  2,  'price' =>  6.5,   'quantity' =>  410,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  2,  'product_id' =>  3,  'price' =>  2.1,   'quantity' =>  450,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  2,  'product_id' =>  4,  'price' =>  7.6,   'quantity' =>  500,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  2,  'product_id' =>  6,  'price' =>  8,     'quantity' =>  750,  'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  2,  'product_id' =>  7,  'price' =>  25.5,  'quantity' =>  450,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  2,  'product_id' =>  8,  'price' =>  7,     'quantity' =>  420,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  2,  'product_id' =>  9,  'price' =>  8.3,   'quantity' =>  490,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  2,  'product_id' =>  10, 'price' =>  11,    'quantity' =>  340,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  2,  'product_id' =>  11, 'price' =>  7.5,   'quantity' =>  410,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  2,  'product_id' =>  12, 'price' =>  10,    'quantity' =>  150,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  2,  'product_id' =>  13, 'price' =>  10.2,  'quantity' =>  250,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  2,  'product_id' =>  15, 'price' =>  35,    'quantity' =>  450,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  2,  'product_id' =>  16, 'price' =>  35,    'quantity' =>  750,   'measure_type'  =>  'ml'],
                ['supermarket_id'   =>  2,  'product_id' =>  17, 'price' =>  60,    'quantity' =>  700,   'measure_type'  =>  'ml'],
                ['supermarket_id'   =>  2,  'product_id' =>  18, 'price' =>  10,     'quantity' =>  250,   'measure_type'  =>  'ml'],


                ['supermarket_id'   =>  3,  'product_id' =>  1,  'price' =>  8,     'quantity' =>  1050,  'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  3,  'product_id' =>  2,  'price' =>  7,     'quantity' =>  410,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  3,  'product_id' =>  3,  'price' =>  2,     'quantity' =>  405,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  3,  'product_id' =>  5,  'price' =>  8.5,   'quantity' =>  900,  'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  3,  'product_id' =>  6,  'price' =>  7,     'quantity' =>  750,  'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  3,  'product_id' =>  7,  'price' =>  22.5,  'quantity' =>  400,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  3,  'product_id' =>  8,  'price' =>  7,     'quantity' =>  420,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  3,  'product_id' =>  9,  'price' =>  8,     'quantity' =>  490,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  3,  'product_id' =>  10, 'price' =>  12,    'quantity' =>  340,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  3,  'product_id' =>  11, 'price' =>  7,     'quantity' =>  400,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  3,  'product_id' =>  12, 'price' =>  10,    'quantity' =>  270,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  3,  'product_id' =>  13, 'price' =>  15.2,  'quantity' =>  250,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  3,  'product_id' =>  14, 'price' =>  26,    'quantity' =>  250,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  3,  'product_id' =>  15, 'price' =>  42,    'quantity' =>  300,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  3,  'product_id' =>  16, 'price' =>  35,    'quantity' =>  750,   'measure_type'  =>  'ml'],
                ['supermarket_id'   =>  3,  'product_id' =>  17, 'price' =>  42,    'quantity' =>  450,   'measure_type'  =>  'ml'],
                ['supermarket_id'   =>  3,  'product_id' =>  18, 'price' =>  7,     'quantity' =>  250,   'measure_type'  =>  'ml'],


                ['supermarket_id'   =>  4,  'product_id' =>  2,  'price' =>  7,     'quantity' =>  410,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  4,  'product_id' =>  3,  'price' =>  3,     'quantity' =>  500,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  4,  'product_id' =>  4,  'price' =>  7.8,   'quantity' =>  500,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  4,  'product_id' =>  5,  'price' =>  10,    'quantity' =>  1000,  'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  4,  'product_id' =>  6,  'price' =>  8,     'quantity' =>  750,  'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  4,  'product_id' =>  7,  'price' =>  20.5,  'quantity' =>  400,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  4,  'product_id' =>  8,  'price' =>  7,     'quantity' =>  420,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  4,  'product_id' =>  9,  'price' =>  5.3,   'quantity' =>  490,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  4,  'product_id' =>  10, 'price' =>  10,    'quantity' =>  340,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  4,  'product_id' =>  11, 'price' =>  7.2,   'quantity' =>  400,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  4,  'product_id' =>  12, 'price' =>  10,    'quantity' =>  150,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  4,  'product_id' =>  13, 'price' =>  9,     'quantity' =>  250,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  4,  'product_id' =>  14, 'price' =>  23,    'quantity' =>  250,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  4,  'product_id' =>  15, 'price' =>  32,    'quantity' =>  450,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  4,  'product_id' =>  16, 'price' =>  32,    'quantity' =>  740,   'measure_type'  =>  'ml'],
                ['supermarket_id'   =>  4,  'product_id' =>  17, 'price' =>  30,    'quantity' =>  500,   'measure_type'  =>  'ml'],
                ['supermarket_id'   =>  4,  'product_id' =>  18, 'price' =>  7,     'quantity' =>  250,   'measure_type'  =>  'ml'],


                ['supermarket_id'   =>  5,  'product_id' =>  1,  'price' =>  5.3,   'quantity' =>  1050,  'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  5,  'product_id' =>  2,  'price' =>  7,     'quantity' =>  410,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  5,  'product_id' =>  3,  'price' =>  2,     'quantity' =>  500,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  5,  'product_id' =>  4,  'price' =>  7.5,   'quantity' =>  500,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  5,  'product_id' =>  5,  'price' =>  10,    'quantity' =>  1000,  'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  5,  'product_id' =>  6,  'price' =>  9.3,   'quantity' =>  750,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  5,  'product_id' =>  8,  'price' =>  7,     'quantity' =>  420,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  5,  'product_id' =>  9,  'price' =>  8.3,   'quantity' =>  490,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  5,  'product_id' =>  10, 'price' =>  10,    'quantity' =>  340,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  5,  'product_id' =>  11, 'price' =>  7,     'quantity' =>  410,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  5,  'product_id' =>  12, 'price' =>  13,    'quantity' =>  150,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  5,  'product_id' =>  13, 'price' =>  10.2,  'quantity' =>  250,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  5,  'product_id' =>  14, 'price' =>  26,    'quantity' =>  250,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  5,  'product_id' =>  15, 'price' =>  32,    'quantity' =>  450,   'measure_type'  =>  'gr'],
                ['supermarket_id'   =>  5,  'product_id' =>  16, 'price' =>  70,    'quantity' =>  1500,  'measure_type'  =>  'ml'],
                ['supermarket_id'   =>  5,  'product_id' =>  17, 'price' =>  7,     'quantity' =>  250,   'measure_type'  =>  'ml']

            ]);



        
        DB::statement("truncate table favorite_products");       
        DB::statement("truncate table favorite_recipes");       
        DB::statement("truncate table recipes"); 



        DB::table('favorite_products')->insert([
                ['product_id' => 1,  'user_id'=> 1], ['product_id' => 1,  'user_id'=> 2],  ['product_id' => 1,   'user_id'=> 4],
                ['product_id' => 2,  'user_id'=> 4], ['product_id' => 2,  'user_id'=> 2],  ['product_id' => 2,   'user_id'=> 3], 
                ['product_id' => 3,  'user_id'=> 5], ['product_id' => 3,  'user_id'=> 3],  ['product_id' => 3,   'user_id'=> 2],
                ['product_id' => 4,  'user_id'=> 2], ['product_id' => 4,  'user_id'=> 5],  
                ['product_id' => 5,  'user_id'=> 2], ['product_id' => 5,  'user_id'=> 1],  
                ['product_id' => 6,  'user_id'=> 5], ['product_id' => 6,  'user_id'=> 2],  
                ['product_id' => 7,  'user_id'=> 2], ['product_id' => 7,  'user_id'=> 3],  
                ['product_id' => 8,  'user_id'=> 4], ['product_id' => 8,  'user_id'=> 1],  
                ['product_id' => 9,  'user_id'=> 5], ['product_id' => 9,  'user_id'=> 4],  ['product_id' => 9,   'user_id'=> 3],
                ['product_id' => 10, 'user_id'=> 2], ['product_id' => 10, 'user_id'=> 3],  ['product_id' => 10,  'user_id'=> 1],
                ['product_id' => 11, 'user_id'=> 5], ['product_id' => 11, 'user_id'=> 4],  ['product_id' => 11,  'user_id'=> 1],
                ['product_id' => 12, 'user_id'=> 5], ['product_id' => 12, 'user_id'=> 1],  
                ['product_id' => 13, 'user_id'=> 2], ['product_id' => 13, 'user_id'=> 5],  
                ['product_id' => 14, 'user_id'=> 1], ['product_id' => 14, 'user_id'=> 3], 
                ['product_id' => 15, 'user_id'=> 2], ['product_id' => 15, 'user_id'=> 4],  ['product_id' => 15,  'user_id'=> 1],
                ['product_id' => 16, 'user_id'=> 2], ['product_id' => 16, 'user_id'=> 5],  ['product_id' => 16,  'user_id'=> 3],
                ['product_id' => 17, 'user_id'=> 3], ['product_id' => 17, 'user_id'=> 2],  ['product_id' => 17,  'user_id'=> 1],
                ['product_id' => 18, 'user_id'=> 4], ['product_id' => 18, 'user_id'=> 3],  ['product_id' => 18,  'user_id'=> 5]

            ]);


        DB::table('favorite_recipes')->insert([
                ['recipe_id' => 1,  'user_id'=> 1], ['recipe_id' => 1,  'user_id'=> 5],  
                ['recipe_id' => 2,  'user_id'=> 2], ['recipe_id' => 2,  'user_id'=> 4], 
                ['recipe_id' => 3,  'user_id'=> 3], ['recipe_id' => 3,  'user_id'=> 5],  
                ['recipe_id' => 4,  'user_id'=> 2], ['recipe_id' => 4,  'user_id'=> 4],  
                ['recipe_id' => 5,  'user_id'=> 1], ['recipe_id' => 5,  'user_id'=> 3]

            ]);

        DB::table('recipes')->insert([
            [
                'title'         => 'Brownies',
                'description'   => 'they are gud',    
                'grade'         => 4.2, 
                'author_id'     => 1,  
                'created_at'    => now(),
                'updated_at'    => now() 
            ],[
                'title'         => 'French toast',
                'description'   => 'lost bread xd',    
                'grade'         => 4.3, 
                'author_id'     => 1,  
                'created_at'    => now(),
                'updated_at'    => now() 
            ],[
                'title'         => 'Pizza',
                'description'   => 'I dont want to write the description',    
                'grade'         => 0, 
                'author_id'     => 3, 
                'created_at'    => now(),
                'updated_at'    => now() 
            ],[
                'title'         => 'Cookies',
                'description'   => 'Do some cookies',    
                'grade'         => 4.8,
                'author_id'     => 4,  
                'created_at'    => now(),
                'updated_at'    => now() 
            ],[
                'title'         => 'Nothing',
                'description'   => 'just air',    
                'grade'         => 5, 
                'author_id'     => 5,  
                'created_at'    => now(),
                'updated_at'    => now() 
            ]
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("truncate table users");       
        DB::statement("truncate table member_statuses"); 

        DB::statement("truncate table supermarket_products");       
        DB::statement("truncate table products");       
        DB::statement("truncate table supermarkets"); 
        DB::statement("truncate table brands"); 
        DB::statement("truncate table categories"); 


        DB::statement("truncate table favorite_products");       
        DB::statement("truncate table favorite_recipes");       
        DB::statement("truncate table recipes"); 
    }
}
