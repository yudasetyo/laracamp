<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'Slug' => Str::slug('Gila Belajar'),
                'price' => 280
            ],
            [
                'title' => 'Baru Mulai',
                'Slug' => Str::slug('Baru Mulai'),
                'price' => 140
            ]
        ];

        foreach ($camps as $key => $camp) {
            Camp::create($camp);
        }
    }
}
