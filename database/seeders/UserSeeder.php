<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $participants = [
            [
                'name' => 'Ahmad Fauzi',
                'no_identity' => 20263001,
                'email' => 'fauzi@gmail.com',
                'status_registration' => 'approved',
                'password' => Hash::make('fauzi_2026')
            ],
            [
                'name' => 'Iqbal Maulana',
                'no_identity' => 20263002,
                'email' => 'iqbal@gmail.com',
                'status_registration' => 'approved',
                'password' => Hash::make('iqbal_2026')
            ],
            [
                'name' => 'Meyrose Putri',
                'no_identity' => 20263003,
                'email' => 'meyrose@gmail.com',
                'status_registration' => 'approved',
                'password' => Hash::make('meyrose_2026')
            ],
            [
                'name' => 'Risa Saraswati',
                'no_identity' => 20263004,
                'email' => 'risa@gmail.com',
                'status_registration' => 'approved',
                'password' => Hash::make('risa_2026')
            ],
            [
                'name' => 'Angline Jolie',
                'no_identity' => 20263005,
                'email' => 'angline@gmail.com',
                'status_registration' => 'approved',
                'password' => Hash::make('angline_2026')
            ]
        ];
        User::factory()->create([
            'name' => 'Administrator',
            'no_identity' => 2026,
            'email' => 'admin@example.com',
            'password' => Hash::make('erina_roose'),
            'role' => 'admin',
        ]);
        foreach ($participants as $participate) {
            User::create($participate);
        }
        $this->command->info('UserSeeder berhasil dieksekusi!');
    }
}
