<?php

use Illuminate\Database\Seeder;

class StreetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('streets')->insert(
        	['name' => 'Alexandre de Rhodes', 'slug' => 'Alexandre-de-Rhodes', 'district_id' => 1],
        	['name' => 'Bà Lê Chân', 'slug' => 'Ba-Le-Chan', 'district_id' => 1],
        	['name' => 'Bùi Thị Xuân', 'slug' => 'Bui-Thi-Xuan', 'district_id' => 1],
        	['name' => 'Bùi Viện', 'slug' => 'Bui-Vien', 'district_id' => 1],
        	['name' => 'Cách Mạng Tháng Tám', 'slug' => 'Cach-Mang-Thang-Tam', 'district_id' => 1],

            ['name' => 'Alexandre de Rhodes', 'slug' => 'Alexandre-de-Rhodes', 'district_id' => 1],
            ['name' => 'Bà Lê Chân', 'slug' => 'Ba-Le-Chan', 'district_id' => 1],
            ['name' => 'Bùi Thị Xuân', 'slug' => 'Bui-Thi-Xuan', 'district_id' => 1],
            ['name' => 'Bùi Viện', 'slug' => 'Bui-Vien', 'district_id' => 1],
            ['name' => 'Cách Mạng Tháng Tám', 'slug' => 'Cach-Mang-Thang-Tam', 'district_id' => 1],

        );
    }
}
