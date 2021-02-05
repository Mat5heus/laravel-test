<?php

namespace Database\Seeders;

use App\Models\User;
use App\Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class UsersTableSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();
        // User::create([
        //     'name' => 'Matheus santos',
        //     'email' => 'tmuh28@gmail.com',
        //     'password' => bcrypt('lasenha')
        // ]);
    }
}
