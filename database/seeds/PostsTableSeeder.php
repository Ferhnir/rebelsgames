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

        DB::table('rg_posts')->insert([
            [
                'post_category_id' => 1,
                'post_author_id' => 1,
                'active' => true,
                'subject' => json_encode([
                    'pl' => 'Testowy temat',
                    'en' => 'Subject test',
                    'ru' => 'Rus sub test'
                ]),
                'excerpt' => json_encode([
                    'pl' => 'Przykladowy text majacy na celu sprwadzanie funkcjonalnosci',
                    'en' => 'This is example text created by check if it works',
                    'ru' => 'Rus This is example text created by check if it works'               
                ]),
                'post_content' => json_encode([
                    'pl' => '<div class="et_pb_blurb_container">
                            <div class="et_pb_blurb_description">
                                <p><strong>1. Because of Keens’ changes in the respawn system, we are forced to leave the possibility of spawning only on the moon <br>2. Since now objects of inactive players more then 14 days will be removed</strong><br><b></b></p>
                                <p><b>Features:</b></p>
                                <ul>
                                <li style="font-weight: 400;"><span>Added mod Faction Offline Protection </span></li>
                                <li style="font-weight: 400;"><span>Restored mod Build Info </span></li>
                                <li style="font-weight: 400;"><span>Restored mod Easy Inventory </span></li>
                                <li style="font-weight: 400;"><span>Restored scripts in game </span></li>
                                <li style="font-weight: 400;"><span>Improved accuracy of GPS points </span></li>
                                <li style="font-weight: 400;"><span>Unlocked hand tools for all assemblers </span></li>
                                <li style="font-weight: 400;"><span>Restored correct suit’s capacity (2.000) </span></li>
                                <li style="font-weight: 400;"><span>Restored correct speed of grinding and welding (2, 2) </span></li>
                                <li style="font-weight: 400;"><span>Reduced health after rebirth (43hp)</span></li>
                                </ul>
                                <p><b><br>Bugfixes:</b></p>
                                <ul>
                                <li style="font-weight: 400;"><span>Fixed frequency of Uranium on Planets / Moons </span></li>
                                <li style="font-weight: 400;"><span>Fixed ammo volume MK / ADV </span></li>
                                <li style="font-weight: 400;"><span>Fixed Hud bug </span></li>
                                <li style="font-weight: 400;"><span>Fixed modification error Build Info</span></li>
                                <li style="font-weight: 400;"><span>Changed volume of advanced component, advanced transmitter, advanced processor from 1 000 to 50</span></li>
                                </ul>
                                <p style="text-align: center;"><span style="font-weight: 400;"></span></p>
                                <p style="text-align: center;"><span style="text-decoration: underline; color: #2badff;"><a title="https://goo.gl/forms/wQ1ciCKVSO5IrZ5s1" class="anchor-3Z-8Bb anchorUnderlineOnHover-2ESHQB" href="https://goo.gl/forms/wQ1ciCKVSO5IrZ5s1" rel="noreferrer noopener" target="_blank" role="button" tabindex="0" style="color: #2badff; text-decoration: underline;"></a></span><br><strong></strong></p>
                                <p><span style="font-weight: 400;"></span></p>
                                <p><span style="font-weight: 400;"></span></p>
                                <p style="text-align: center;"><span style="font-size: x-large;"><strong>Rebels-Games Team</strong></span></p>
                            </div><!-- .et_pb_blurb_description -->
                        </div>',
                    'en' => '<div class="et_pb_blurb_container">
                    <div class="et_pb_blurb_description">
                        <p><strong>1. Because of Keens’ changes in the respawn system, we are forced to leave the possibility of spawning only on the moon <br>2. Since now objects of inactive players more then 14 days will be removed</strong><br><b></b></p>
                        <p><b>Features:</b></p>
                        <ul>
                        <li style="font-weight: 400;"><span>Added mod Faction Offline Protection </span></li>
                        <li style="font-weight: 400;"><span>Restored mod Build Info </span></li>
                        <li style="font-weight: 400;"><span>Restored mod Easy Inventory </span></li>
                        <li style="font-weight: 400;"><span>Restored scripts in game </span></li>
                        <li style="font-weight: 400;"><span>Improved accuracy of GPS points </span></li>
                        <li style="font-weight: 400;"><span>Unlocked hand tools for all assemblers </span></li>
                        <li style="font-weight: 400;"><span>Restored correct suit’s capacity (2.000) </span></li>
                        <li style="font-weight: 400;"><span>Restored correct speed of grinding and welding (2, 2) </span></li>
                        <li style="font-weight: 400;"><span>Reduced health after rebirth (43hp)</span></li>
                        </ul>
                        <p><b><br>Bugfixes:</b></p>
                        <ul>
                        <li style="font-weight: 400;"><span>Fixed frequency of Uranium on Planets / Moons </span></li>
                        <li style="font-weight: 400;"><span>Fixed ammo volume MK / ADV </span></li>
                        <li style="font-weight: 400;"><span>Fixed Hud bug </span></li>
                        <li style="font-weight: 400;"><span>Fixed modification error Build Info</span></li>
                        <li style="font-weight: 400;"><span>Changed volume of advanced component, advanced transmitter, advanced processor from 1 000 to 50</span></li>
                        </ul>
                        <p style="text-align: center;"><span style="font-weight: 400;"></span></p>
                        <p style="text-align: center;"><span style="text-decoration: underline; color: #2badff;"><a title="https://goo.gl/forms/wQ1ciCKVSO5IrZ5s1" class="anchor-3Z-8Bb anchorUnderlineOnHover-2ESHQB" href="https://goo.gl/forms/wQ1ciCKVSO5IrZ5s1" rel="noreferrer noopener" target="_blank" role="button" tabindex="0" style="color: #2badff; text-decoration: underline;"></a></span><br><strong></strong></p>
                        <p><span style="font-weight: 400;"></span></p>
                        <p><span style="font-weight: 400;"></span></p>
                        <p style="text-align: center;"><span style="font-size: x-large;"><strong>Rebels-Games Team</strong></span></p>
                    </div><!-- .et_pb_blurb_description -->
                </div>',
                    'ru' => '<div class="et_pb_blurb_container">
                    <div class="et_pb_blurb_description">
                        <p><strong>1. Because of Keens’ changes in the respawn system, we are forced to leave the possibility of spawning only on the moon <br>2. Since now objects of inactive players more then 14 days will be removed</strong><br><b></b></p>
                        <p><b>Features:</b></p>
                        <ul>
                        <li style="font-weight: 400;"><span>Added mod Faction Offline Protection </span></li>
                        <li style="font-weight: 400;"><span>Restored mod Build Info </span></li>
                        <li style="font-weight: 400;"><span>Restored mod Easy Inventory </span></li>
                        <li style="font-weight: 400;"><span>Restored scripts in game </span></li>
                        <li style="font-weight: 400;"><span>Improved accuracy of GPS points </span></li>
                        <li style="font-weight: 400;"><span>Unlocked hand tools for all assemblers </span></li>
                        <li style="font-weight: 400;"><span>Restored correct suit’s capacity (2.000) </span></li>
                        <li style="font-weight: 400;"><span>Restored correct speed of grinding and welding (2, 2) </span></li>
                        <li style="font-weight: 400;"><span>Reduced health after rebirth (43hp)</span></li>
                        </ul>
                        <p><b><br>Bugfixes:</b></p>
                        <ul>
                        <li style="font-weight: 400;"><span>Fixed frequency of Uranium on Planets / Moons </span></li>
                        <li style="font-weight: 400;"><span>Fixed ammo volume MK / ADV </span></li>
                        <li style="font-weight: 400;"><span>Fixed Hud bug </span></li>
                        <li style="font-weight: 400;"><span>Fixed modification error Build Info</span></li>
                        <li style="font-weight: 400;"><span>Changed volume of advanced component, advanced transmitter, advanced processor from 1 000 to 50</span></li>
                        </ul>
                        <p style="text-align: center;"><span style="font-weight: 400;"></span></p>
                        <p style="text-align: center;"><span style="text-decoration: underline; color: #2badff;"><a title="https://goo.gl/forms/wQ1ciCKVSO5IrZ5s1" class="anchor-3Z-8Bb anchorUnderlineOnHover-2ESHQB" href="https://goo.gl/forms/wQ1ciCKVSO5IrZ5s1" rel="noreferrer noopener" target="_blank" role="button" tabindex="0" style="color: #2badff; text-decoration: underline;"></a></span><br><strong></strong></p>
                        <p><span style="font-weight: 400;"></span></p>
                        <p><span style="font-weight: 400;"></span></p>
                        <p style="text-align: center;"><span style="font-size: x-large;"><strong>Rebels-Games Team</strong></span></p>
                    </div><!-- .et_pb_blurb_description -->
                </div>'
                ]),
                'created_at' => Carbon::now()
            ],
            [
                'post_category_id' => 1,
                'post_author_id' => 1,
                'active' => true,
                'subject' => json_encode([
                    'pl' => '123Testowy temat',
                    'en' => '123Subject test',
                    'ru' => '123Rus sub test'
                ]),
                'excerpt' => json_encode([
                    'pl' => '123Przykladowy text majacy na celu sprwadzanie funkcjonalnosci',
                    'en' => '123This is example text created by check if it works',
                    'ru' => '123Rus This is example text created by check if it works'               
                ]),
                'post_content' => json_encode([
                    'pl' => '<div class="et_pb_blurb_container">
                            <div class="et_pb_blurb_description">
                                <p><strong>1. Because of Keens’ changes in the respawn system, we are forced to leave the possibility of spawning only on the moon <br>2. Since now objects of inactive players more then 14 days will be removed</strong><br><b></b></p>
                                <p><b>Features:</b></p>
                                <ul>
                                <li style="font-weight: 400;"><span>Added mod Faction Offline Protection </span></li>
                                <li style="font-weight: 400;"><span>Restored mod Build Info </span></li>
                                <li style="font-weight: 400;"><span>Restored mod Easy Inventory </span></li>
                                <li style="font-weight: 400;"><span>Restored scripts in game </span></li>
                                <li style="font-weight: 400;"><span>Improved accuracy of GPS points </span></li>
                                <li style="font-weight: 400;"><span>Unlocked hand tools for all assemblers </span></li>
                                <li style="font-weight: 400;"><span>Restored correct suit’s capacity (2.000) </span></li>
                                <li style="font-weight: 400;"><span>Restored correct speed of grinding and welding (2, 2) </span></li>
                                <li style="font-weight: 400;"><span>Reduced health after rebirth (43hp)</span></li>
                                </ul>
                                <p><b><br>Bugfixes:</b></p>
                                <ul>
                                <li style="font-weight: 400;"><span>Fixed frequency of Uranium on Planets / Moons </span></li>
                                <li style="font-weight: 400;"><span>Fixed ammo volume MK / ADV </span></li>
                                <li style="font-weight: 400;"><span>Fixed Hud bug </span></li>
                                <li style="font-weight: 400;"><span>Fixed modification error Build Info</span></li>
                                <li style="font-weight: 400;"><span>Changed volume of advanced component, advanced transmitter, advanced processor from 1 000 to 50</span></li>
                                </ul>
                                <p style="text-align: center;"><span style="font-weight: 400;"></span></p>
                                <p style="text-align: center;"><span style="text-decoration: underline; color: #2badff;"><a title="https://goo.gl/forms/wQ1ciCKVSO5IrZ5s1" class="anchor-3Z-8Bb anchorUnderlineOnHover-2ESHQB" href="https://goo.gl/forms/wQ1ciCKVSO5IrZ5s1" rel="noreferrer noopener" target="_blank" role="button" tabindex="0" style="color: #2badff; text-decoration: underline;"></a></span><br><strong></strong></p>
                                <p><span style="font-weight: 400;"></span></p>
                                <p><span style="font-weight: 400;"></span></p>
                                <p style="text-align: center;"><span style="font-size: x-large;"><strong>Rebels-Games Team</strong></span></p>
                            </div><!-- .et_pb_blurb_description -->
                        </div>',
                    'en' => '<div class="et_pb_blurb_container">
                    <div class="et_pb_blurb_description">
                        <p><strong>1. Because of Keens’ changes in the respawn system, we are forced to leave the possibility of spawning only on the moon <br>2. Since now objects of inactive players more then 14 days will be removed</strong><br></p>
                        <p><b>Features:</b></p>
                        <ul>
                        <li style="font-weight: 400;"><span>Added mod Faction Offline Protection </span></li>
                        <li style="font-weight: 400;"><span>Restored mod Build Info </span></li>
                        <li style="font-weight: 400;"><span>Restored mod Easy Inventory </span></li>
                        <li style="font-weight: 400;"><span>Restored scripts in game </span></li>
                        <li style="font-weight: 400;"><span>Improved accuracy of GPS points </span></li>
                        <li style="font-weight: 400;"><span>Unlocked hand tools for all assemblers </span></li>
                        <li style="font-weight: 400;"><span>Restored correct suit’s capacity (2.000) </span></li>
                        <li style="font-weight: 400;"><span>Restored correct speed of grinding and welding (2, 2) </span></li>
                        <li style="font-weight: 400;"><span>Reduced health after rebirth (43hp)</span></li>
                        </ul>
                        <p><b><br>Bugfixes:</b></p>
                        <ul>
                        <li style="font-weight: 400;"><span>Fixed frequency of Uranium on Planets / Moons </span></li>
                        <li style="font-weight: 400;"><span>Fixed ammo volume MK / ADV </span></li>
                        <li style="font-weight: 400;"><span>Fixed Hud bug </span></li>
                        <li style="font-weight: 400;"><span>Fixed modification error Build Info</span></li>
                        <li style="font-weight: 400;"><span>Changed volume of advanced component, advanced transmitter, advanced processor from 1 000 to 50</span></li>
                        </ul>
                        <p style="text-align: center;"><span style="font-weight: 400;"></span></p>
                        <p style="text-align: center;"><span style="text-decoration: underline; color: #2badff;"><a title="https://goo.gl/forms/wQ1ciCKVSO5IrZ5s1" class="anchor-3Z-8Bb anchorUnderlineOnHover-2ESHQB" href="https://goo.gl/forms/wQ1ciCKVSO5IrZ5s1" rel="noreferrer noopener" target="_blank" role="button" tabindex="0" style="color: #2badff; text-decoration: underline;"></a></span><br><strong></strong></p>
                        <p><span style="font-weight: 400;"></span></p>
                        <p><span style="font-weight: 400;"></span></p>
                        <p style="text-align: center;"><span style="font-size: x-large;"><strong>Rebels-Games Team</strong></span></p>
                    </div><!-- .et_pb_blurb_description -->
                </div>',
                    'ru' => '<div class="et_pb_blurb_container">
                    <div class="et_pb_blurb_description">
                        <p><strong>1. Because of Keens’ changes in the respawn system, we are forced to leave the possibility of spawning only on the moon <br>2. Since now objects of inactive players more then 14 days will be removed</strong><br><b></b></p>
                        <p><b>Features:</b></p>
                        <ul>
                        <li style="font-weight: 400;"><span>Added mod Faction Offline Protection </span></li>
                        <li style="font-weight: 400;"><span>Restored mod Build Info </span></li>
                        <li style="font-weight: 400;"><span>Restored mod Easy Inventory </span></li>
                        <li style="font-weight: 400;"><span>Restored scripts in game </span></li>
                        <li style="font-weight: 400;"><span>Improved accuracy of GPS points </span></li>
                        <li style="font-weight: 400;"><span>Unlocked hand tools for all assemblers </span></li>
                        <li style="font-weight: 400;"><span>Restored correct suit’s capacity (2.000) </span></li>
                        <li style="font-weight: 400;"><span>Restored correct speed of grinding and welding (2, 2) </span></li>
                        <li style="font-weight: 400;"><span>Reduced health after rebirth (43hp)</span></li>
                        </ul>
                        <p><b><br>Bugfixes:</b></p>
                        <ul>
                        <li style="font-weight: 400;"><span>Fixed frequency of Uranium on Planets / Moons </span></li>
                        <li style="font-weight: 400;"><span>Fixed ammo volume MK / ADV </span></li>
                        <li style="font-weight: 400;"><span>Fixed Hud bug </span></li>
                        <li style="font-weight: 400;"><span>Fixed modification error Build Info</span></li>
                        <li style="font-weight: 400;"><span>Changed volume of advanced component, advanced transmitter, advanced processor from 1 000 to 50</span></li>
                        </ul>
                        <p style="text-align: center;"><span style="font-weight: 400;"></span></p>
                        <p style="text-align: center;"><span style="text-decoration: underline; color: #2badff;"><a title="https://goo.gl/forms/wQ1ciCKVSO5IrZ5s1" class="anchor-3Z-8Bb anchorUnderlineOnHover-2ESHQB" href="https://goo.gl/forms/wQ1ciCKVSO5IrZ5s1" rel="noreferrer noopener" target="_blank" role="button" tabindex="0" style="color: #2badff; text-decoration: underline;"></a></span><br><strong></strong></p>
                        <p><span style="font-weight: 400;"></span></p>
                        <p><span style="font-weight: 400;"></span></p>
                        <p style="text-align: center;"><span style="font-size: x-large;"><strong>Rebels-Games Team</strong></span></p>
                    </div><!-- .et_pb_blurb_description -->
                </div>'
                ]),
                'created_at' => Carbon::now()
            ]    
        ]);
    }
}
