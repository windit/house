<?php

use Illuminate\Database\Seeder;

class KindsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('kinds')->insert([
            ['name' => 'Biệt thự', 'slug' => 'biet-thu'],
            ['name' => 'Căn hộ chung cư', 'slug' => 'can-ho-chung-cu'],
            ['name' => 'Cửa hàng', 'slug' => 'cua-hang'],
            ['name' => 'Khách sạn', 'slug' => 'khach-san'],
            ['name' => 'Nhà mặt phố', 'slug' => 'nha-mat-pho'],
            ['name' => 'Nhà nghỉ', 'slug' => 'nha-nghi'],
        	['name' => 'Nhà riêng', 'slug' => 'nha-rieng'],
        	['name' => 'Nhà trọ', 'slug' => 'nha-tro'],
            ['name' => 'Văn phòng', 'slug' => 'van-phong'],
       ]);

    }
}
