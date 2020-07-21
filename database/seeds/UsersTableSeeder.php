<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        User::truncate();

        $faker = \Faker\Factory::create('de_DE');

        // Adding the provider to Faker
        $faker->addProvider(new Liior\Faker\Prices($faker));

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => '1234', // password
                'remember_token' => $faker->word
            ]);
        }
    }
}
