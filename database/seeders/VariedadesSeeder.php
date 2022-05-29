<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariedadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('variedades')->insert([
            [
                //'id' => 1,
                'nombre' => 'Topazio',
                'tipo_id'=>1, //De Origen
                'descripcion' => 'Altitud 1200mts.',
                'url' => 'https://coffeetigerco.com/producto/topazio-brasil/',
                'tostaduria_id' => 1,
                'imagen_url' => 'https://coffeetigerco.com/wp-content/uploads/2021/07/TOPAZIO-1.jpg'
            ],
            [
                //'id' => 2,
                'nombre' => 'Blend Moka',
                'tipo_id'=>2, //Blend
                'descripcion' => 'Altura: 2200 / 1100 mts.',
                'url' => 'https://coffeetigerco.com/producto/blend-moka-2/',
                'tostaduria_id' => 1,
                'imagen_url' => 'https://coffeetigerco.com/wp-content/uploads/2021/07/BLENDMOKA.jpg'
            ],
            [
                //'id' => 3,
                'nombre' => 'Blend Espresso',
                'tipo_id'=> 2, //Blend
                'descripcion' => 'Recomendado para Espresso',
                'url' => 'https://coffeetigerco.com/producto/blend-espresso/',
                'tostaduria_id' => 1,
                'imagen_url' => 'https://coffeetigerco.com/wp-content/uploads/2021/07/BLENDESPRESSO-1.jpg'
            ],
            [
                //'id' => 4,
                'nombre' => 'Papua Nueva Guinea',
                'tipo_id'=>1, //De Origen
                'descripcion' => 'Altura: 1650 - 1800 mts.',
                'url' => 'https://www.penguincoffee.com.ar/productos/papu-nueva-guinea/',
                'tostaduria_id' => 3,
                'imagen_url' => 'https://d3ugyf2ht6aenh.cloudfront.net/stores/898/689/products/whatsapp-image-2022-03-30-at-9-51-57-am1-83c760aac4ce07c9df16486827096923-640-0.jpeg'
            ],
            [
                //'id' => 5,
                'nombre' => 'Kenya Post Fermentado',
                'tipo_id'=>1, //De Origen
                'descripcion' => 'Con un excelente puntaje de 87.5 SCA',
                'url' => 'https://www.penguincoffee.com.ar/productos/kenya-post-fermentado/',
                'tostaduria_id' => 3,
                'imagen_url' => 'https://d3ugyf2ht6aenh.cloudfront.net/stores/898/689/products/img-20220307-wa00311-551c3037c5d0949e4216468598465286-640-0.jpg'
            ],
            [
                //'id' => 6,
                'nombre' => 'Sudestada Blend',
                'tipo_id'=> 2, //Blend
                'descripcion' => 'Un blend que combina la delicada acidez del Colombia con el denso cuerpo y la cafeína del Robusta.',
                'url' => 'https://capitanescoffeeco.mitiendanube.com/productos/cafe-sudestada-power-blend-blend-de-la-casa/',
                'tostaduria_id' => 4,
                'imagen_url' => 'https://d3ugyf2ht6aenh.cloudfront.net/stores/001/165/647/products/new_blend_sudestada1-cdf05b9f7ba852cc9115960366155624-640-0.jpg'
            ],
            [
                //'id' => 7,
                'nombre' => 'México Veracruz Orgánico',
                'tipo_id'=>1, //De Origen
                'descripcion' => 'Aroma intenso a caramelo, de sabor medio con astringencia pronunciada, con cuerpo y acidez media.',
                'url' => 'https://capitanescoffeeco.mitiendanube.com/productos/cafe-mexico-veracruz-organico/',
                'tostaduria_id' => 4,
                'imagen_url' => 'https://d3ugyf2ht6aenh.cloudfront.net/stores/001/165/647/products/new_mexico_veracruz1-2dc1ac833d6bef854515960357156935-640-0.jpg'
            ],
            [
                //'id' => 8,
                'nombre' => 'Strong Coffee Blend',
                'tipo_id'=> 2, //Blend
                'descripcion' => 'Toda la energía que necesitas para tu entrenamiento. Plus de cafeína en un blend único que combina granos de tipo_id robusta con arabica. Aroma y retrogusto persistente.',
                'url' => 'https://capitanescoffeeco.mitiendanube.com/productos/strong-coffee-blend/?variant=340546934',
                'tostaduria_id' => 4,
                'imagen_url' => 'https://i.imgur.com/2D1Z5a5.jpg'
            ],
            [
                //'id' => 9,
                'nombre' => 'Amore Rosso',
                'tipo_id'=> 2, //Blend
                'descripcion' => 'Inspirado en los sabores de Italia, Amore Rosso es una combinación ideal de granos arábicos y robustas de Sudamérica y Asia, logrando un café intenso y de gran presencia en el paladar, ideal para expresso. Amore Rosso, un blend con sutiles notas dulces y amaderadas, de carácter profundo. Excelente elección para compartir un buen momento.',
                'url' => 'https://eurocafe.com.ar/tienda-eurocafe/cafe-tostado-natural-amore-rosso-1-kg/',
                'tostaduria_id' => 2,
                'imagen_url' => 'https://eurocafe.com.ar/wb/wp-content/uploads/2019/07/Amore-Rosso_1KG.jpg'
            ],
            [
                //'id' => 10,
                'nombre' => 'Guanes Genuino',
                'tipo_id'=>1, //De Origen
                'descripcion' => 'Tostado medio/alto',
                'url' => 'https://eurocafe.com.ar/tienda-eurocafe/cafe-tostado-natural-colombia-x-250-grs/',
                'tostaduria_id' => 2,
                'imagen_url' => 'https://eurocafe.com.ar/wb/wp-content/uploads/2022/01/GUANESGENUINO.jpg'
            ]
        ]);
    }


    /* [
            'nombre' => '',
            'descripcion' => '',
            'url' => '',
            'tostaduria_id' => 4,
            'imagen_url' => ''
        ],
            */
}
