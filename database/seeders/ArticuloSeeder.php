<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            ['referencia' => '101',
             'nombre' => 'Tenis',
             'descripcion' => 'Tenis ligeros',
             'color' => 'blanco',
             'preciounitario' => 200000,
             'observacion' => 'comodidad',
             'foto' => 'tenis',
             'marca' => '1001'
            ],
            ['referencia' => '102',
            'nombre' => 'Botas',
            'descripcion' => 'botas militares',
            'color' => 'Negro',
            'preciounitario' => 350000,
            'observacion' => 'resistentes',
            'foto' => 'botas',
            'marca' => '1003'
           ],           
            ['referencia' => '103',
            'nombre' => 'Guayos',
            'descripcion' => 'guayos en cuero sintético ',
            'color' => 'Naranja',
            'preciounitario' => 499000,
            'observacion' => 'resistentes',
            'foto' => 'guayos',
            'marca' => '1004'
           ],
           ['referencia' => '104',
           'nombre' => 'Camiseta',
           'descripcion' => 'camiseta ligera',
           'color' => 'Negro',
           'preciounitario' => 150000,
           'observacion' => 'ligera y fresca',
           'foto' => 'camiseta',
           'marca' => '1005'
          ],
          ['referencia' => '105',
           'nombre' => 'Guantes',
           'descripcion' => 'guantes de arquero',
           'color' => 'Verde fluorecente',
           'preciounitario' => 250000,
           'observacion' => 'excelente calidad',
           'foto' => 'guantes',
           'marca' => '1002'
          ],
          ['referencia' => '106',
          'nombre' => 'Gorra',
          'descripcion' => 'gorra plana',
          'color' => 'Blanca',
          'preciounitario' => 90000,
          'observacion' => 'excelente calidad',
          'foto' => 'guantes',
          'marca' => '1006'
         ]
            
        ];
        DB::table('articulo')->insert($datos);
    }
}
