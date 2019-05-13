<?php

use Illuminate\Database\Seeder;

class CelestialObjSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rg_celestial_obj')->insert([
            [
                'id' => 1,
                'name' => json_encode([
                    'pl' => 'Ziemia',
                    'en' => 'Earth',
                    'ru' => 'Earth'
                ]),
                'celestial_category_id' => 1
            ],
            [
                'id' => 2,
                'name' => json_encode([
                    'pl' => 'Mars',
                    'en' => 'Mars',
                    'ru' => 'Mars'
                ]),
                'celestial_category_id' => 1
            ],
            [
                'id' => 3,
                'name' => json_encode([
                    'pl' => 'Planeta obych',
                    'en' => 'Alien',
                    'ru' => 'Alien'
                ]),
                'celestial_category_id' => 1
            ],
            [
                'id' => 4,
                'name' => json_encode([
                    'pl' => 'Martwe słońce',
                    'en' => 'Dead sun',
                    'ru' => 'Dead sun'
                ]),
                'celestial_category_id' => 3
            ],
            [
                'id' => 5,
                'name' => json_encode([
                    'pl' => 'Asteroidy',
                    'en' => 'Asteroids',
                    'ru' => 'Asteroids'
                ]),
                'celestial_category_id' => 3
            ],
            [
                'id' => 6,
                'name' => json_encode([
                    'pl' => 'Księżyc',
                    'en' => 'Moon',
                    'ru' => 'Moon'
                ]),
                'celestial_category_id' => 2
            ],
            [
                'id' => 7,
                'name' => json_encode([
                    'pl' => 'Tytan',
                    'en' => 'Titan',
                    'ru' => 'Titan'
                ]),
                'celestial_category_id' => 2
            ],
            [
                'id' => 8,
                'name' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europe',
                    'ru' => 'Europe'
                ]),
                'celestial_category_id' => 2
            ]
        ]);
    }
}
