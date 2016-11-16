<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
        	// ['name' => 'Quận 1', 'slug' => 'quan-1', 'city_id' => 1],
         //    ['name' => 'Quận 2', 'slug' => 'quan-2', 'city_id' => 1],
         //    ['name' => 'Quận 3', 'slug' => 'quan-3', 'city_id' => 1],
         //    ['name' => 'Quận 4', 'slug' => 'quan-4', 'city_id' => 1],
         //    ['name' => 'Quận 5', 'slug' => 'quan-5', 'city_id' => 1],
         //    ['name' => 'Quận 6', 'slug' => 'quan-6', 'city_id' => 1],
         //    ['name' => 'Quận 7', 'slug' => 'quan-7', 'city_id' => 1],
         //    ['name' => 'Quận 8', 'slug' => 'quan-8', 'city_id' => 1],
         //    ['name' => 'Quận 9', 'slug' => 'quan-9', 'city_id' => 1],
         //    ['name' => 'Quận 10', 'slug' => 'quan-10', 'city_id' => 1],
         //    ['name' => 'Quận 11', 'slug' => 'quan-11', 'city_id' => 1],
         //    ['name' => 'Quận 12', 'slug' => 'quan-12', 'city_id' => 1],
         //    ['name' => 'Bình Chánh', 'slug' => 'binh-chanh', 'city_id' => 1],
         //    ['name' => 'Bình Tân', 'slug' => 'binh-tan', 'city_id' => 1],
         //    ['name' => 'Bình Thạnh', 'slug' => 'binh-thanh', 'city_id' => 1],
         //    ['name' => 'Cần Giờ', 'slug' => 'can-gio', 'city_id' => 1],
         //    ['name' => 'Củ Chi', 'slug' => 'cu-chi', 'city_id' => 1],
         //    ['name' => 'Gò Vấp', 'slug' => 'go-vap', 'city_id' => 1],
         //    ['name' => 'Hóc Môn', 'slug' => 'hoc-mon', 'city_id' => 1],
         //    ['name' => 'Nhà Bè', 'slug' => 'nha-be', 'city_id' => 1],
         //    ['name' => 'Phú Nhuận', 'slug' => 'phu-nhuan', 'city_id' => 1],
         //    ['name' => 'Tân Bình', 'slug' => 'tan-binh', 'city_id' => 1],
         //    ['name' => 'Tân Phú', 'slug' => 'tan-phu', 'city_id' => 1],
         //    ['name' => 'Thủ Đức', 'slug' => 'thu-duc', 'city_id' => 1],

         //    ['name' => 'Ba Đình', 'slug' => 'ba-dinh', 'city_id' => 2],
         //    ['name' => 'Hoàn Kiếm', 'slug' => 'hoan-kiem', 'city_id' => 2],
         //    ['name' => 'Hai Bà Trưng', 'slug' => 'hai-ba-trung', 'city_id' => 2],
         //    ['name' => 'Đống Đa', 'slug' => 'dong-da', 'city_id' => 2],
         //    ['name' => 'Tây Hồ', 'slug' => 'tay-ho', 'city_id' => 2],
         //    ['name' => 'Cầu Giấy', 'slug' => 'cau-giay', 'city_id' => 2],
         //    ['name' => 'Thanh Xuân', 'slug' => 'thanh-xuan', 'city_id' => 2],
         //    ['name' => 'Hoàng Mai', 'slug' => 'hoang-mai', 'city_id' => 2],
         //    ['name' => 'Long Biên', 'slug' => 'long-bien', 'city_id' => 2],
         //    ['name' => 'Từ Liêm', 'slug' => 'tu-liem', 'city_id' => 2],
         //    ['name' => 'Thanh Trì', 'slug' => 'thanh-tri', 'city_id' => 2],
         //    ['name' => 'Gia Lâm', 'slug' => 'gia-lam', 'city_id' => 2],
         //    ['name' => 'Đông Anh', 'slug' => 'dong-anh', 'city_id' => 2],
         //    ['name' => 'Sóc Sơn', 'slug' => 'soc-son', 'city_id' => 2],
         //    ['name' => 'Hà Đông', 'slug' => 'ha-dong', 'city_id' => 2],
         //    ['name' => 'Sơn Tây', 'slug' => 'son-tay', 'city_id' => 2],
         //    ['name' => 'Ba Vì', 'slug' => 'ba-vi', 'city_id' => 2],
         //    ['name' => 'Phúc Thọ', 'slug' => 'phuc-tho', 'city_id' => 2],
         //    ['name' => 'Thạch Thất', 'slug' => 'thach-that', 'city_id' => 2],
         //    ['name' => 'Quốc Oai', 'slug' => 'quoc-oai', 'city_id' => 2],
         //    ['name' => 'Chương Mỹ', 'slug' => 'chuong-my', 'city_id' => 2],
         //    ['name' => 'Đan Phượng', 'slug' => 'dan-phuong', 'city_id' => 2],
         //    ['name' => ' Hoài Đức', 'slug' => 'hoai-duc', 'city_id' => 2],
         //    ['name' => 'Thanh Oai', 'slug' => 'thanh-oai', 'city_id' => 2],
         //    ['name' => 'Mỹ Đức', 'slug' => 'my-duc', 'city_id' => 2],
         //    ['name' => 'Ứng Hoà', 'slug' => 'ung-hoa', 'city_id' => 2],
         //    ['name' => 'Thường Tín', 'slug' => 'thuong-tin', 'city_id' => 2],
         //    ['name' => 'Phú Xuyên', 'slug' => 'phu-xuyen', 'city_id' => 2],
         //    ['name' => 'Mê Linh', 'slug' => 'me-linh', 'city_id' => 2],


            ['name' => 'Cẩm Lệ', 'slug' => 'cam-le', 'city_id' => 3],
            ['name' => 'Hải Châu', 'slug' => 'hai-chau', 'city_id' => 3],
            ['name' => 'Hòa Vang', 'slug' => 'hoa-vang', 'city_id' => 3],
            ['name' => 'Hoàng Sa', 'slug' => 'hoang-sa', 'city_id' => 3],
            ['name' => 'Liên Chiểu', 'slug' => 'lien-chieu', 'city_id' => 3],
            ['name' => 'Ngũ Hành Sơn', 'slug' => 'ngu-hanh-son', 'city_id' => 3],
            ['name' => 'Sơn Trà', 'slug' => 'son-tra', 'city_id' => 3],
            ['name' => 'Thanh Khê', 'slug' => 'thanh-khe', 'city_id' => 3],
            
        ]);
    }
}
