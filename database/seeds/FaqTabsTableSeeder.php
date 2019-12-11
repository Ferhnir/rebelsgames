<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;


class FaqTabsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('rg_faq_tabs')->insert([
            [
                'name' => json_encode([
                    'pl' => 'Pytania i odpowiedzi',
                    'en' => 'FAQ',
                    'ru' => 'Вопросы и ответы'               
                ]),
                'vueComponent'  => null,
                'created_at' => Carbon::now()
            ],[
                'name' => json_encode([
                    'pl' => 'Wiadomość dnia',
                    'en' => 'Motd',
                    'ru' => 'Информация дня'               
                ]),
                'vueComponent'  => null,
                'created_at' => Carbon::now()
            ],[
                'name' => json_encode([
                    'pl' => 'Handel',
                    'en' => 'Trade',
                    'ru' => 'Торговля'               
                ]),
                'vueComponent'  => null,
                'created_at' => Carbon::now()
            ],[
                'name' => json_encode([
                    'pl' => 'Surowce',
                    'en' => 'Ore info',
                    'ru' => 'Информация о руде'               
                ]),
                'vueComponent'  => 'oreInfo',
                'created_at' => Carbon::now()
            ],[
                'name' => json_encode([
                    'pl' => 'Rafineria',
                    'en' => 'Refinery',
                    'ru' => 'Очистительный завод'               
                ]),
                'vueComponent'  => null,
                'created_at' => Carbon::now()
            ],[
                'name' => json_encode([
                    'pl' => 'Komendy',
                    'en' => 'Commands',
                    'ru' => 'Команды'           
                ]),
                'vueComponent'  => 'inGameCommands',
                'created_at' => Carbon::now()],
        ]);
    }
}
