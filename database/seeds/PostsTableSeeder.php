<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('posts')->insert([
            [
                'post_category_id' => 1,
                'user_id' => 1,
                'subject' => json_encode([
                    'pl' => 'Testowy temat',
                    'en' => 'Subject test',
                    'ru' => 'Rus sub test'
                ]),
                'excetra' => json_encode([
                    'pl' => 'Przykladowy text majacy na celu sprwadzanie funkcjonalnosci',
                    'en' => 'This is example text created by check if it works',
                    'ru' => 'Rus This is example text created by check if it works'               
                ]),
                'created_at' => $now
            ],
            [
                'post_category_id' => 1,
                'user_id' => 1,
                'subject' => json_encode([
                    'pl' => '123Testowy temat',
                    'en' => '123Subject test',
                    'ru' => '123Rus sub test'
                ]),
                'excetra' => json_encode([
                    'pl' => '123Przykladowy text majacy na celu sprwadzanie funkcjonalnosci',
                    'en' => '123This is example text created by check if it works',
                    'ru' => '123Rus This is example text created by check if it works'               
                ]),
                'created_at' => $now
            ]    
        ]);
    }
}
