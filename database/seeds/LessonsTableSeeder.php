<?php

use Illuminate\Database\Seeder;
use App\Lesson;
use App\User;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Lesson::truncate();

        $faker = \Faker\Factory::create('de_DE');

        // Adding the provider to Faker
        $faker->addProvider(new Liior\Faker\Prices($faker));

        $users = User::all()->pluck('id')->toArray();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Lesson::create([
                'user_id' => $faker->randomElement($users),
                'title' => $faker->word(),
                'description' => $faker->paragraph,
                'price' => $faker->price(5, 50, true, true),
                'level' => $faker->numerify('# - # Klasse'),
                'is_active' => $faker->boolean($chanceOfGettingTrue = 80)
            ]);
        }
    }
}
