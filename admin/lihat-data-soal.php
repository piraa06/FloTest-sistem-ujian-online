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
    <title>Data Soal - FloTest</title>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>

<body>

<div class="content">

    <h1>Data Soal</h1>

    <table>

        <tr>
            <th>No</th>
            <th>Mata Pelajaran</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
        </tr>

        <?php foreach ($soal as $index => $s): ?>

        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $s['mapel'] ?></td>
            <td><?= $s['pertanyaan'] ?></td>
            <td><?= $s['jawaban'] ?></td>
        </tr>

        <?php endforeach; ?>

    </table>

    <br>

    <a href="dashboard.php">← Kembali ke Dashboard</a>

</div>

</body>
</html>