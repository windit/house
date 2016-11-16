<?php

use Illuminate\Database\Seeder;

class TrendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trends')->insert([
        	['name' => 'Không xác định', 'slug' => 'khong-xac-dinh'],
        	['name' => 'Đông', 'slug' => 'dong'],
        	['name' => 'Nam', 'slug' => 'nam'],
        	['name' => 'Tây', 'slug' => 'tay'],
        	['name' => 'Bắc', 'slug' => 'bac'],
        	['name' => 'Đông Bắc', 'slug' => 'dong-bac'],
        	['name' => 'Tây Nam', 'slug' => 'tay-nam'],
        	['name' => 'Tây Bắc', 'slug' => 'tay-bac'],
        ]);
    }
}
