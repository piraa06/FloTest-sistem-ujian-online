<?php

session_start();

if (!isset($_SESSION['menti'])) {
    header('Location: ../login.php');
    exit;
}

require_once '../data.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $_SESSION['jawaban'] = $_POST['jawaban'] ?? [];

}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Konfirmasi Pengiriman</title>

    <link
        rel="stylesheet"
        href="../assets/css/style-menti.css"
    >

</head>

<body>

<main>

    <div class="card">

        <h1>Konfirmasi Pengiriman</h1>

        <p>
            Apakah kamu yakin ingin mengirim jawaban?
        </p>

        <p>
            Setelah dikirim, jawaban tidak dapat diubah.
        </p>

        <a
            class="button"
            href="../hasil-evaluasi-ujian/lihat-skor.php"
        >
            Ya, Kirim Jawaban
        </a>

        <a
            class="button secondary"
            href="halaman-lembar-ujian.php"
        >
            Kembali ke Ujian
        </a>

    </div>

</main>

</body>
</html>