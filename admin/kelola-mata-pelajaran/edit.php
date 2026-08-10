<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}

require_once '../dummy-data.php';

$mata_pelajaran = $_SESSION['mata_pelajaran'];

$id = $_GET['id'] ?? null;

$data = null;

foreach ($mata_pelajaran as $mp) {

    if ($mp['id'] == $id) {
        $data = $mp;
        break;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['nama'];
    $kode = $_POST['kode'];

    echo "<script>
            alert('Mata pelajaran berhasil diubah!');
            window.location='index.php?id=$id';
          </script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ubah Mata Pelajaran - FloTest</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body>

<div class="content">

    <h1>Ubah Mata Pelajaran</h1>

    <?php if ($data): ?>

        <form method="POST">

            <label>Nama Mata Pelajaran</label>

            <input
                type="text"
                name="nama"
                value="<?= $data['nama'] ?>"
                required
            >

            <label>Kode Mata Pelajaran</label>

            <input
                type="text"
                name="kode"
                value="<?= $data['kode'] ?>"
                required
            >

            <button type="submit">
                Simpan Perubahan
            </button>

        </form>

    <?php else: ?>

        <p>Data mata pelajaran tidak ditemukan.</p>

    <?php endif; ?>

    <br>

    <a href="../dashboard.php">
        ← Kembali ke Dashboard
    </a>

</div>

</body>
</html>