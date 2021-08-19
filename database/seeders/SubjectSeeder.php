<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Subjects')->insert([
            'name'=>'Hindi',
            'status'=>1
        ]);
        DB::table('Subjects')->insert([
            'name'=>'English',
            'status'=>1
        ]);
        DB::table('Subjects')->insert([
            'name'=>'Math',
            'status'=>1
        ]);
        DB::table('Subjects')->insert([
            'name'=>'Physics',
            'status'=>1
        ]);
        DB::table('Subjects')->insert([
            'name'=>'Computer',
            'status'=>1
        ]);
        DB::table('Subjects')->insert([
            'name'=>'Political Sceience',
            'status'=>1
        ]);

    }
}
