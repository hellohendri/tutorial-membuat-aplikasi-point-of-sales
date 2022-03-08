<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = array(
            [
                'name' => 'Manager',
                'email' => 'manager@abimanyustrudel.id',
                'password' => bcrypt('abimanyu070605_@'),
                'foto' => '/img/LOGO-110PX.png',
                'level' => 1
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@abimanyustrudel.id',
                'password' => bcrypt('admin2022'),
                'foto' => '/img/LOGO-110PX.png',
                'level' => 2
            ]
        );

        array_map(function (array $user) {
            User::query()->updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }, $users);
    }
}
