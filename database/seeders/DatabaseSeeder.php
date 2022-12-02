<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            ['title'=>'tasks 1' ,  'description'=>'Đây là tasks 1' , 'photo'=>''],
            ['title'=>'tasks 2' ,  'description'=>'Đây là tasks 2' , 'photo'=>''],
            ['title'=>'tasks 3' ,  'description'=>'Đây là tasks 3' , 'photo'=>''],
            ['title'=>'tasks 4' ,  'description'=>'Đây là tasks 4' , 'photo'=>''],
        ]);
    }
}
