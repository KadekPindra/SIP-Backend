<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $studentUser = [
            // 1-10
        [
            'name' => 'Aldiansah Saputra',
            'classroom_id' => '3',
            'attendance_number' => 1,
            'nis' => '30675',
            'username' => '30675',
        ],

        [
            'name' => 'Anak Agung Ngurah Bagus Krisna Pradipta',
            'classroom_id' => '3',
            'attendance_number' => 2,
            'nis' => '30676',
            'username' => '30676',
        ],

        [
            'name' => 'Andhika Adhi Irwansyah',
            'classroom_id' => '3',
            'attendance_number' => 3,
            'nis' => '30677',
            'username' => '30677',
        ],

        [
            'name' => 'Bagaskara Refananda',
            'classroom_id' => '3',
            'attendance_number' => 4,
            'nis' => '30678',
            'username' => '30678',
        ],

        [
            'name' => 'Christyan Mikha Adi Putra',
            'classroom_id' => '3',
            'attendance_number' => 5,
            'nis' => '30679',
            'username' => '30679',
        ],

        [
            'name' => 'Dewa Bagus Putu Prabaswara Suardana',
            'classroom_id' => '3',
            'attendance_number' => 6,
            'nis' => '30680',
            'username' => '30680',
        ],

        [
            'name' => 'I Gusti Lanang Agung Rama Putra Prawira',
            'classroom_id' => '3',
            'attendance_number' => 7,
            'nis' => '30681',
            'username' => '30681',
        ],

        [
            'name' => 'I Gusti Ayu Mas Pratistha Anggraeni',
            'classroom_id' => '3',
            'attendance_number' => 8,
            'nis' => '30682',
            'username' => '30682',
        ],

        [
            'name' => 'I Kadek Pindra Dwi Permana',
            'classroom_id' => '3',
            'attendance_number' => 9,
            'nis' => '30683',
            'username' => '30683',
        ],

        [
            'name' => 'I Kadek Satrya Mahesastika',
            'classroom_id' => '3',
            'attendance_number' => 10,
            'nis' => '30684',
            'username' => '30684',
        ],

        // 11-20
        [
            'name' => 'I Ketut Krisna Putra Sinatria',
            'classroom_id' => '3',
            'attendance_number' => 11,
            'nis' => '30685',
            'username' => '30685',
        ],
        
        [
            'name' => 'I Made Dio Kartianan Putra',
            'classroom_id' => '3',
            'attendance_number' => 12,
            'nis' => '30686',
            'username' => '30686',
        ],
        [
            'name' => 'I Made Gede Segara',
            'classroom_id' => '3',
            'attendance_number' => 13,
            'nis' => '30687',
            'username' => '30687',
        ],
        [
            'name' => 'I Made Gerrald Wahyu Darmawan',
            'classroom_id' => '3',
            'attendance_number' => 14,
            'nis' => '30688',
            'username' => '30688',
        ],
        [
            'name' => 'I Made Rama Dwijaya',
            'classroom_id' => '3',
            'attendance_number' => 15,
            'nis' => '30689',
            'username' => '30689',
        ],
        [
            'name' => 'I Nyoman Aditya Arya Mahendra',
            'classroom_id' => '3',
            'attendance_number' => 16,
            'nis' => '30690',
            'username' => '30690',
        ],
        [
            'name' => 'I Putu Gunartajaya',
            'classroom_id' => '3',
            'attendance_number' => 17,
            'nis' => '30691',
            'username' => '30691',
        ],
        [
            'name' => 'I Putu Nedi Okta Mahendra',
            'classroom_id' => '3',
            'attendance_number' => 18,
            'nis' => '30692',
            'username' => '30692',
        ],
        [
            'name' => 'I Putu Rangga Sanny Saputra',
            'classroom_id' => '3',
            'attendance_number' => 19,
            'nis' => '30693',
            'username' => '30693',
        ],
        [
            'name' => 'I Putu Surya Saputra',
            'classroom_id' => '3',
            'attendance_number' => 20,
            'nis' => '30694',
            'username' => '30694',
        ],

        // 21-30
        [
            'name' => 'I Putu Wika Dinata',
            'classroom_id' => '3',
            'attendance_number' => 21,
            'nis' => '30695',
            'username' => '30695',
        ],
        
        [
            'name' => 'I Wayan Adi Putra Winata',
            'classroom_id' => '3',
            'attendance_number' => 22,
            'nis' => '30696',
            'username' => '30696',
        ],
        [
            'name' => 'I Wayan Sadu Windhuarta',
            'classroom_id' => '3',
            'attendance_number' => 23,
            'nis' => '30697',
            'username' => '30697',
        ],
        [
            'name' => 'I Wayan Yudha Ananta Kusuma',
            'classroom_id' => '3',
            'attendance_number' => 24,
            'nis' => '30698',
            'username' => '30698',
        ],
        [
            'name' => 'Kadek Alvin Kurniawan Putra',
            'classroom_id' => '3',
            'attendance_number' => 25,
            'nis' => '30699',
            'username' => '30699',
        ],
        [
            'name' => 'Kadek Suwiarnaya',
            'classroom_id' => '3',
            'attendance_number' => 26,
            'nis' => '30700',
            'username' => '30700',
        ],
        [
            'name' => 'Made Mikhael Gana Pratama Ukir',
            'classroom_id' => '3',
            'attendance_number' => 27,
            'nis' => '30701',
            'username' => '30701',
        ],
        [
            'name' => 'Marcello Zaviere Frain Huru',
            'classroom_id' => '3',
            'attendance_number' => 28,
            'nis' => '30702',
            'username' => '30702',
        ],
        [
            'name' => 'Ngakan Nyoman Ari Surya Khrisna',
            'classroom_id' => '3',
            'attendance_number' => 29,
            'nis' => '30703',
            'username' => '30703',
        ],
        [
            'name' => 'Ni Kadek Dwi Putri Nova Andini',
            'classroom_id' => '3',
            'attendance_number' => 30,
            'nis' => '30704',
            'username' => '30704',
        ],

        // 31-38
        [
            'name' => 'Ni Made Dwiari Mutia Arthanti ',
            'classroom_id' => '3',
            'attendance_number' => 31,
            'nis' => '30705',
            'username' => '30705',
        ],
        
        [
            'name' => 'Ni Nyoman Dian Ayustya Pujani',
            'classroom_id' => '3',
            'attendance_number' => 32,
            'nis' => '30706',
            'username' => '30706',
        ],
        [
            'name' => 'Ni Putu Minda Amelia Rahmadita',
            'classroom_id' => '3',
            'attendance_number' => 33,
            'nis' => '30707',
            'username' => '30707',
        ],
        [
            'name' => 'Putu Shereen Anindita Reina Putri',
            'classroom_id' => '3',
            'attendance_number' => 34,
            'nis' => '30708',
            'username' => '30708',
        ],
        [
            'name' => 'Robby Akbar Imawan',
            'classroom_id' => '3',
            'attendance_number' => 35,
            'nis' => '30709',
            'username' => '30709',
        ],
        [
            'name' => 'Sebastian Herben Satrio Kristiawan',
            'classroom_id' => '3',
            'attendance_number' => 36,
            'nis' => '30710',
            'username' => '30710',
        ],
        [
            'name' => 'Timothy Hinrich Egllery Maindoka',
            'classroom_id' => '3',
            'attendance_number' => 37,
            'nis' => '30711',
            'username' => '30711',
        ],
        [
            'name' => 'Yosua Antoni Pratama',
            'classroom_id' => '3',
            'attendance_number' => 38,
            'nis' => '30712',
            'username' => '30712',
        ],
        ];

        foreach ($studentUser as $student) {
            $studentUser = User::create([
                'username' => $student['username'],
                'password' => Hash::make('password123'),
                'role' => 'student',
            ]);

            Student::create([
                'user_id' => $studentUser->id,
                'nis' => $student['nis'],
                'name' => $student['name'],
                'classroom_id' => $student['classroom_id'],
                'attendance_number' => $student['attendance_number'],
            ]);
        }

        $teacherUser = [
            [
                'nip' => 'GH27',
                'name' => 'Ida Bagus Redy Santiawan, S.Pd.',
                'subject_id' => 1,
            ],
            [
                'nip' => 'GK28',
                'name' => 'I Made Badrayasa, S.Si ',
                'subject_id' => 2,
            ],
            [
                'nip' => 'GK3',
                'name' => 'Ni Komang Dian Dianasari, ST.',
                'subject_id' => 6,
            ],
            [
                'nip' => 'GK18',
                'name' => 'Dewi Rahmawati, S.Ag.',
                'subject_id' => 7,
            ],
            [
                'nip' => 'GP21',
                'name' => 'I Gusti Ayu Ngurah Artini, S.Pd.',
                'subject_id' => 8,
            ],
            [
                'nip' => 'GP70',
                'name' => 'Ni Made Muliani, S.S.',
                'subject_id' => 9,
            ],
            [
                'nip' => 'GP85',
                'name' => 'Pande Made Mahendri Pramadewi, S.Pd',
                'subject_id' => 10,
            ],
            [
                'nip' => 'GP6',
                'name' => 'Kadek Dewi Marlini,S.Pd. M.Pd.',
                'subject_id' => 11,
            ],
            [
                'nip' => 'GH61',
                'name' => 'I Made Yana Pratyaksa, S.Pd',
                'subject_id' => 12,
            ],
            [
                'nip' => 'GP3K50',
                'name' => 'Ni Putu Khrisna Ajmadewi, S.Pd',
                'subject_id' => 3,
            ],
            [
                'nip' => 'GH57',
                'name' => 'Kadek Unggah Adi Nope, S.Pd',
                'subject_id' => 5,
            ],
        ];

        foreach ($teacherUser as $teacher) {
            $teacherUser = User::create([
                'username' => $teacher['nip'],
                'password' => Hash::make('password123'),
                'role' => 'teacher',
            ]);

            Teacher::create([
                'user_id' => $teacherUser->id,
                'nip' => $teacher['nip'],
                'name' => $teacher['name'],
                'subject_id' => $teacher['subject_id'],
            ]);
        }
    }
}