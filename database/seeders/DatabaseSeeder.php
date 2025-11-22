<?php

namespace Database\Seeders;

use App\Models\Sport;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (!Sport::first()) {
            $this->call(SportsSeeder::class);
        }
        if (!User::first()) {
            $this->call(UsersSeeder::class);
        }
    }
}
