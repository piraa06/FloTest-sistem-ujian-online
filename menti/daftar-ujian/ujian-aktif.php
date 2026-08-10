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

    <title>Ujian Aktif</title>

    <link
        rel="stylesheet"
        href="../assets/css/style-menti.css"
    >

</head>

<body>

<header class="navbar">

    <h2>FloTest</h2>

    <nav>
        <a href="../dashboard.php">Dashboard</a>
        <a href="ujian-aktif.php">Ujian Aktif</a>
        <a href="riwayat-ujian.php">Riwayat</a>
    </nav>

</header>


<main>

    <h1>Ujian Aktif</h1>

    <?php foreach ($ujian as $item): ?>

        <?php if ($item['status'] === 'aktif'): ?>

            <div class="card">

                <h2>
                    <?= $item['nama'] ?>
                </h2>

                <p>
                    Mata Pelajaran:
                    <?= $item['mapel'] ?>
                </p>

                <p>
                    Tanggal:
                    <?= $item['tanggal'] ?>
                </p>

                <p>
                    Waktu:
                    <?= $item['mulai'] ?>
                    -
                    <?= $item['selesai'] ?>
                </p>

                <p>
                    Jumlah Soal:
                    <?= $item['jumlah_soal'] ?>
                </p>

                <a
                    class="button"
                    href="../ruang-pengerjaan-ujian/halaman-konfirmasi.php?id=<?= $item['id'] ?>"
                >
                    Ikuti Ujian
                </a>

            </div>

        <?php endif; ?>

    <?php endforeach; ?>

</main>

</body>
</html>