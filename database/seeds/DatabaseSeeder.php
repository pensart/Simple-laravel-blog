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
        DB::table('users')->truncate();

        DB::table('users')->insert ([
           'name' => env('FSU_NAME'),
            'email' => env('FSU_EMAIL'),
            'password' => bcrypt(env('FSU_PSW')),
            'super' => 1,
        ]);
    }
}
