<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogs')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [
            [
                'title'      => 'Cетевая солнечная электростанция',
                'description'=> '',
                'image'      => 'bg_regular-powerstation.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title'      => 'Aвтономная солнечная электростанция',
                'description'=> '',
                'image'      => 'bg_autonomic-powerstation.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title'      => 'Мобильные системы электроснабжения',
                'description'=> '',
                'image'      => 'bg_mobile-powersupply.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title'      => 'Солнечные панели',
                'description'=> '',
                'image'      => 'bg_sun-pannels.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title'      => 'Инверторы сетевые',
                'description'=> '',
                'image'      => 'bg_inverters.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title'      => 'Аккумуляторные батареи',
                'description'=> '',
                'image'      => 'bg_battery.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        return $data;
    }
}
