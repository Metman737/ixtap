<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(LessonTypesTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(LessonsSubjectsTableSeeder::class);
        $this->call(LessonsLessonTypesTableSeeder::class);
    }
}
