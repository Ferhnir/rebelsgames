<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(PostCategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(FaqCategoryTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(OreTableSeeder::class);
        $this->call(CelestialCategorySeeder::class);
        $this->call(CelestialObjSeeder::class);
        $this->call(FaqCommandsSeeder::class);
    }
}
