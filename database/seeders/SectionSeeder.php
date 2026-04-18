<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            [
                'no_section' => 1,
                'title' => 'Pengetahuan Dasar',
                'description' => 'Soal-soal Pengetahuan Dasar',
                'total_question' => 10,
                'is_media_content' => true
            ],
            [
                'no_section' => 2,
                'title' => 'Pengetahuan Menengah',
                'description' => 'Soal-soal Pengetahuan Menengah',
                'total_question' => 5,
                'is_media_content' => true
            ],
            [
                'no_section' => 3,
                'title' => 'Pengetahuan Lanjutan',
                'description' => 'Soal-soal Pengetahuan Lanjutan',
                'total_question' => 3,
                'is_media_content' => true
            ]
        ];
        foreach ($sections as $section) {
            Section::create($section);
        }
        $this->command->info('SectionSeeder berhasil dieksekusi!');
    }
}
