<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rg_users')->insert([
            'name' => 'Ferhnir',
            'email' => 'zax1984@gmail.com',
            'password' => '$2y$10$cjKNgvMfk1OZRivgpXKdQeK0LTklgxpOxtG3OhndDyulWieUwIP8.',
            'role_id' => 1,
            'email_verified_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
