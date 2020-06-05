<?php

use Illuminate\Database\Seeder;

class PostToCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PostToCategory::class, 10)->create();


    }
}
