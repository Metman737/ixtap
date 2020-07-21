<?php

use Illuminate\Database\Seeder;
use App\Lesson_Type;
use App\Lesson;
use App\Lessons_Lesson_Type;

class LessonsLessonTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Lessons_Lesson_Type::truncate();

        $faker = \Faker\Factory::create('de_DE');

        // Adding the provider to Faker
        $faker->addProvider(new Liior\Faker\Prices($faker));

        $lessons = Lesson::all()->pluck('id')->toArray();
        $lesson_Type = Lesson_Type::all()->pluck('id')->toArray();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < count($lessons); $i++) {
            for ($j = 0; $j < $faker->numberBetween($min = 1, $max = 3); $j++) {

                Lessons_Lesson_Type::create([
                    'lesson_id' => $lessons[$i],
                    'lesson__type_id' => $lesson_Type[$j]
                ]);
            }
        }
    }
}
