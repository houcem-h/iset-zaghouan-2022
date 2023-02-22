<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(5)->create();
        \App\Models\Company::factory(7)->create();
        $this->call([
            ListingSeeder::class,
            ProductSeeder::class,
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' => 'Senior Laravel Developper',
        //     'tags' => 'Laravel, PHP',
        //     'position_number' => 1,
        //     'job_location' => 'Lagos, Nigeria',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
        //     'company_id' => 1
        // ]);
        // Listing::create([
        //     'title' => 'Full-stack Developper',
        //     'tags' => 'Laravel, PHP, Vue.js, javascript',
        //     'position_number' => 2,
        //     'job_location' => 'Turkey, Istanbul',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
        //     'company_id' => 2
        // ]);
        // Listing::factory(20)->create();
    }
}
