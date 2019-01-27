<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Course::class, 10)->create();
    }
}
