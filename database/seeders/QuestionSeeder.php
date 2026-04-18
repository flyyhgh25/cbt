<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'exam_id' => 1,
                'section_id' => 1,
                'type' => 'multiple_choice',
                'content' => 'Di dalam database, objek utama yang berisi informasi adalah...',
                'point' => 5
            ],
            [
                'exam_id' => 1,
                'section_id' => 1,
                'type' => 'multiple_choice',
                'content' => 'Proses menggabungkan data dari dua atau lebih tabel berdasarkan kolom yang memiliki nilai yang sama disebut...',
                'point' => 5
            ],
            [
                'exam_id' => 1,
                'section_id' => 2,
                'type' => 'multiple_choice',
                'content' => 'Untuk menampilkan seluruh data dari tabel "Pegawai", perintah SQL yang tepat adalah... ',
                'point' => 5
            ],
            [
                'exam_id' => 1,
                'section_id' => 1,
                'type' => 'multiple_choice',
                'content' => 'Kunci utama dalam sebuah tabel adalah... ',
                'point' => 5
            ],
            [
                'exam_id' => 1,
                'section_id' => 2,
                'type' => 'multiple_choice',
                'content' => 'Agregat function MAX() digunakan untuk...',
                'point' => 5
            ],
            [
                'exam_id' => 1,
                'section_id' => 2,
                'type' => 'multiple_choice',
                'content' => 'Agregat function COUNT() digunakan untuk... ',
                'point' => 5
            ],
            [
                'exam_id' => 1,
                'section_id' => 2,
                'type' => 'multiple_choice',
                'content' => 'Konsep yang mengatur bagaimana tabel berhubungan satu sama lain dalam basis data disebut…',
                'point' => 5
            ],
            [

                'exam_id' => 1,
                'section_id' => 1,
                'type' => 'multiple_choice',
                'content' => 'Proses mengelompokkan data berdasarkan nilai tertentu dalam kolom disebut... ',
                'point' => 5
            ],
            [
                'exam_id' => 1,
                'section_id' => 2,
                'type' => 'multiple_choice',
                'content' => 'Dalam SQL, operator LIKE digunakan untuk... ',
                'point' => 5
            ],
            [
                'exam_id' => 1,
                'section_id' => 1,
                'type' => 'multiple_choice',
                'content' => 'Dalam SQL, perintah untuk mengubah data dalam tabel disebut... ',
                'point' => 5
            ],
            [
                'exam_id' => 1,
                'section_id' => 1,
                'type' => 'multiple_choice',
                'content' => 'Dalam SQL, perintah untuk menghapus data dalam tabel tanpa menghapus struktur tabel adalah...  ',
                'point' => 5
            ],
            [
                'exam_id' => 1,
                'section_id' => 1,
                'type' => 'multiple_choice',
                'content' => 'Dalam SQL, operator AND digunakan untuk... ',
                'point' => 5
            ],
            [
                'exam_id' => 1,
                'section_id' => 1,
                'type' => 'multiple_choice',
                'content' => 'Dalam SQL, operator NOT LIKE digunakan untuk... ',
                'point' => 5
            ],
            [
                'exam_id' => 1,
                'section_id' => 3,
                'type' => 'multiple_choice',
                'content' => 'Perintah SQL yang digunakan untuk memfilter hasil dari hasil query adalah... ',
                'point' => 5
            ],
            [
                'exam_id' => 1,
                'section_id' => 3,
                'type' => 'multiple_choice',
                'content' => 'Perintah SQL untuk menyaring data hasil query berdasarkan kondisi tertentu adalah..',
                'point' => 5
            ],
            [
                'exam_id' => 1,
                'section_id' => 3,
                'type' => 'multiple_choice',
                'content' => 'Perintah SQL untuk menghapus data dari tabel adalah... ',
                'point' => 5
            ],
            [
                'exam_id' => 1,
                'section_id' => 1,
                'type' => 'multiple_choice',
                'content' => 'Operasi SQL yang digunakan untuk menambahkan data ke dalam tabel adalah...  ',
                'point' => 5
            ],
            [
                'exam_id' => 1,
                'section_id' => 1,
                'type' => 'multiple_choice',
                'content' => 'Fungsi SUM() dalam SQL digunakan untuk... ',
                'point' => 5
            ]
        ];
        foreach ($questions as $question) {
            Question::create($question);
        }
        $this->command->info('QuestionSeeder berhasil dieksekusi!');
    }
}
