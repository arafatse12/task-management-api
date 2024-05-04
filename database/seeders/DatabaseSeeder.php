<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(
            [
                'name' => 'Md Super Admin',
                'email' => 'superadmin@gmail.com',
                'username' => 'superadmin',
                'status' => 'Active',
                'email_verified_at' => now(),
                'password' => bcrypt(123456),
                'phone' => '0123456789',
                'address' =>  'Mirpur, Dhaka', 
                'remember_token' => Str::random(10),
            ]
        );
    }
}
