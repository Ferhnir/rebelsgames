<?php

use Illuminate\Database\Seeder;

class OreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rg_ore')->insert([
            [
                'name' => json_encode([
                    'pl' => 'Żelazo',
                    'en' => 'Iron',
                    'ru' => 'Iron'
                ])
            ],
            [
                'name' => json_encode([
                    'pl' => 'Kobalt',
                    'en' => 'Cobalt',
                    'ru' => 'Cobalt'
                ])
            ],
            [
                'name' => json_encode([
                    'pl' => 'Krzem',
                    'en' => 'Silicon',
                    'ru' => 'Silicon'
                ])
            ],
            [
                'name' => json_encode([
                    'pl' => 'Krzem1',
                    'en' => 'Silicon1',
                    'ru' => 'Silicon1'
                ])
            ],
            [
                'name' => json_encode([
                    'pl' => 'Krzem2',
                    'en' => 'Silicon2',
                    'ru' => 'Silicon2'
                ])
            ],
            [
                'name' => json_encode([
                    'pl' => 'Krzem3',
                    'en' => 'Silicon3',
                    'ru' => 'Silicon3'
                ])
            ]
        ]);
    }
}
