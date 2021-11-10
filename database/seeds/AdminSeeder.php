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
            'role'  => 'Admin',
            'password' => Hash::make('123')
        ]);

        DB::table('users')->insert([
            'name' => 'Developer',
            'email' => 'developer@gmail.com',
            'role'  => 'Admin',
            'password' => Hash::make('123')
        ]);
    }
}
