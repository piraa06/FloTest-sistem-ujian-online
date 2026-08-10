<?php

session_start();

require_once 'dummy-data.php';

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Dashboard Menti - FloTest</title>

    <link rel="stylesheet" href="assets/css/style-menti.css">

</head>

<body>

    <aside class="sidebar">

        <h2>FloTest</h2>

        <nav>

            <a href="dashboard.php" class="active">
                Dashboard
            </a>

            <a href="daftar-ujian/ujian-aktif.php">
                Ujian Aktif
            </a>

            <a href="daftar-ujian/riwayat-ujian.php">
                Riwayat
            </a>

            <a href="hasil-evaluasi-ujian/lihat-skor.php">
                Hasil Ujian
            </a>

            <a href="pengaturan-akun/edit-profil.php">
                Profil
            </a>

            <a href="logout.php">
                Logout
            </a>

        </nav>

    </aside>


    <main class="content">

        <div class="welcome">

            <h1>
                Halo, <?= htmlspecialchars($user['nama']) ?> 👋
            </h1>

            <p>
                Selamat datang di dashboard Menti FloTest.
            </p>

        </div>


        <h2>Ujian Aktif</h2>


        <div class="grid">

            <?php foreach ($ujian as $item): ?>

                <?php if ($item['status'] === 'aktif'): ?>

                    <div class="card">

                        <h3>
                            <?= htmlspecialchars($item['nama']) ?>
                        </h3>

                        <p>
                            Mata Pelajaran:
                            <?= htmlspecialchars($item['mapel']) ?>
                        </p>

                        <p>
                            Tanggal:
                            <?= htmlspecialchars($item['tanggal']) ?>
                        </p>

                        <p>
                            Durasi:
                            <?= $item['durasi'] ?> menit
                        </p>

                        <a
                            class="button"
                            href="ruang-pengerjaan-ujian/halaman-konfirmasi.php?id=<?= $item['id'] ?>"
                        >
                            Mulai Ujian
                        </a>

                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

    </main>

</body>

</html>