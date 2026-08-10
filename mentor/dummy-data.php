<?php

session_start();

/*
|--------------------------------------------------------------------------
| DATA DUMMY MENTOR
|--------------------------------------------------------------------------
*/

if (!isset($_SESSION['siswa'])) {
    $_SESSION['siswa'] = [
        [
            'id' => 1,
            'nama' => 'Andi Pratama',
            'email' => 'andi@gmail.com',
            'kelas' => 'XII RPL 1'
        ],
        [
            'id' => 2,
            'nama' => 'Budi Santoso',
            'email' => 'budi@gmail.com',
            'kelas' => 'XII RPL 1'
        ],
        [
            'id' => 3,
            'nama' => 'Citra Lestari',
            'email' => 'citra@gmail.com',
            'kelas' => 'XII RPL 2'
        ]
    ];
}

if (!isset($_SESSION['soal'])) {
    $_SESSION['soal'] = [
        [
            'id' => 1,
            'pertanyaan' => 'Apa kepanjangan dari HTML?',
            'a' => 'Hyper Text Markup Language',
            'b' => 'High Text Machine Language',
            'c' => 'Hyperlink Text Management Language',
            'd' => 'Home Tool Markup Language',
            'jawaban' => 'A'
        ],
        [
            'id' => 2,
            'pertanyaan' => 'Bahasa yang digunakan untuk memberikan style pada halaman web adalah?',
            'a' => 'HTML',
            'b' => 'CSS',
            'c' => 'PHP',
            'd' => 'SQL',
            'jawaban' => 'B'
        ]
    ];
}

if (!isset($_SESSION['ujian'])) {
    $_SESSION['ujian'] = [
        [
            'id' => 1,
            'nama' => 'Ujian Pemrograman Web',
            'mapel' => 'Pemrograman Web',
            'tanggal' => '2026-08-15',
            'mulai' => '08:00',
            'selesai' => '10:00',
            'status' => 'Belum Dipublikasikan'
        ],
        [
            'id' => 2,
            'nama' => 'Ujian Basis Data',
            'mapel' => 'Basis Data',
            'tanggal' => '2026-08-20',
            'mulai' => '09:00',
            'selesai' => '11:00',
            'status' => 'Dipublikasikan'
        ]
    ];
}

if (!isset($_SESSION['hasil'])) {
    $_SESSION['hasil'] = [
        [
            'id' => 1,
            'siswa' => 'Andi Pratama',
            'ujian' => 'Ujian Pemrograman Web',
            'nilai' => 85,
            'status' => 'Lulus'
        ],
        [
            'id' => 2,
            'siswa' => 'Budi Santoso',
            'ujian' => 'Ujian Pemrograman Web',
            'nilai' => 72,
            'status' => 'Lulus'
        ],
        [
            'id' => 3,
            'siswa' => 'Citra Lestari',
            'ujian' => 'Ujian Basis Data',
            'nilai' => 60,
            'status' => 'Tidak Lulus'
        ]
    ];
}