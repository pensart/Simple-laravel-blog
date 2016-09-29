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

        factory(App\User::class, 5)
            ->create()
            ->each(function($u) {
               for ($i=0; $i<rand(2,3);$i++) {
                   $u->posts()->save(factory(App\Post::class)->make());
               }
            });
    }
}
