<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(5)->create();
        \App\Models\Producer::factory(5)->create();
        \App\Models\Familie::factory(5)->create();
        \App\Models\Categorie::factory(5)->create();
        \App\Models\Course::factory(5)->create();
        \App\Models\Student::factory(5)->create();
        \App\Models\Students_producer::factory(5)->create();
        \App\Models\Subscription::factory(5)->create(); 
        \App\Models\Message::factory(5)->create();
        \App\Models\Course_student::factory(5)->create();
        \App\Models\Payment::factory(5)->create();
    }
}
