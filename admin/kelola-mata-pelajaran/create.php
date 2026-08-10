<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}

include "../dummy-data.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['nama'];
    $kode = $_POST['kode'];

    echo "<script>
            alert('Mata pelajaran berhasil ditambahkan!');
            window.location='tambah.php';
          </script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mata Pelajaran - FloTest</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body>

<div class="content">

    <h1>Tambah Mata Pelajaran</h1>

    <form method="POST">

        <label>Nama Mata Pelajaran</label>

        <input
            type="text"
            name="nama"
            placeholder="Contoh: Matematika"
            required
        >

        <label>Kode Mata Pelajaran</label>

        <input
            type="text"
            name="kode"
            placeholder="Contoh: MTK"
            required
        >

        <button type="submit">
            Tambah Mata Pelajaran
        </button>

    </form>

    <br>

    <a href="../dashboard.php">
        ← Kembali ke Dashboard
    </a>

</div>

</body>
</html>