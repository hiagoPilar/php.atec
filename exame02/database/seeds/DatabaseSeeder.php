<?php

use App\Product;
use App\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);

        factory(Project::class, 20)->create()->each(function ($project) {
            factory(Product::class, 5)->create([
                'project_id' => $project->id
            ]);
        });
    }
}
