<?php

use Illuminate\Database\Seeder;
use App\Player;

class PlayerSeeder extends Seeder
{
    public function run()
    {
        Player::create([
            'name' => 'John Doe',
            'address' => '123 Main St, New York, NY',
            'description' => 'Professional basketball player with 10 years of experience.',
            'retired' => false
        ]);

        Player::create([
            'name' => 'Jane Smith',
            'address' => '456 Oak Ave, Los Angeles, CA',
            'description' => 'Former tennis champion, now retired.',
            'retired' => true
        ]);

        Player::create([
            'name' => 'Mike Johnson',
            'address' => '789 Pine Rd, Chicago, IL',
            'description' => 'Soccer player for national team.',
            'retired' => false
        ]);
    }
}
