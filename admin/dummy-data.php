<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (!isset($_SESSION['akun'])) {
    $_SESSION['akun'] = [
        [
            'id' => 1,
            'nama' => 'Admin FloTest',
            'username' => 'admin',
            'password' => 'admin123',
            'role' => 'Admin',
            'status' => 'Aktif'
        ],
        [
            'id' => 2,
            'nama' => 'Budi Santoso',
            'username' => 'budi',
            'password' => 'budi123',
            'role' => 'Mentor',
            'status' => 'Aktif'
        ],
        [
            'id' => 3,
            'nama' => 'Andi Pratama',
            'username' => 'andi',
            'password' => 'andi123',
            'role' => 'Menti',
            'status' => 'Aktif'
        ]
    ];
}


/*
|--------------------------------------------------------------------------
| DATA MENTOR
|--------------------------------------------------------------------------
*/

if (!isset($_SESSION['mentor'])) {
    $_SESSION['mentor'] = [
        [
            'id' => 1,
            'nama' => 'Budi Santoso',
            'email' => 'budi@gmail.com',
            'mapel' => 'Pemrograman Web',
            'status' => 'Aktif'
        ],
        [
            'id' => 2,
            'nama' => 'Siti Aminah',
            'email' => 'siti@gmail.com',
            'mapel' => 'Basis Data',
            'status' => 'Aktif'
        ],
        [
            'id' => 3,
            'nama' => 'Dina Permata',
            'email' => 'dina@gmail.com',
            'mapel' => 'Matematika',
            'status' => 'Aktif'
        ]
    ];
}


/*
|--------------------------------------------------------------------------
| DATA MENTI / SISWA
|--------------------------------------------------------------------------
*/

if (!isset($_SESSION['siswa'])) {
    $_SESSION['siswa'] = [
        [
            'id' => 1,
            'nama' => 'Andi Pratama',
            'email' => 'andi@gmail.com',
            'kelas' => 'XII RPL 1',
            'status' => 'Aktif'
        ],
        [
            'id' => 2,
            'nama' => 'Budi Wijaya',
            'email' => 'budiwijaya@gmail.com',
            'kelas' => 'XII RPL 1',
            'status' => 'Aktif'
        ],
        [
            'id' => 3,
            'nama' => 'Citra Lestari',
            'email' => 'citra@gmail.com',
            'kelas' => 'XII RPL 2',
            'status' => 'Aktif'
        ]
    ];
}


/*
|--------------------------------------------------------------------------
| DATA MATA PELAJARAN
|--------------------------------------------------------------------------
*/

if (!isset($_SESSION['mata_pelajaran'])) {
    $_SESSION['mata_pelajaran'] = [
        [
            'id' => 1,
            'nama' => 'Pemrograman Web',
            'kode' => 'PWEB'
        ],
        [
            'id' => 2,
            'nama' => 'Basis Data',
            'kode' => 'BD'
        ],
        [
            'id' => 3,
            'nama' => 'Matematika',
            'kode' => 'MTK'
        ]
    ];
}


/*
|--------------------------------------------------------------------------
| DATA SOAL
|--------------------------------------------------------------------------
*/

if (!isset($_SESSION['soal'])) {
    $_SESSION['soal'] = [
        [
            'id' => 1,
            'pertanyaan' => 'Apa kepanjangan dari HTML?',
            'a' => 'Hyper Text Markup Language',
            'b' => 'High Text Machine Language',
            'c' => 'Hyperlink Text Management Language',
            'd' => 'Home Tool Markup Language',
            'jawaban' => 'A',
            'mapel' => 'Pemrograman Web'
        ],
        [
            'id' => 2,
            'pertanyaan' => 'Bahasa yang digunakan untuk memberikan style pada halaman web adalah?',
            'a' => 'HTML',
            'b' => 'CSS',
            'c' => 'PHP',
            'd' => 'SQL',
            'jawaban' => 'B',
            'mapel' => 'Pemrograman Web'
        ],
        [
            'id' => 3,
            'pertanyaan' => 'Apa fungsi utama database?',
            'a' => 'Mengedit gambar',
            'b' => 'Menyimpan dan mengelola data',
            'c' => 'Membuat desain',
            'd' => 'Menjalankan browser',
            'jawaban' => 'B',
            'mapel' => 'Basis Data'
        ]
    ];
}


/*
|--------------------------------------------------------------------------
| DATA UJIAN
|--------------------------------------------------------------------------
*/

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


/*
|--------------------------------------------------------------------------
| DATA HASIL UJIAN
|--------------------------------------------------------------------------
*/

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
            'siswa' => 'Budi Wijaya',
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



$akun = $_SESSION['akun'];

$mentor = $_SESSION['mentor'];

$menti = $_SESSION['siswa'];

$mata_pelajaran = $_SESSION['mata_pelajaran'];

$soal = $_SESSION['soal'];

$ujian = $_SESSION['ujian'];

$hasil_ujian = $_SESSION['hasil'];

?>