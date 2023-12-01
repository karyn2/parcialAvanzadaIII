<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            ['idMarca' => '1001',
            'descripcion' => 'Reebok'
            ],
            ['idMarca' => '1002',
            'descripcion' => 'Adidas'
            ],
            ['idMarca' => '1003',
            'descripcion' => 'Nike'
            ],
            ['idMarca' => '1004',
            'descripcion' => 'Puma'
            ],
            ['idMarca' => '1005',
            'descripcion' => 'Balenciaga'
            ],
            ['idMarca' => '1006',
            'descripcion' => 'Chanel'
            ]
        ];
        DB::table('marca')->insert($datos);
    }
}
