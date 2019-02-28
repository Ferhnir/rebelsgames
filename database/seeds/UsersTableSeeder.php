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
        $now = Carbon::now();

        DB::table('users')->insert([
            'name' => 'Ferhnir',
            'email' => 'zax1984@gmail.com',
            'password' => '$2y$10$cjKNgvMfk1OZRivgpXKdQeK0LTklgxpOxtG3OhndDyulWieUwIP8.',
            'role_id' => 1,
            'email_verified_at' => $now,
            'created_at' => $now
        ]);
    }
}
