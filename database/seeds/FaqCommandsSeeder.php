<?php

use Illuminate\Database\Seeder;

class FaqCommandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rg_faq_commands')->insert([
            [
                'command'       => 'discord',
                'description'   => json_encode(['pl' => 'pokazuje adres serwera disord', 'en' => 'Discord server link', 'ru' => 'Discord server link'])
            ],
            [
                'command'       => 'updates',
                'description'   => json_encode(['pl' => 'informacje o akutalizacjach', 'en' => 'Information about updates', 'ru' => 'Information about updates'])
            ],
            [
                'command'       => 'help',
                'description'   => json_encode(['pl' => 'Panel pomocy','en' => 'Help panel', 'ru' => 'Help panel'])
            ]
        ]);
    }
}
