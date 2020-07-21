<?php

use Illuminate\Database\Seeder;
use App\Lesson_Type;

class LessonTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Lesson_Type::truncate();

        $faker = \Faker\Factory::create('de_DE');

        // Adding the provider to Faker
        $faker->addProvider(new Liior\Faker\Prices($faker));

        $lessonTypes = ["Online", "Persönlich", "Telefon"];

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < count($lessonTypes); $i++) {
            Lesson_Type::create([
                'type' => $lessonTypes[$i]
            ]);
        }
    }
}
