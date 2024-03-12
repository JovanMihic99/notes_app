<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // dd(User::class);
        User::factory()
            ->count(50)
            ->hasNotes(3)
            ->create();
        User::factory()
            ->count(25)
            ->hasNotes(20)
            ->create();
        User::factory()
            ->count(10)
            ->hasNotes(50)
            ->create();
        User::factory()
            ->count(10)
            ->create();
    }
}
