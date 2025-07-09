<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname' => 'Hiago',
            'lastname' => 'Pilar',
            'email' => 'contatos@hiago.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
