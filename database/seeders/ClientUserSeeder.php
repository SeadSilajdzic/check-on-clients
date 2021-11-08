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
            'name' => 'Client',
            'email' => 'client@test.com',
            'password' => bcrypt('password'),
            'role_id' => 1,

        ]);
    }
}
