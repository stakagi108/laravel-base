<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'USER',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
        ]);

        $super_admin = Admin::create([
            'name' => 'ADMIN',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $super_admin->assignRole('super_admin');
    }
}
