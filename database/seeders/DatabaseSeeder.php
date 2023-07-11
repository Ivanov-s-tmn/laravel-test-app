<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('offers')->insert([
            'b24_contact_id' => 234521341234,
            'b24_deal_id' => 3241,
            'b24_manager_id' => 19,
            'manager' => 'test manager',
            'position' => 'manager',
            'phone' => '+7 9231003245',
            'avatar' => 'avatar1.jpeg',
            'createAt' => now(),
            'date_end' => date('2023-09-30')
        ]);
        DB::table('offer_items')->insert(
            [
                [
                    'offer_id' => 1,
                    'cid' => Str::random(30),
                    'type' => 'Евродвушка',
                    'square' => 53.65,
                    'price' => '5 320 000',
                    'complex' => 'ЖК «Эклипт»',
                    'house' => 'ГП58.1-14',
                    'description' => 'Продается квартира площадью м2, на 3-м этаже, в 4-этажной секции,
                                  4-этажного дома в от ПСК Дом девелопмент.',
                    'images' => json_encode('https://plans.72dom.online/plans/images/3e/a9/3ea912bde38985616a49df73b484cbee.jpg')
                ],
                [
                    'offer_id' => 1,
                    'cid' => Str::random(30),
                    'type' => 'Двухкомнатная',
                    'square' => 49.7,
                    'price' => '6 120 000',
                    'complex' => 'ЖК «Эклипт»',
                    'house' => 'ГП58.1-14',
                    'description' => 'Продается квартира площадью м2, на 4-м этаже, в 4-этажной секции,
                                        4-этажного дома в от ПСК Дом девелопмент.',
                    'images' => json_encode('https://plans.72dom.online/plans/images/e6/a6/e6a6657ee0deb63250479662d27e9025.png')
                ],
                [
                    'offer_id' => 1,
                    'cid' => Str::random(30),
                    'type' => 'Евродвушка',
                    'square' => 49.4,
                    'price' => '5 230 000',
                    'complex' => 'ЖК «Эклипт»',
                    'house' => 'ГП63.1-15',
                    'description' => 'Продается квартира площадью м2, на 1-м этаже,
                        в 4-этажной секции, 4-этажного дома в от ПСК Дом девелопмент.',
                    'images' => json_encode('https://plans.72dom.online/plans/images/b4/d9/b4d9b82a50c89e8a34630e389ab71187.jpg')
                ]
            ]
        );
    }
}
