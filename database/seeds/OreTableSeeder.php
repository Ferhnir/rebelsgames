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
                ]),
                'occurrence_obj_id' => json_encode([1,2,3,4,5])
            ],
            [
                'name' => json_encode([
                    'pl' => 'Kobalt',
                    'en' => 'Cobalt',
                    'ru' => 'Cobalt'
                ]),
                'occurrence_obj_id' => json_encode([1,3,5])
            ],
            [
                'name' => json_encode([
                    'pl' => 'Krzem',
                    'en' => 'Silicon',
                    'ru' => 'Silicon'
                ]),
                'occurrence_obj_id' => json_encode([1,2,3])
            ],
            [
                'name' => json_encode([
                    'pl' => 'Krzem1',
                    'en' => 'Silicon1',
                    'ru' => 'Silicon1'
                ]),
                'occurrence_obj_id' => json_encode([3,4,5])
            ],
            [
                'name' => json_encode([
                    'pl' => 'Krzem2',
                    'en' => 'Silicon2',
                    'ru' => 'Silicon2'
                ]),
                'occurrence_obj_id' => json_encode([1,5])
            ],
            [
                'name' => json_encode([
                    'pl' => 'Krzem3',
                    'en' => 'Silicon3',
                    'ru' => 'Silicon3'
                ]),
                'occurrence_obj_id' => json_encode([4])
            ]
        ]);
    }
}
