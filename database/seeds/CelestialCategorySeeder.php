<?php

use Illuminate\Database\Seeder;

class CelestialCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rg_celestial_category')->insert([
            [
                'id' => 1,
                'name' => json_encode([
                    'pl' => 'Planety',
                    'en' => 'Planets',
                    'ru' => 'Planets'
                ])
            ],
            [
                'id' => 2,
                'name' => json_encode([
                    'pl' => 'Księżyce',
                    'en' => 'Moons',
                    'ru' => 'Moons'
                ])
            ],
            [
                'id' => 3,
                'name' => json_encode([
                    'pl' => 'Inne',
                    'en' => 'Other',
                    'ru' => 'Other'
                ])
            ]
        ]);
    }
}
