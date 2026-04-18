<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            ExamSeeder::class,
            SectionSeeder::class,
            QuestionSeeder::class,
            QuestionOptionSeeder::class
        ]);

        // User::factory()->create([
        //     'name' => 'Administrator',
        //     'no_identity' => 2026,
        //     'email' => 'admin@example.com',
        //     'password' => Hash::make('erina_roose'),
        //     'role' => 'admin',
        // ]);
    }
}
