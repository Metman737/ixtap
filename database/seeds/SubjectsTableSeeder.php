<?php

use Illuminate\Database\Seeder;
use App\Subject;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Subject::truncate();

        //$faker = \Faker\Factory::create('de_DE');

        // Adding the provider to Faker
        //$faker->addProvider(new Liior\Faker\Prices($faker));

        $subjects = ["Mathe","Deutsch","Erdkunde","Physik","Englisch","Chemie","Musik","Kunst","Spanisch","Informatik"];

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < count($subjects); $i++) {
            Subject::create([
                'subject' => $subjects[$i]
            ]);
        }
    }
}
