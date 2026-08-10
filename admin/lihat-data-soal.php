<?php

require_once 'dummy-data.php';

$soal = $_SESSION['soal'];

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Soal - FloTest</title>

    <link rel="stylesheet" href="assets/css/admin.css">

</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <h2>FloTest</h2>

        <a href="dashboard.php">
            Dashboard
        </a>

        <a href="kelola-mentor/index.php">
            Kelola Mentor
        </a>

        <a href="kelola-menti/index.php">
            Kelola Menti
        </a>

        <a href="kelola-mata-pelajaran/index.php">
            Kelola Mata Pelajaran
        </a>

        <a href="lihat-data-soal.php" class="active">
            Data Soal
        </a>

        <a href="lihat-hasil-ujian.php">
            Hasil Ujian
        </a>

        <a href="logout.php">
            Logout
        </a>

    </div>


    <!-- CONTENT -->
    <div class="content">

        <h1>Data Soal</h1>

        <p>Daftar soal yang tersedia di FloTest.</p>


        <!-- TABLE -->
        <table>

            <thead>

                <tr>
                    <th>No</th>
                    <th>Mata Pelajaran</th>
                    <th>Pertanyaan</th>
                    <th>Jawaban</th>
                </tr>

            </thead>

            <tbody>

                <?php foreach ($soal as $index => $data): ?>

                    <tr>

                        <td>
                            <?= $index + 1 ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['mapel']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['pertanyaan']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['jawaban']) ?>
                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</body>

</html>