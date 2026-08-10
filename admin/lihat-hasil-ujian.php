<?php

require_once 'dummy-data.php';

$hasil = $_SESSION['hasil'];

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hasil Ujian - FloTest</title>

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

        <a href="lihat-data-soal.php">
            Data Soal
        </a>

        <a href="lihat-hasil-ujian.php" class="active">
            Hasil Ujian
        </a>

        <a href="logout.php">
            Logout
        </a>

    </div>


    <!-- CONTENT -->
    <div class="content">

        <h1>Hasil Ujian</h1>

        <p>Daftar hasil ujian menti FloTest.</p>


        <!-- TABLE -->
        <table>

            <thead>

                <tr>
                    <th>No</th>
                    <th>Nama Menti</th>
                    <th>Ujian</th>
                    <th>Nilai</th>
                    <th>Status</th>
                </tr>

            </thead>

            <tbody>

                <?php foreach ($hasil as $index => $data): ?>

                    <tr>

                        <td>
                            <?= $index + 1 ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['siswa']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['ujian']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['nilai']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['status']) ?>
                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</body>

</html>