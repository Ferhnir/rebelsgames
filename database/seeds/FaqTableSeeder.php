<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class FaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rg_faq')->insert([
            [
                'question' => json_encode([
                    'pl' => 'Reward pl',
                    'en' => 'Reward en',
                    'ru' => 'Reward ru',
                    ]), 
                'answer' => json_encode([
                    'pl' => 'Jak to działa? To jest bardzo proste! W czasie rozgrywki w oknie czatu wpisz komende “vote” in chat window cast your vote and write “!reward” You will get: 120 Rebels Components!',
                    'en' => 'How it works? It is very easy! Being on the server, enter “vote” in chat window cast your vote and write “!reward” You will get: 120 Rebels Components!',
                    'ru' => 'How it works? It is very easy! Being on the server, enter “vote” in chat window cast your vote and write “!reward” You will get: 120 Rebels Components!'               
                    ]), 
                'faq_category_id' => 1,
                'vue_component'   => null,
                'created_at' => Carbon::now()
            ],
            [
                'question' => json_encode([
                    'pl' => 'Reward 2 pl',
                    'en' => 'Reward 2 en',
                    'ru' => 'Reward 2 ru',
                    ]), 
                'answer' => json_encode([
                    'pl' => 'Jak to działa? To jest bardzo proste! W czasie rozgrywki w oknie czatu wpisz komende “vote” in chat window cast your vote and write “!reward” You will get: 120 Rebels Components!',
                    'en' => 'How it works? It is very easy! Being on the server, enter “vote” in chat window cast your vote and write “!reward” You will get: 120 Rebels Components!',
                    'ru' => 'How it works? It is very easy! Being on the server, enter “vote” in chat window cast your vote and write “!reward” You will get: 120 Rebels Components!'               
                    ]), 
                'faq_category_id' => 1,
                'vue_component'   => null,
                'created_at' => Carbon::now()   
            ],
            [
                'question' => json_encode([
                    'pl' => 'Reward 3 pl',
                    'en' => 'Reward 3 en',
                    'ru' => 'Reward 3 ru',
                    ]), 
                'answer' => json_encode([
                    'pl' => 'Jak to działa? To jest bardzo proste! W czasie rozgrywki w oknie czatu wpisz komende “vote” in chat window cast your vote and write “!reward” You will get: 120 Rebels Components!',
                    'en' => 'How it works? It is very easy! Being on the server, enter “vote” in chat window cast your vote and write “!reward” You will get: 120 Rebels Components!',
                    'ru' => 'How it works? It is very easy! Being on the server, enter “vote” in chat window cast your vote and write “!reward” You will get: 120 Rebels Components!'               
                    ]), 
                'faq_category_id' => 1,
                'vue_component'   => null,
                'created_at' => Carbon::now()   
            ],
            [
                'question' => json_encode([
                    'pl' => 'Reward 4 pl',
                    'en' => 'Reward 4 en',
                    'ru' => 'Reward 4 ru',
                    ]), 
                'answer' => json_encode([
                    'pl' => 'Jak to działa? To jest bardzo proste! W czasie rozgrywki w oknie czatu wpisz komende “vote” in chat window cast your vote and write “!reward” You will get: 120 Rebels Components!',
                    'en' => 'How it works? It is very easy! Being on the server, enter “vote” in chat window cast your vote and write “!reward” You will get: 120 Rebels Components!',
                    'ru' => 'How it works? It is very easy! Being on the server, enter “vote” in chat window cast your vote and write “!reward” You will get: 120 Rebels Components!'               
                    ]), 
                'faq_category_id' => 1,
                'vue_component'   => null,
                'created_at' => Carbon::now()   
            ],
            [
                'question' => json_encode([
                    'pl' => 'Reward 5 pl',
                    'en' => 'Reward 5 en',
                    'ru' => 'Reward 5 ru',
                    ]), 
                'answer' => json_encode([
                    'pl' => 'Jak to działa? To jest bardzo proste! W czasie rozgrywki w oknie czatu wpisz komende “vote” in chat window cast your vote and write “!reward” You will get: 120 Rebels Components!',
                    'en' => 'How it works? It is very easy! Being on the server, enter “vote” in chat window cast your vote and write “!reward” You will get: 120 Rebels Components!',
                    'ru' => 'How it works? It is very easy! Being on the server, enter “vote” in chat window cast your vote and write “!reward” You will get: 120 Rebels Components!'               
                    ]), 
                'faq_category_id' => 2,
                'vue_component'   => null,
                'created_at' => Carbon::now()   
            ],
            [
                'question' => json_encode([
                    'pl' => 'Reward 6 pl',
                    'en' => 'Reward 6 en',
                    'ru' => 'Reward 6 ru',
                    ]), 
                'answer' => json_encode([
                    'pl' => 'Opis ore',
                    'en' => 'Ore desc',
                    'ru' => 'Ore desc'               
                    ]), 
                'faq_category_id' => 4,
                'vue_component'   => 'OreInfoPage',
                'created_at' => Carbon::now()   
            ],
            [
                'question' => json_encode([
                    'pl' => 'Reward 6 pl',
                    'en' => 'Reward 6 en',
                    'ru' => 'Reward 6 ru',
                    ]), 
                'answer' => json_encode([
                    'pl' => 'Komendy w grze',
                    'en' => 'In game commands',
                    'ru' => 'In game commands'               
                    ]), 
                'faq_category_id' => 6,
                'vue_component'   => 'InGameCommands',
                'created_at' => Carbon::now()   
            ]
        ]);
    }
}
