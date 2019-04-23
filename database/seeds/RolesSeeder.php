<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rg_roles')->insert([
            ['name' => 'God', 'power' => 1],
            ['name' => 'Admin', 'power' => 2],
            ['name' => 'Moderator', 'power' => 3],
            ['name' => 'User', 'power' => 4],
        ]);
    }
}
