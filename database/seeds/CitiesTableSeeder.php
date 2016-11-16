<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
        	['name' => 'Hồ Chí Minh', 'slug' => 'ho-chi-minh'],
            ['name' => 'Hà Nội', 'slug' => 'ha-noi'],
            ['name' => 'Đà Nẵng', 'slug' => 'da-nang'],
            ['name' => 'Bình Dương', 'slug' => 'binh-duong'],
            ['name' => 'An Giang', 'slug' => 'an-giang'],
            ['name' => 'Bà Rịa Vũng Tàu', 'slug' => 'ba-ria-vung-tau'],
            ['name' => 'Bạc Liêu', 'slug' => 'bac-lieu'],
            ['name' => 'Bắc Giang', 'slug' => 'bac-giang'],
            ['name' => 'Bắc Kạn', 'slug' => 'bac-kan'],
            ['name' => 'Bắc Ninh', 'slug' => 'bac-ninh'],
            ['name' => 'Bến Tre', 'slug' => 'ben-tre'],
            ['name' => 'Bình Định', 'slug' => 'binh-dinh'],
            ['name' => 'Bình Phước', 'slug' => 'binh-phuoc'],
            ['name' => 'Bình Thuận', 'slug' => 'binh-thuan'],
            ['name' => 'Cà Mau', 'slug' => 'ca-mau'],
            ['name' => 'Cần Thơ', 'slug' => 'can-tho'],
            ['name' => 'Cao Bằng', 'slug' => 'cao-bang'],
            ['name' => 'Đắk Lắk', 'slug' => 'dak-lak'],
            ['name' => 'Đắk Nông', 'slug' => 'dak-nong'],
            ['name' => 'Điện Biên', 'slug' => 'dien-bien'],
            ['name' => 'Đồng Nai', 'slug' => 'dong-nai'],
            ['name' => 'Đồng Tháp', 'slug' => 'dong-thap'],
            ['name' => 'Gia Lai', 'slug' => 'gia-lai'],
            ['name' => 'Hà Giang', 'slug' => 'ha-giang'],
            ['name' => 'Hà Nam', 'slug' => 'ha-nam'],
            ['name' => 'Hà Tĩnh', 'slug' => 'ha-tinh'],
            ['name' => 'Hải Dương', 'slug' => 'hai-duong'],
            ['name' => 'Hải Phòng', 'slug' => 'hai-phong'],
            ['name' => 'Hậu Giang', 'slug' => 'hau-giang'],
            ['name' => 'Hòa Bình', 'slug' => 'hoa-binh'],
            ['name' => 'Hưng Yên', 'slug' => 'hung-yen'],
            ['name' => 'Khánh Hòa', 'slug' => 'khanh-hoa'],
            ['name' => 'Kiên Giang', 'slug' => 'kien-giang'],
            ['name' => 'Kon Tum', 'slug' => 'kon-tum'],
            ['name' => 'Lai Châu', 'slug' => 'lai-chau'],
            ['name' => 'Lâm Đồng', 'slug' => 'lam-dong'],
            ['name' => 'Lạng Sơn', 'slug' => 'lang-son'],
            ['name' => 'Lào Cai', 'slug' => 'lao-cai'],
            ['name' => 'Nam Định', 'slug' => 'nam-dinh'],
            ['name' => 'Nghệ An', 'slug' => 'nghe-an'],
            ['name' => 'Ninh Bình', 'slug' => 'ninh-binh'],
            ['name' => 'Ninh Thuận', 'slug' => 'ninh-thuan'],
            ['name' => 'Phú Thọ', 'slug' => 'phu-tho'],
            ['name' => 'Phú Yên', 'slug' => 'phu-yen'],
            ['name' => 'Quảng Bình', 'slug' => 'quang-binh'],
            ['name' => 'Quảng Nam', 'slug' => 'quang-nam'],
            ['name' => 'Quảng Ngãi', 'slug' => 'quang-ngai'],
            ['name' => 'Quảng Ninh', 'slug' => 'quang-ninh'],
            ['name' => 'Quảng Trị', 'slug' => 'quang-tri'],
            ['name' => 'Sóc Trăng', 'slug' => 'soc-trang'],
            ['name' => 'Sơn La', 'slug' => 'son-la'],
            ['name' => 'Tây Ninh', 'slug' => 'tay-ninh'],
            ['name' => 'Thái Bình', 'slug' => 'thai-binh'],
            ['name' => 'Thái Nguyên', 'slug' => 'thai-nguyen'],
            ['name' => 'Thanh Hóa', 'slug' => 'thanh-hoa'],
            ['name' => 'Thừa Thiên Huế', 'slug' => 'thua-thien-hue'],
            ['name' => 'Tiền Giang', 'slug' => 'tien-giang'],
            ['name' => 'Trà Vinh', 'slug' => 'tra-vinh'],
            ['name' => 'Tuyên Quang', 'slug' => 'Tuyên Quang'],
            ['name' => 'Vĩnh Long', 'slug' => 'vinh-long'],
            ['name' => 'Vĩnh Phúc', 'slug' => 'vinh-phuc'],
            ['name' => 'Yên Bái', 'slug' => 'yen-bai']
        ]);
    }
}
