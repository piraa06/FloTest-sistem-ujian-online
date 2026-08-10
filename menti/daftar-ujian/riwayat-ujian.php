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

    <title>Riwayat Ujian</title>

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

    <h1>Riwayat Ujian</h1>

    <div class="card">

        <table>

            <thead>

                <tr>
                    <th>Ujian</th>
                    <th>Mata Pelajaran</th>
                    <th>Tanggal</th>
                    <th>Nilai</th>
                    <th>Status</th>
                </tr>

            </thead>

            <tbody>

                <?php foreach ($riwayat as $item): ?>

                    <tr>

                        <td>
                            <?= $item['ujian'] ?>
                        </td>

                        <td>
                            <?= $item['mapel'] ?>
                        </td>

                        <td>
                            <?= $item['tanggal'] ?>
                        </td>

                        <td>
                            <?= $item['nilai'] ?>
                        </td>

                        <td>
                            <?= $item['status'] ?>
                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</main>

</body>
</html>