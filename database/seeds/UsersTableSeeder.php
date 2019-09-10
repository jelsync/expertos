<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'name' => 'Juan',
            'email' => 'juan@gmail.com',
            'password' => bcrypt('Juan123456')
        ]);
    }
}
