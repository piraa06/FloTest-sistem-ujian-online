<?php

require_once '../dummy-data.php';

$mata_pelajaran = $_SESSION['mata_pelajaran'];

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Mata Pelajaran - FloTest</title>

    <link rel="stylesheet" href="../assets/css/admin.css">

</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <h2>FloTest</h2>

        <a href="../dashboard.php">
            Dashboard
        </a>

        <a href="../kelola-mentor/index.php">
            Kelola Mentor
        </a>

        <a href="../kelola-menti/index.php">
            Kelola Menti
        </a>

        <a href="../kelola-akun/index.php">
            Kelola Akun
        </a>

        <a href="index.php" class="active">
            Kelola Mata Pelajaran
        </a>

        <a href="../lihat-data-soal.php">
            Data Soal
        </a>

        <a href="../lihat-hasil-ujian.php">
            Hasil Ujian
        </a>

        <a href="../logout.php">
            Logout
        </a>

    </div>


    <!-- CONTENT -->
    <div class="content">

        <h1>Kelola Mata Pelajaran</h1>

        <p>Kelola data mata pelajaran FloTest.</p>

        <a href="create.php" class="btn-create">
            + Create Mata Pelajaran
        </a>


        <!-- TABLE -->
        <table>

            <thead>

                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Mata Pelajaran</th>
                    <th>Aksi</th>
                </tr>

            </thead>

            <tbody>

                <?php foreach ($mata_pelajaran as $index => $data): ?>

                    <tr>

                        <td>
                            <?= $index + 1 ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['kode']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['nama']) ?>
                        </td>

                        <td>

                            <a
                                href="edit.php?id=<?= $data['id'] ?>"
                                class="btn-edit">
                                Edit
                            </a>

                            <a
                                href="delete.php?id=<?= $data['id'] ?>"
                                class="btn-delete"
                                onclick="return confirm('Yakin ingin menghapus mata pelajaran ini?')">
                                Delete
                            </a>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</body>

</html>