<?php

session_start();

if (!isset($_SESSION['menti'])) {
    header('Location: ../login.php');
    exit;
}

require_once '../data.php';

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Konfirmasi Ujian</title>

    <link
        rel="stylesheet"
        href="../assets/css/style-menti.css"
    >

</head>

<body>

<main>

    <div class="card">

        <h1>Konfirmasi Ujian</h1>

        <h2>Ujian Matematika</h2>

        <p>
            Jumlah soal: 5
        </p>

        <p>
            Durasi: 60 menit
        </p>

        <p>
            Pastikan kamu sudah siap sebelum memulai ujian.
        </p>

        <a
            class="button"
            href="halaman-lembar-ujian.php"
        >
            Mulai Ujian
        </a>

        <a
            class="button secondary"
            href="../daftar-ujian/ujian-aktif.php"
        >
            Kembali
        </a>

    </div>

</main>

</body>
</html>