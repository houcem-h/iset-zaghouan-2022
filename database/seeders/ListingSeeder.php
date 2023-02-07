<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listings')->insert([
            'title' => 'Senior Laravel Developper',
            'tags' => 'Laravel, PHP',
            'position_number' => 1,
            'job_location' => 'Lagos, Nigeria',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            'company_id' => 1
        ]);
        DB::table('listings')->insert([
            'title' => 'Full-stack Developper',
            'tags' => 'Laravel, PHP, Vue.js, javascript',
            'position_number' => 2,
            'job_location' => 'Turkey, Istanbul',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            'company_id' => 2
        ]);
        Listing::factory(20)->create();
    }
}
