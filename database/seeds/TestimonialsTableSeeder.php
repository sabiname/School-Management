<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('testimonials')->insert([
                'profile' => $faker->city,
                'name' => $faker->name,
                'testimonial' => $faker->word,
                'role' => $faker->jobTitle,

            ]);
        }
    }
}
