<?php

use Illuminate\Database\Seeder;
use App\Teacher;
use App\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //garantir que cada teacher tenha 2 cursos
        Teacher::all()->each(function($teacher){
            factory(Course::class, 2)->create([
                'teacher_id' => $teacher->id
            ]);
        });

        //completar ate 200 cursos no total
        $total = Course::count();
        if($total < 200) {
            factory(Course::class, 200 - $total)->create();
        }
    }
}
