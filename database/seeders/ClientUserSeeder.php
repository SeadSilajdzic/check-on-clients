<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class ClientUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Client One',
            'email' => 'client@one.com',
            'password' => bcrypt('password'),
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'Client Two',
            'email' => 'client@two.com',
            'password' => bcrypt('password'),
            'role_id' => 1,
        ]);
    }
}
