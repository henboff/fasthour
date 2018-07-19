<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Miguel Junior',
            'email' => 'henboff@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
