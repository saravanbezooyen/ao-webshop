<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	['name' => 'Wit t-shirt'],
        	['name' => 'Jurkje'],
        	['name' => 'Sneakers'],
        	['name' => 'Rugtas']
        ]);
    }
}
