<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exam::create([
            'name' => 'Ujian Akhir Semester 3 - Basis Data',
            'duration' => 90,
            'started_time' => "2026-04-19T08:00",
            "ended_time" => "2026-04-19T09:30",
            'is_active' => true
        ]);
        $this->command->info('ExamSeeder berhasil dieksekusi!');
    }
}
