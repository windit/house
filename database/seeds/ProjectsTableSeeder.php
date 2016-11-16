<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert(
        	['name' => 'Ascott Waterfront Saigon', 'slug' => 'Ascott-Waterfront-Saigon', 'district_id' => 1],
        	['name' => 'Indochina Park Tower', 'slug' => 'Indochina-Park-Tower', 'district_id' => 1],
        	['name' => 'VRG River View', 'slug' => 'VRG-River-View', 'district_id' => 1],
        	['name' => 'Bến Thành Luxury', 'slug' => 'Ben-Thanh-Luxury', 'district_id' => 1],
       );

    }
}
