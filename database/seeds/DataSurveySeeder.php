<?php

use Illuminate\Database\Seeder;

class DataSurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => \Hash::make('sandiaman'),
            'role' => 'admin',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        $result = DB::table('users')->insert([
            'name' => 'Surveyor',
            'email' => 'survey@gmail.com',
            'password' => \Hash::make('sandiaman'),
            'role' => 'member',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        
    }
}
