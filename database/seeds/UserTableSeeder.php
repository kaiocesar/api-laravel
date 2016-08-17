<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'  => 'Kaio Cesar',
                'email' => 'kaio@email.com',
                'password' => \Illuminate\Support\Facades\Hash::make('1234')
            ],
            [
                'name'  => 'Bruna',
                'email' => 'bruna@email.com',
                'password' => \Illuminate\Support\Facades\Hash::make('1234')
            ],
        ];

        foreach ($users as $user) {
            \App\User::create($user);
        }
    }
}
