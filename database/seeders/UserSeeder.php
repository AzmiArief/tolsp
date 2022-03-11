<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'nama_user' => 'admin',
            'email' => 'admin01@gmail.com',
            'password' => bcrypt('123456'),
            'role' => '1',
        ]);

        $admin -> assignRole('admin');

        $user = User::create([
            'nama_user' => 'user',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('123456'),
            'role' => '2',
        ]);

        $user -> assignRole('user');
    }
}
