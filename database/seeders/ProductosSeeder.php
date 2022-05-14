<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Producto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'titulo' => 'La catedral del mar',
                'genero' => 'Novela histórica',
                'autor' => 'Ildefonso Falcones',
                'precio' => '10.40'
            ],
            [
                'titulo' => 'El camino de los reyes',
                'genero' => 'Narrativa fantástica',
                'autor' => 'Brandon Sanderson',
                'precio' => '14.20'
            ],
            [
                'titulo' => 'Nunca',
                'genero' => 'Novela negra',
                'autor' => 'Ken Follett',
                'precio' => '23.65'
            ],
            [
                'titulo' => 'Roma soy yo',
                'genero' => 'Novela histórica',
                'autor' => 'Santiago Posteguillo',
                'precio' => '22.76'
            ],
            [
                'titulo' => 'Ultimos dias en Berlin',
                'genero' => 'Novela contemporanea',
                'autor' => 'Paloma Sanchez-Garnica',
                'precio' => '21.75'
            ],
            [
                'titulo' => 'Billy Summers',
                'genero' => 'Novela negra',
                'autor' => 'Stephen King',
                'precio' => '23.65'
            ],
            [
                'titulo' => 'La espada del destino',
                'genero' => 'Narrativa fantastica',
                'autor' => 'Andrzej Sapkowski',
                'precio' => '22.75'
            ],
            [
                'titulo' => 'Las montañas azules',
                'genero' => 'Novela romántica',
                'autor' => 'Kimberley Freeman',
                'precio' => '5.65'
            ],
            [
                'titulo' => 'La paciente silenciosa',
                'genero' => 'Novela negra',
                'autor' => 'Alex Michaelides',
                'precio' => '10.40'
            ],
            [
                'titulo' => 'La vida enmascarada del señor de Musashi',
                'genero' => 'Novela contemporanea',
                'autor' => 'Junichiro Tanizaki',
                'precio' => '19.95'
            ],
            [
                'titulo' => 'Festín de cuervos',
                'genero' => 'Narrativa fantástica',
                'autor' => 'George R. R. Martin',
                'precio' => '10.40'
            ]
        ];
        DB::table('productos')->insert($data);
    }
}
