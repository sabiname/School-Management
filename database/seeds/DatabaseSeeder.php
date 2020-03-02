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
        $this->call(NoticeTableSeeder::class);
        $this->call(GalleryTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);

    }
}
