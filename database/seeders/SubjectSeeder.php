<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Subject::create([
            'id' => 1,
            'name' => 'Pemrograman Web',
            'description' => 'Pelajaran Pemrograman Web'
        ]);
        Subject::create([
            'id' => 2,
            'name' => 'Matematika',
            'description' => 'Pelajaran Matematika'
        ]);
        Subject::create([
            'id' => 3,
            'name' => 'Bahasa Indonesia',
            'description' => 'Pelajaran Bahasa Indonesia'
        ]);
        Subject::create([
            'id' => 4,
            'name' => 'Produk Kreatif dan Kewirausahaan',
            'description' => 'Pelajaran Produk Kreatif dan Kewirausahaan'
        ]);
        Subject::create([
            'id' => 5,
            'name' => 'Pemrograman Bergerak',
            'description' => 'Pelajaran Pemrograman Bergerak'
        ]);
        Subject::create([
            'id' => 6,
            'name' => 'Basis Data',
            'description' => 'Pelajaran Basis Data'
        ]);
        Subject::create([
            'id' => 7,
            'name' => 'Agama',
            'description' => 'Pelajaran Agama'
        ]);
        Subject::create([
            'id' => 8,
            'name' => 'Bahasa Bali',
            'description' => 'Pelajaran Bahasa Bali'
        ]);
        Subject::create([
            'id' => 9,
            'name' => 'Bahasa Inggris',
            'description' => 'Pelajaran Bahasa Inggris'
        ]);
        Subject::create([
            'id' => 10,
            'name' => 'Pemrograman Berorientasi Objek',
            'description' => 'Pelajaran Pemrograman Berorientasi Objek'
        ]);
        Subject::create([
            'id' => 11,
            'name' => 'Pendidikan Pancasila dan Kewarganegaraan',
            'description' => 'Pelajaran Pendidikan Pancasila dan Kewarganegaraan'
        ]);
    }
}
