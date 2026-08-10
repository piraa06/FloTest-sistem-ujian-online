<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}

require_once 'dummy-data.php';
$mentor = $_SESSION['mentor'];

$id = $_GET['id'] ?? 1;

$data = null;

foreach ($mentor as $m) {
    if ($m['id'] == $id) {
        $data = $m;
        break;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $mapel = $_POST['mapel'];

    echo "<script>
            alert('Data mentor berhasil diubah!');
            window.location='index.php?id=$id';
          </script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ubah Mentor</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body>

<div class="content">

    <h1>Ubah Mentor</h1>

    <?php if ($data): ?>

    <form method="POST">

        <label>Nama Mentor</label>
        <input type="text"
               name="nama"
               value="<?= $data['nama'] ?>"
               required>

        <label>Email</label>
        <input type="email"
               name="email"
               value="<?= $data['email'] ?>"
               required>

        <label>Mata Pelajaran</label>
        <input type="text"
               name="mapel"
               value="<?= $data['mapel'] ?>"
               required>

        <button type="submit">
            Simpan Perubahan
        </button>

    </form>

    <?php else: ?>

        <p>Data mentor tidak ditemukan.</p>

    <?php endif; ?>

    <br>

    <a href="../dashboard.php">← Kembali</a>

</div>

</body>
</html>