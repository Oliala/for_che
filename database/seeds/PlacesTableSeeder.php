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
            'description' => '',
            'address' => 'Красна Площа, Вулиця Шевченка, 7, Чернігів',
            'image' => 'redSquare.jpg',
            'phone_number'=>'',
            'email'=>'',
            'popularity' => '',
            'category' => 'park',
        ]);

        DB::table('places')->insert([
            'name' => 'Готель "Україна"',
            'address'=>'ГОТЕЛЬ “УКРАЇНА" проспект Перемоги, 88/33, Чернігів',
            'description' => '',
            'image' => 'hotelUkraine.jpg',
            'phone_number'=>'+380462 651 400',
            'email'=>'',
            'popularity' => '',
            'category' => 'hotel',
        ]);

        DB::table('places')->insert([
            'name' => 'Mamamia',
            'description' => 'MAMAMIA, Вулиця П`ятницька, 50',
            'address' => 'Красна Площа, Вулиця Шевченка, 7, Чернігів',
            'image' => 'mamamia.jpg',
            'phone_number'=>'',
            'email'=>'',
            'popularity' => '',
            'category' => 'restaurant',
        ]);
        DB::table('places')->insert([
            'name' => 'Leo hostel',
            'description' => '',
            'address' => 'вулиця Толстого,148-152, Чернігів',
            'image' => 'LeoHostel.jpg',
            'phone_number'=>'+38(063)790 0069',
            'email'=>'',
            'popularity' => '',
            'category' => 'hotel',
        ]);
    }
}
