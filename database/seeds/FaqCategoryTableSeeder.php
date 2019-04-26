<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;


class FaqCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('rg_faq_category')->insert([
            ['name' => json_encode([
                'pl' => 'Pytania i odpowiedzi',
                'en' => 'Questions and answers',
                'ru' => 'Вопросы и ответы'               
            ]), 'created_at' => Carbon::now()],
            ['name' => json_encode([
                'pl' => 'Wiadomość dnia',
                'en' => 'Motd',
                'ru' => 'Информация на сегодня'               
            ]), 'created_at' => Carbon::now()],
            ['name' => json_encode([
                'pl' => 'Handel',
                'en' => 'Trade',
                'ru' => 'Торговля'               
            ]), 'created_at' => Carbon::now()],
            ['name' => json_encode([
                'pl' => 'Surowce',
                'en' => 'Ore info',
                'ru' => 'Ore info'               
            ]), 'created_at' => Carbon::now()],
            ['name' => json_encode([
                'pl' => 'Rafineria',
                'en' => 'Refinery',
                'ru' => 'Refinery'               
            ]), 'created_at' => Carbon::now()],
            ['name' => json_encode([
                'pl' => 'Komendy',
                'en' => 'Commands',
                'ru' => 'Commands'               
            ]), 'created_at' => Carbon::now()],
        ]);
    }
}
