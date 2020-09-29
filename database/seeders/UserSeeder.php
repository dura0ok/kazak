<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@mail.ru',
            'password' => Hash::make('admin123321'),
            'is_admin' => 1
            ]
        );

        User::create([
                'name' => 'Стёпа',
                'email' => 'fenixrnd@mail.ru',
                'password' => Hash::make('Test123321'),
                'is_admin' => 1
            ]
        );

        User::create([
                'name' => 'Владимир Владимирович',
                'email' => 'rarykinv@mail.ru',
                'password' => Hash::make('44gko2020'),
                'is_admin' => 1
            ]
        );

        User::create([
                'name' => 'ГКО-РОСТОВСКОЕ-АДМИН',
                'email' => 'gkorostovskoe61@yandex.ru',
                'password' => Hash::make('44gko2020'),
                'is_admin' => 1
            ]
        );
    }
}
