<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	['name' => 'Jeans'],
        	['name' => 'Tops'],
        	['name' => 'Jurken'],
        	['name' => 'T-shirts'],
        	['name' => 'Rokken'],
        	['name' => 'Broeken'],
        	['name' => 'Schoenen'],
        	['name' => 'Tassen']
        ]);
    }
}
