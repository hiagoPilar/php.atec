<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\Product;
use App\Categorie;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

       
        $this->call([
            CategorieSeeder::class,
        ]);

        
        factory(Project::class, 20)->create()->each(function ($project) {
            
            
            factory(Product::class, 5)->create([
                'project_id' => $project->id,
                'categorie_id' => Categorie::inRandomOrder()->first()->id
            ]);
        });
    }

}


