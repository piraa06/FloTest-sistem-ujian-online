<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}

include "../dummy-data.php";

$id = $_GET['id'] ?? null;

$data = null;

foreach ($menti as $m) {

    if ($m['id'] == $id) {
        $data = $m;
        break;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kelas = $_POST['kelas'];

    echo "<script>
            alert('Data menti berhasil diubah!');
            window.location='ubah.php?id=$id';
          </script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ubah Menti - FloTest</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body>

<div class="content">

    <h1>Ubah Data Menti</h1>

    <?php if ($data): ?>

        <form method="POST">

            <label>Nama Menti</label>

            <input
                type="text"
                name="nama"
                value="<?= $data['nama'] ?>"
                required
            >

            <label>Email</label>

            <input
                type="email"
                name="email"
                value="<?= $data['email'] ?>"
                required
            >

            <label>Kelas</label>

            <input
                type="text"
                name="kelas"
                value="<?= $data['kelas'] ?>"
                required
            >

            <button type="submit">
                Simpan Perubahan
            </button>

        </form>

    <?php else: ?>

        <p>Data menti tidak ditemukan.</p>

    <?php endif; ?>

    <br>

    <a href="../dashboard.php">
        ← Kembali ke Dashboard
    </a>

</div>

</body>
</html>