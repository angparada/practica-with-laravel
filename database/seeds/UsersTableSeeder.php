<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Angel Parada',
        	'email' => 'angparada12@gmail.com',
        	'password' => bcrypt('12345678')
        ]);

        factory(App\User::class, 10)->create();
    }
}
