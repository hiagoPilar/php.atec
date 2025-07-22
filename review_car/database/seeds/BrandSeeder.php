<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            ['name' => 'BMW'],
            ['name' => 'Audi'],
            ['name' => 'BYD']
        ];

        foreach ($brands as $brand){
            Brand::create($brand);
        }
    }
}
