<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

include "dummy-data.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Ujian - FloTest</title>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>

<body>

<div class="content">

    <h1>Hasil Ujian</h1>

    <table>

        <tr>
            <th>No</th>
            <th>Nama Menti</th>
            <th>Ujian</th>
            <th>Nilai</th>
            <th>Status</th>
        </tr>

        <?php foreach ($hasil_ujian as $index => $hasil): ?>

        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $hasil['nama'] ?></td>
            <td><?= $hasil['ujian'] ?></td>
            <td><?= $hasil['nilai'] ?></td>
            <td><?= $hasil['status'] ?></td>
        </tr>

        <?php endforeach; ?>

    </table>

    <br>

    <a href="dashboard.php">← Kembali ke Dashboard</a>

</div>

</body>
</html>