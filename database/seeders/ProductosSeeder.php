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
                'imagen' => 'https://imagessl6.casadellibro.com/a/l/t7/56/9788408249856.jpg',
                'titulo' => 'Ultimos dias en Berlin',
                'genero' => 'Novela contemporanea',
                'autor' => 'Paloma Sanchez-Garnica',
                'precio' => '21.75'
            ],
            [
                'imagen' => 'https://imagessl2.casadellibro.com/a/l/t7/62/9788401026362.jpg',
                'titulo' => 'Billy Summers',
                'genero' => 'Novela negra',
                'autor' => 'Stephen King',
                'precio' => '23.65'
            ],
            [
                'imagen' => 'https://imagessl3.casadellibro.com/a/l/t7/33/9788498890433.jpg',
                'titulo' => 'La espada del destino',
                'genero' => 'Narrativa fantastica',
                'autor' => 'Andrzej Sapkowski',
                'precio' => '22.75'
            ],
            [
                'imagen' => 'https://imagessl3.casadellibro.com/a/l/t7/43/9788416691043.jpg',
                'titulo' => 'Las montañas azules',
                'genero' => 'Novela romántica',
                'autor' => 'Kimberley Freeman',
                'precio' => '5.65'
            ],
            [
                'imagen' => 'https://imagessl5.casadellibro.com/a/l/t7/35/9788466351935.jpg',
                'titulo' => 'La paciente silenciosa',
                'genero' => 'Novela negra',
                'autor' => 'Alex Michaelides',
                'precio' => '10.40'
            ],
            [
                'imagen' => 'https://imagessl7.casadellibro.com/a/l/t7/57/9788494465857.jpg',
                'titulo' => 'La vida enmascarada del señor de Musashi',
                'genero' => 'Narrativa extranjera',
                'autor' => 'Junichiro Tanizaki',
                'precio' => '19.95'
            ],
            [
                'imagen' => 'https://imagessl3.casadellibro.com/a/l/t7/13/9788412521313.jpg',
                'titulo' => 'En Venecia',
                'genero' => 'Narrativa de viajes',
                'autor' => 'Rafael Manrique Solana',
                'precio' => '16.15'
            ],
            [
                'imagen' => 'https://imagessl5.casadellibro.com/a/l/t7/75/9788491396475.jpg',
                'titulo' => 'Ciudad en llamas',
                'genero' => 'Novela negra',
                'autor' => 'Don Winslow',
                'precio' => '21.75'
            ],
            [
                'imagen' => 'https://imagessl5.casadellibro.com/a/l/t7/55/9788418491955.jpg',
                'titulo' => 'La corona del mar',
                'genero' => 'Narrativa histórica',
                'autor' => 'Jalio Alejandre Calviño',
                'precio' => '20.85'
            ],
            [
                'imagen' => 'https://imagessl1.casadellibro.com/a/l/t7/81/9788466671781.jpg',
                'titulo' => 'Roma soy yo',
                'genero' => 'Narrativa histórica',
                'autor' => 'Santiago Posteguillo',
                'precio' => '22.70'
            ],
            [
                'imagen' => 'https://imagessl5.casadellibro.com/a/l/t7/75/9788401027475.jpg',
                'titulo' => 'Violeta',
                'genero' => 'Isabel Allende',
                'autor' => 'Narrativa hispanoamericána',
                'precio' => '21.75'
            ],
            [
                'imagen' => 'https://imagessl5.casadellibro.com/a/l/t7/35/9788413143835.jpg',
                'titulo' => 'Tierra',
                'genero' => 'Narrativa española',
                'autor' => 'Eloy Moreno',
                'precio' => '20.76'
            ],
            [
                'imagen' => 'https://imagessl1.casadellibro.com/a/l/t7/41/9788413143941.jpg',
                'titulo' => 'El camino de los reyes',
                'genero' => 'Narrativa fantástica',
                'autor' => 'Brandon Sanderson',
                'precio' => '14.95'
            ],
            [
                'imagen' => 'https://imagessl5.casadellibro.com/a/l/t7/55/9788401027055.jpg',
                'titulo' => 'Nunca',
                'genero' => 'Novela negra',
                'autor' => 'Ken Follett',
                'precio' => '23.65'
            ],
            [
                'imagen' => 'https://imagessl3.casadellibro.com/a/l/t7/23/9788499926223.jpg',
                'titulo' => 'Sapiens',
                'genero' => 'Historia universal',
                'autor' => 'Yuval Noah Harari',
                'precio' => '18.90'
            ],
            [
                'imagen' => 'https://imagessl5.casadellibro.com/a/l/t7/05/9788408072805.jpg',
                'titulo' => 'El príncipe de la niebla',
                'genero' => 'Misterio y terror',
                'autor' => 'carlos Ruiz Zafon',
                'precio' => '17.70'
            ],
            [
                'imagen' => 'https://imagessl1.casadellibro.com/a/l/t7/01/9788408255901.jpg',
                'titulo' => 'La biblioteca de fuego',
                'genero' => 'Narrativa española',
                'autor' => 'Maria Zaragoza',
                'precio' => '20.80'
            ],
            [
                'imagen' => 'https://imagessl4.casadellibro.com/a/l/t7/64/9788439738664.jpg',
                'titulo' => 'Pánico',
                'genero' => 'Novela negra',
                'autor' => 'James Ellroy',
                'precio' => '20.88'
            ],
            [
                'imagen' => 'https://imagessl0.casadellibro.com/a/l/t7/70/9788418174070.jpg',
                'titulo' => 'Harry Potter y la piedra filosofal',
                'genero' => 'Narrativa fantástica',
                'autor' => 'J.K. Rowling',
                'precio' => '30.40'
            ],
            [
                'imagen' => 'https://imagessl8.casadellibro.com/a/l/t7/78/9788425360978.jpg',
                'titulo' => 'Las herederas de la Singer',
                'genero' => 'Narrativa española',
                'autor' => 'Ana Lena Rivera',
                'precio' => '19.85'
            ],
            [
                'imagen' => 'https://imagessl6.casadellibro.com/a/l/t7/46/9788418927546.jpg',
                'titulo' => 'La cueva del mono',
                'genero' => 'Autoayuda',
                'autor' => 'Jenny Moix',
                'precio' => '9.50'
            ],
            [
                'imagen' => 'https://imagessl3.casadellibro.com/a/l/t7/03/9788467065503.jpg',
                'titulo' => 'No quieren que lo sepas',
                'genero' => 'Política y Ciencias Sociales',
                'autor' => 'Jesus Cintora',
                'precio' => '18.90'
            ],
            [
                'imagen' => 'https://imagessl7.casadellibro.com/a/l/t7/47/9788434435247.jpg',
                'titulo' => 'Flores en la basura',
                'genero' => 'Estudios e historiografía',
                'autor' => 'Violeta Serrano',
                'precio' => '26.70'
            ],
            [
                'imagen' => 'https://imagessl1.casadellibro.com/a/l/t7/41/9788448038441.jpg',
                'titulo' => 'Las crónicas de Malus Darkblade',
                'genero' => 'Narrativa fantástica',
                'autor' => 'Dan Abnett, Mike Lee',
                'precio' => '36.50'
            ],
            [
                'imagen' => 'https://imagessl7.casadellibro.com/a/l/t7/67/9788445006467.jpg',
                'titulo' => 'La llamada de Cthulhu',
                'genero' => 'Misterio y terror',
                'autor' => 'H.P Lovecraft',
                'precio' => '19.00'
            ],
            [
                'imagen' => 'https://imagessl0.casadellibro.com/a/l/t7/90/9788495359490.jpg',
                'titulo' => 'El mundo de ayer: memorias de un europeo',
                'genero' => 'Historia universal',
                'autor' => 'Stefan Zweig',
                'precio' => '25.65'
            ]
        ];
        DB::table('productos')->insert($data);
    }
}
