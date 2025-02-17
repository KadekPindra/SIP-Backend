<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classroom;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Classroom::create([
            'id' => 1,
            'name' => 'XII RPL 1', 
            'description' => 'Kelas 12 Rekayasa Perangkat Lunak 1'
        ]);
        Classroom::create([
            'id' => 2,
            'name' => 'XII RPL 2', 
            'description' => 'Kelas 12 Rekayasa Perangkat Lunak 2'
        ]);
        Classroom::create([
            'id' => 3,
            'name' => 'XII RPL 3', 
            'description' => 'Kelas 12 Rekayasa Perangkat Lunak 3'
        ]);
    }
}