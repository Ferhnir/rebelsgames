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
        $now = Carbon::now();

        DB::table('post_category')->insert([
            'name' => 'Server update',
            'created_at' => $now
        ]);

        DB::table('post_category')->insert([
            'name' => 'Minor fixings',
            'created_at' => $now
        ]);

        DB::table('post_category')->insert([
            'name' => 'Other',
            'created_at' => $now
        ]);
    }
}
