<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            'name' => 'Красна Площа',
            'description' => 'Красна Площа, Вулиця Шевченка, 7, Чернігів',
            'image' => 'redSquare',
            'popularity' => '',
            'category' => 'park',
        ]);

        DB::table('places')->insert([
            'name' => 'Готель "Україна"',
            'description' => 'ГОТЕЛЬ “УКРАЇНА" ,проспект Перемоги, 88/33, Чернігів',
            'image' => 'hotelUkraine',
            'popularity' => '',
            'category' => 'hotel',
        ]);

        DB::table('places')->insert([
            'name' => 'Maamamia',
            'description' => 'MAMAMIA, Вулиця П`ятницька, 50',
            'image' => 'mamamia',
            'popularity' => '',
            'category' => 'restaurant',
        ]);
    }
}
