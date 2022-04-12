<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Samsung Mobile',
                'price'=>'200$',
                'description'=>'A smartphone eith features',
                'category'=>'mobile',
                "gallery"=>  'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bW9iaWxlJTIwcGhvbmV8ZW58MHx8MHx8&w=1000&q=80',
            ],
            [
                'name'=>'Nokia Mobile',
                'price'=>'200$',
                'description'=>'A smartphone eith features',
                'category'=>'mobile',
                "gallery"=>  'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bW9iaWxlJTIwcGhvbmV8ZW58MHx8MHx8&w=1000&q=80',
            ],
            [
                'name'=>'Oppo Mobile',
                'price'=>'200$',
                'description'=>'A smartphone eith features',
                'category'=>'mobile',
                "gallery"=>  'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bW9iaWxlJTIwcGhvbmV8ZW58MHx8MHx8&w=1000&q=80',
            ],
            [
                'name'=>'panasonic  Tv',
                'price'=>'200$',
                'description'=>'A smartphone eith features',
                'category'=>'electronics',
                "gallery"=>  'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bW9iaWxlJTIwcGhvbmV8ZW58MHx8MHx8&w=1000&q=80',
            ]

        ]);
    }
}
