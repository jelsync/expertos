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
            'name' => 'Jelsyn',
            'email' => 'jelsync@gmail.com',
            'password' => bcrypt('holaquehace'),
            'admin' => true
        ]);
    }
}
