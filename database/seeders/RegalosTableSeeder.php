<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegalosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regalos')->insert([

        [

            'nombre'=> 'Regalo1',
            'descripcion'=> 'lorem ipsum melo mano estos olo una pruega',
            'ruta_img' => 'img/productos/war.png',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [

            'nombre'=> 'Regalo2',
            'descripcion'=> 'lorem ipsum melo mano estos olo una pruega',
            'ruta_img' => 'img/productos/fenix.png',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [

            'nombre'=> 'Regalo3',
            'descripcion'=> 'lorem ipsum melo mano estos olo una pruega',
            'ruta_img' => 'img/productos/noise.png',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [

            'nombre'=> 'Regalo 1',
            'descripcion'=> 'lorem ipsum melo mano estos olo una pruega',
            'ruta_img' => 'img/productos/skins.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ]);
    }
}
