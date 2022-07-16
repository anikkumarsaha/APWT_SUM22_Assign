<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $arr=array("Active","Inactive","Banned");
        $movi=array("Action","Thriller","Adventure","Comedy");

        $bool=array(TRUE,FALSE);
        for($i=1;$i<=15;$i++){

            DB::table('accounts')->insert([
                'username' => Str::random(5),
                'email' => Str::random(5).'@gmail.com',
                'password' => Hash::make('password'),
                'payement' => $bool[array_rand($bool,1)],
                'PayementDate' => date('Y-m-d H:i:s'),
                'status' => $arr[array_rand($arr,1)],
            ]);

            DB::table('movies')->insert([
                'name' => Str::random(5),
                'description' => Str::random(5),
                'rating' => 0.00,
                'views' => 0,
                'uploadTime' => date('Y-m-d H:i:s'),
                'genre' => $movi[array_rand($movi,1)],
                'movie' => Str::random(5),
            ]);

            
        }

        for ($i=1;$i<10;$i++)
        {
            DB::table('map_customer_movie')->insert([
                'rating' => 0.00,
                'c_id' => $i,
                'm_id' => random_int(1, 5),
            ]);
        }

        
    }
}
