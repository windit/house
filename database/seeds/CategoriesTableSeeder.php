<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	// ['name' => 'Nhà bán', 'slug' => 'nha-ban'],
            ['name' => 'Nhà cho thuê', 'slug' => 'nha-cho-thue'],
            ['name' => 'Cần mua nhà', 'slug' => 'can-mua-nha'],
            ['name' => 'Cần thuê nhà', 'slug' => 'can-thue-nha']

        ]);
    }
}
