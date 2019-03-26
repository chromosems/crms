<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Opuda john ',
            'email' => 'opudajohn@gmail.com',
            'role' => 'user',
            'isActive' => 1,
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'Administrator',
            'email' => 'Administrator@gmail.com',
            'role' => 'Admin',
            'isActive' => 1,
            'password' => Hash::make('opudajohn'),
        ]);
        User::create([
            'name' => 'dikan',
            'email' => 'dikan@gmail.com',
            'role' => 'user',
            'isActive' => 1,
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'cicy',
            'email' => 'cicy@gmail.com',
            'role' => 'Admin',
            'isActive' => 1,
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'logan',
            'email' => 'logan@gmail.com',
            'role' => 'user',
            'isActive' => 0,
            'password' => Hash::make('password'),
        ]);


    }
}
