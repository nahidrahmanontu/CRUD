<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'title'=>'Mazegeek',
            'subtitle'=>'Software Company',
            'gallery'=>'https://mazegeek.com/themes/mazegeek/assets/images/MazeGeek_thumb_final.jpg',
        ]);

    }
}
