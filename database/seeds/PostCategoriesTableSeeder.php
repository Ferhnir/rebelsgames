<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PostCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('rg_post_category')->insert([
            ['name' => json_encode([
                'pl' => 'Testowy temat',
                'en' => 'Server update',
                'ru' => 'Rus sub test'
            ]), 'created_at' => Carbon::now()],
            ['name' => json_encode([
                'pl' => 'Testowy temat',
                'en' => 'Minor fixings',
                'ru' => 'Rus sub test'
            ]), 'created_at' => Carbon::now()],
            ['name' => json_encode([
                'pl' => 'Testowy temat',
                'en' => 'Other',
                'ru' => 'Rus sub test'
            ]), 'created_at' => Carbon::now()]
        ]);
    }
}
