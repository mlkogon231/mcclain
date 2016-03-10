<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mclain Concepts',
            'email' => 'git@mcclainconcepts.com',
            'password' => bcrypt('LaravelTestPW'),
        ]);
        DB::table('users')->insert([
            'name' => 'Mark Kogon',
            'email' => 'mlkogon231@gmail.com',
            'password' => bcrypt('LaravelTestPW'),
        ]); 

    }
}
