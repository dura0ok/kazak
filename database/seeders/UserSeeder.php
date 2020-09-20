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
        User::create(['name' => 'admin', 'email' => 'fenixrnd@mail.ru', 'password' => Hash::make('Test123321'), 'is_admin' => 1]);
        $users = User::factory()->count(3)->create();
    }
}
