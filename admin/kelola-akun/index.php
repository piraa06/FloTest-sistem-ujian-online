<?php

require_once '../dummy-data.php';

$akun = $_SESSION['akun'];

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Akun - FloTest</title>

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

        <a href="../kelola-mata-pelajaran/index.php">
            Kelola Mata Pelajaran
        </a>

        <a href="index.php" class="active">
            Kelola Akun
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

        <h1>Kelola Akun</h1>

        <p>Kelola akun mentor dan menti FloTest.</p>

        <table>

            <thead>

                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>

            </thead>

            <tbody>

                <?php foreach ($akun as $index => $data): ?>

                    <tr>

                        <td>
                            <?= $index + 1 ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['nama']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['username']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['role']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['status']) ?>
                        </td>

                        <td>

                            <a
                                href="reset-password.php?id=<?= $data['id'] ?>"
                                class="btn-edit">
                                Reset Password
                            </a>

                            <?php if ($data['status'] === 'Nonaktif'): ?>

                                <a
                                    href="aktifkan.php?id=<?= $data['id'] ?>"
                                    class="btn-edit">
                                    Aktifkan
                                </a>

                            <?php else: ?>

                                <a
                                    href="nonaktifkan.php?id=<?= $data['id'] ?>"
                                    class="btn-delete">
                                    Nonaktifkan
                                </a>

                            <?php endif; ?>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</body>

</html>