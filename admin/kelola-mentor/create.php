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
    $mapel = $_POST['mapel'];

    $mentor[] = [
        "id" => count($mentor) + 1,
        "nama" => $nama,
        "email" => $email,
        "mapel" => $mapel,
        "status" => "Aktif"
    ];

    echo "<script>
            alert('Data mentor berhasil ditambahkan!');
            window.location='tambah.php';
          </script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mentor</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body>

<div class="content">

    <h1>Tambah Mentor</h1>

    <form method="POST">

        <label>Nama Mentor</label>
        <input type="text" name="nama" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Mata Pelajaran</label>
        <input type="text" name="mapel" required>

        <button type="submit">
            Tambah Mentor
        </button>

    </form>

    <br>

    <a href="../dashboard.php">← Kembali ke Dashboard</a>

</div>

</body>
</html>