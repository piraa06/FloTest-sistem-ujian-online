<?php
require_once 'dummy-data.php';

$mentor = $_SESSION['mentor'];
$menti = $_SESSION['siswa'];
$mata_pelajaran = $_SESSION['mata_pelajaran'];
$hasil_ujian = $_SESSION['hasil'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - FloTest</title>

    <link rel="stylesheet" href="assets/css/admin.css">
</head>

<body>

<div class="sidebar">

    <h2>FloTest</h2>

    <a href="dashboard.php">Dashboard</a>

    <a href="kelola-mentor/index.php">
        Kelola Mentor
    </a>

    <a href="kelola-menti/index.php">
        Kelola Menti
    </a>

    <a href="kelola-akun/index.php">
         Kelola Akun
    </a>

    <a href="kelola-mata-pelajaran/index.php">
        Kelola Mata Pelajaran
    </a>

    <a href="lihat-data-soal.php">
        Data Soal
    </a>

    <a href="lihat-hasil-ujian.php">
        Hasil Ujian
    </a>

    <a href="logout.php">
        Logout
    </a>

</div>


<div class="content">

    <h1>Dashboard Admin</h1>

    <p>Selamat datang, Admin!</p>

    <div class="cards">

        <div class="card">
            <h3>Jumlah Mentor</h3>
            <p><?= count($mentor) ?></p>
        </div>

        <div class="card">
            <h3>Jumlah Menti</h3>
            <p><?= count($menti) ?></p>
        </div>

        <div class="card">
            <h3>Mata Pelajaran</h3>
            <p><?= count($mata_pelajaran) ?></p>
        </div>

        <div class="card">
            <h3>Hasil Ujian</h3>
            <p><?= count($hasil_ujian) ?></p>
        </div>

    </div>

</div>

</body>
</html>