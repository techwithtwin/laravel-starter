<?php

namespace Database\Seeders;

use App\Models\Listing;
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
        \App\Models\User::factory(10)->create();
        Listing::factory(10)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'Laravel, Javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Nairobi, Kenya',
        //     'email' => 'email1@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => '
        //      Lorem ipsum dolor sit amet consectetur adipisicing elit.
        //      Ab doloremque quos dolore voluptas. Earum corrupti asper
        //      iores voluptate vero reprehenderit qui ducimus. Voluptat
        //      e, adipisci! Ullam incidunt eum voluptates velit commodi 
        //      officiis!
        //     '
        // ]);



    }
}
