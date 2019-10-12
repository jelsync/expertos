<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Category;
use App\Guide;
use App\Tour;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name' => 'Jelsyn',
            'email' => 'jelsync@gmail.com',
            'password' => bcrypt('holaquehace'),
            'admin' => true
        ]);

        Category::Create([
            'name' => 'Local',
            'description' => 'Agencia De Viajes Mundirama de Tegucigalpa, Honduras. Teléfonos, direcciones y sucursales de Transporte Aeronáutico en Páginas Amarillas',
            'image' => 'img/local.jpg'
        ]);

        Category::Create([
            'name' => 'Extranjero',
            'description' => 'Reserva Hoy Tu Vuelo Barato y Ahorra Mucho Dinero. Precios Bajos Garantizados! Servicio grátis.Destinos: Londres, Bali, Barcelona, Ciudad del Cabo.',
            'image' => 'img/extranjero.jpg'
        ]);

        Category::Create([
            'name' => 'Otros',
            'description' => 'Compara Cientos de Ofertas a La Vez y Encuentra Vuelos Muy Baratos.',
            'image' => 'img/otros.jpg'
        ]);


        Tour::Create([
            'name' => 'Parque Nacional La Tigra',
            'description' => 'El Parque Nacional La Tigra​ fue el primer parque nacional en Honduras. Su principal objetivo es "la conservación, preservación ecológica y el mantenimiento del potencial hidrológico y territorial de esta reserva',
            'price' => '500',
            'reservations' => '50',
            'imagen' => 'img/latigra.jpg'
        ]);

        Guide::Create([
            'name' => 'Jelsyn Ceron',
            // 'user_id' => '1'
        ]);

        Guide::Create([
            'name' => 'Brayan Ceron',
            // 'user_id' => '2'
        ]);

        Guide::Create([
            'name' => 'Jairo Ceron',
            // 'user_id' => '3' 
        ]);
    }
}
