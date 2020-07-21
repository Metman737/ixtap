<?php

use Illuminate\Database\Seeder;
use App\Subject;
use App\Lesson;
use App\Lessons_Subject;

class LessonsSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Lessons_Subject::truncate();

        $faker = \Faker\Factory::create('de_DE');

        // Adding the provider to Faker
        $faker->addProvider(new Liior\Faker\Prices($faker));

        $lessons = Lesson::all()->pluck('id')->toArray();
        $subjects = Subject::all()->pluck('id')->toArray();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < count($lessons); $i++) {
            for ($j = 0; $j < $faker->numberBetween($min = 1, $max = 10) ; $j++) {

                Lessons_Subject::create([
                    'lesson_id' => $lessons[$i],
                    'subjects_id' => $subjects[$j]
                ]);
            }
        }
    }
}
