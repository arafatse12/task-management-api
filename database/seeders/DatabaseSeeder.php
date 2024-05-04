<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(30)->create();
        $this->command->alert("<comment>(:---------------Users Credentials---------------:)</comment>");
        foreach (User::all() as $user) {
            $this->command->info("Email: {$user->username} | Password: 123456");
        }

        $this->command->alert("<comment>(:-----------------(:Successfully:)-----------------------:)</comment>");
    }
}
