<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123')
        ]);

        DB::table('users')->insert([
            'name' => 'Developer',
            'email' => 'developer@gmail.com',
            'password' => Hash::make('123')
        ]);
    }
}
