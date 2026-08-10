<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}

include "../dummy-data.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kelas = $_POST['kelas'];

    echo "<script>
            alert('Data menti berhasil ditambahkan!');
            window.location='tambah.php';
          </script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Menti - FloTest</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body>

<div class="content">

    <h1>Tambah Menti</h1>

    <form method="POST">

        <label>Nama Menti</label>
        <input
            type="text"
            name="nama"
            placeholder="Masukkan nama menti"
            required
        >

        <label>Email</label>
        <input
            type="email"
            name="email"
            placeholder="Masukkan email"
            required
        >

        <label>Kelas</label>
        <input
            type="text"
            name="kelas"
            placeholder="Contoh: XII PPLG 1"
            required
        >

        <button type="submit">
            Tambah Menti
        </button>

    </form>

    <br>

    <a href="../dashboard.php">
        ← Kembali ke Dashboard
    </a>

</div>

</body>
</html>