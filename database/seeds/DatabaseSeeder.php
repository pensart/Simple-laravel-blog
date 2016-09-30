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
           'name' => 'Guy Pensart',
            'email' => 'guy.pensart@hotmail.com',
            'password' => bcrypt('super'),
            'super' => 1,
        ]);
    }
}
