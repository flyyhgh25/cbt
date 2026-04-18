<?php

namespace Database\Seeders;

use App\Models\QuestionOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'question_id' => 1,
                'label' => 'A',
                'content' => 'Tabel',
                'media' => null,
                'is_correct' => true,
            ],
            [
                'question_id' => 1,
                'label' => 'B',
                'content' => 'Kolom',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 1,
                'label' => 'C',
                'content' => 'Baris',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 1,
                'label' => 'D',
                'content' => 'Query',
                'media' => null,
                'is_correct' => false,
            ],

            [
                'question_id' => 2,
                'label' => 'A',
                'content' => 'Join',
                'media' => null,
                'is_correct' => true,
            ],
            [
                'question_id' => 2,
                'label' => 'B',
                'content' => 'Union',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 2,
                'label' => 'C',
                'content' => 'Intersect',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 2,
                'label' => 'D',
                'content' => 'Concatenate',
                'media' => null,
                'is_correct' => false,
            ],

            [
                'question_id' => 3,
                'label' => 'A',
                'content' => 'SELECT * FROM Pegawai;',
                'media' => null,
                'is_correct' => true,
            ],
            [
                'question_id' => 3,
                'label' => 'B',
                'content' => 'SELECT data FROM Pegawai;',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 3,
                'label' => 'C',
                'content' => 'SHOW TABLE Pegawai; ',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 3,
                'label' => 'D',
                'content' => 'DISPLAY Pegawai;',
                'media' => null,
                'is_correct' => false,
            ],

            [
                'question_id' => 4,
                'label' => 'A',
                'content' => 'Kolom yang berisi angka unik',
                'media' => null,
                'is_correct' => true,
            ],
            [
                'question_id' => 4,
                'label' => 'B',
                'content' => 'Kolom yang berisi nilai NULL',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 4,
                'label' => 'C',
                'content' => 'Kolom yang menunjukkan hubungan antar tabel',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 4,
                'label' => 'D',
                'content' => 'Kolom yang berisi data teks',
                'media' => null,
                'is_correct' => false,
            ],

            [
                'question_id' => 5,
                'label' => 'A',
                'content' => 'Menghitung rata-rata nilai dalam kolom ',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 5,
                'label' => 'B',
                'content' => 'Mengambil nilai tertinggi dalam kolom ',
                'media' => null,
                'is_correct' => true,
            ],
            [
                'question_id' => 5,
                'label' => 'C',
                'content' => 'Menambahkan nilai dalam kolom ',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 5,
                'label' => 'D',
                'content' => 'Mengurutkan data dalam kolom',
                'media' => null,
                'is_correct' => false,
            ],

            [
                'question_id' => 6,
                'label' => 'A',
                'content' => 'Menghitung jumlah baris dalam tabel ',
                'media' => null,
                'is_correct' => true,
            ],
            [
                'question_id' => 6,
                'label' => 'B',
                'content' => 'Menghitung total nilai dalam kolom ',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 6,
                'label' => 'C',
                'content' => 'Mengambil nilai terendah dalam kolom',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 6,
                'label' => 'D',
                'content' => 'Menghitung rata-rata nilai dalam kolom',
                'media' => null,
                'is_correct' => false,
            ],

            [
                'question_id' => 7,
                'label' => 'A',
                'content' => 'Primary Key',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 7,
                'label' => 'B',
                'content' => 'Foreign Key ',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 7,
                'label' => 'C',
                'content' => 'Relationship',
                'media' => null,
                'is_correct' => true,
            ],
            [
                'question_id' => 7,
                'label' => 'D',
                'content' => 'Relationship',
                'media' => null,
                'is_correct' => false,
            ],

            [
                'question_id' => 8,
                'label' => 'A',
                'content' => 'Grouping',
                'media' => null,
                'is_correct' => true,
            ],
            [
                'question_id' => 8,
                'label' => 'B',
                'content' => 'Joining ',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 8,
                'label' => 'C',
                'content' => 'Sorting',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 8,
                'label' => 'D',
                'content' => 'Filtering',
                'media' => null,
                'is_correct' => false,
            ],

            [
                'question_id' => 9,
                'label' => 'A',
                'content' => 'Menggabungkan data dari dua tabel ',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 9,
                'label' => 'B',
                'content' => 'Mengurutkan data dalam tabel',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 9,
                'label' => 'C',
                'content' => 'Mengambil data yang memiliki nilai NULL',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 9,
                'label' => 'D',
                'content' => 'Pencarian berdasarkan pola teks',
                'media' => null,
                'is_correct' => true,
            ],

            [
                'question_id' => 10,
                'label' => 'A',
                'content' => 'Edit',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 10,
                'label' => 'B',
                'content' => 'Update',
                'media' => null,
                'is_correct' => true,
            ],
            [
                'question_id' => 10,
                'label' => 'C',
                'content' => 'Alter',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 10,
                'label' => 'D',
                'content' => 'Modify',
                'media' => null,
                'is_correct' => false,
            ],

            [
                'question_id' => 11,
                'label' => 'A',
                'content' => 'DELETE',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 11,
                'label' => 'B',
                'content' => 'TRUNCATE',
                'media' => null,
                'is_correct' => true,
            ],
            [
                'question_id' => 11,
                'label' => 'C',
                'content' => 'DROP',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 11,
                'label' => 'D',
                'content' => 'ERASE',
                'media' => null,
                'is_correct' => false,
            ],
            //12
            [
                'question_id' => 12,
                'label' => 'A',
                'content' => 'Menggabungkan kondisi',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 12,
                'label' => 'B',
                'content' => 'Menambahkan data baru ',
                'media' => null,
                'is_correct' => true,
            ],
            [
                'question_id' => 12,
                'label' => 'C',
                'content' => 'Menghapus data',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 12,
                'label' => 'D',
                'content' => 'Mengurutkan data',
                'media' => null,
                'is_correct' => false,
            ],
            //13
            [
                'question_id' => 13,
                'label' => 'A',
                'content' => ' Menggabungkan data dari dua tabel ',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 13,
                'label' => 'B',
                'content' => 'Pencarian berdasarkan pola teks',
                'media' => null,
                'is_correct' => true,
            ],
            [
                'question_id' => 13,
                'label' => 'C',
                'content' => 'Mengambil data yang memiliki nilai NULL',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 13,
                'label' => 'D',
                'content' => 'Mengurutkan data dalam tabel',
                'media' => null,
                'is_correct' => false,
            ],
            //14
            [
                'question_id' => 14,
                'label' => 'A',
                'content' => 'ORDER BY',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 14,
                'label' => 'B',
                'content' => 'GROUP BY',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 14,
                'label' => 'C',
                'content' => 'HAVING',
                'media' => null,
                'is_correct' => true,
            ],
            [
                'question_id' => 14,
                'label' => 'D',
                'content' => 'DISTINCT',
                'media' => null,
                'is_correct' => false,
            ],
            //15
            [
                'question_id' => 15,
                'label' => 'A',
                'content' => 'WHERE',
                'media' => null,
                'is_correct' => true,
            ],
            [
                'question_id' => 15,
                'label' => 'B',
                'content' => 'FILTER',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 15,
                'label' => 'C',
                'content' => 'SELECT',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 15,
                'label' => 'D',
                'content' => 'SEARCH',
                'media' => null,
                'is_correct' => false,
            ],
            //16
            [
                'question_id' => 16,
                'label' => 'A',
                'content' => 'DELETE',
                'media' => null,
                'is_correct' => true,
            ],
            [
                'question_id' => 16,
                'label' => 'B',
                'content' => 'UPDATE',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 16,
                'label' => 'C',
                'content' => 'INSERT',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 16,
                'label' => 'D',
                'content' => 'DROP',
                'media' => null,
                'is_correct' => false,
            ],
            //17
            [
                'question_id' => 17,
                'label' => 'A',
                'content' => 'INSERT',
                'media' => null,
                'is_correct' => true,
            ],
            [
                'question_id' => 17,
                'label' => 'B',
                'content' => 'UPDATE',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 17,
                'label' => 'C',
                'content' => 'DELETE',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 17,
                'label' => 'D',
                'content' => 'SELECT',
                'media' => null,
                'is_correct' => false,
            ],
            //18
            [
                'question_id' => 18,
                'label' => 'A',
                'content' => 'Mengurutkan data dalam kolom ',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 18,
                'label' => 'B',
                'content' => 'Menghitung total nilai dalam kolom ',
                'media' => null,
                'is_correct' => true,
            ],
            [
                'question_id' => 18,
                'label' => 'C',
                'content' => 'Mengambil nilai tertinggi dalam kolom ',
                'media' => null,
                'is_correct' => false,
            ],
            [
                'question_id' => 18,
                'label' => 'D',
                'content' => 'Menghitung rata-rata nilai dalam kolom',
                'media' => null,
                'is_correct' => false,
            ],
        ];
        foreach ($questions as $question) {
            QuestionOption::create($question);
        }
        $this->command->info('QuestionOptionSeeder berhasil dieksekusi!');
    }
}
