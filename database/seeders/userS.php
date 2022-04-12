<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class userS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name'=>'umair shah',
            'email'=>'syedumair@gmail.com',
            'password'=>Hash::make('12345')
        ]);
       
    }
}
