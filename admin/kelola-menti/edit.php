<?php

require_once '../dummy-data.php';

$id = $_GET['id'] ?? null;

$data = null;

foreach ($_SESSION['siswa'] as $menti) {

    if ($menti['id'] == $id) {
        $data = $menti;
        break;
    }

}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && $data) {

    foreach ($_SESSION['siswa'] as $index => $menti) {

        if ($menti['id'] == $id) {

            $_SESSION['siswa'][$index]['nama'] = $_POST['nama'];
            $_SESSION['siswa'][$index]['email'] = $_POST['email'];
            $_SESSION['siswa'][$index]['kelas'] = $_POST['kelas'];

            break;
        }

    }

    header('Location: index.php');
    exit;

}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Menti - FloTest</title>

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

        <a href="index.php" class="active">
            Kelola Menti
        </a>

        <a href="../kelola-mata-pelajaran/index.php">
            Kelola Mata Pelajaran
        </a>

        <a href="../kelola-akun/index.php">
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

        <h1>Ubah Data Menti</h1>

        <?php if ($data): ?>

            <form method="POST">

                <label>Nama Menti</label>

                <input
                    type="text"
                    name="nama"
                    value="<?= htmlspecialchars($data['nama']) ?>"
                    required
                >

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    value="<?= htmlspecialchars($data['email']) ?>"
                    required
                >

                <label>Kelas</label>

                <input
                    type="text"
                    name="kelas"
                    value="<?= htmlspecialchars($data['kelas']) ?>"
                    required
                >

                <button type="submit">
                    Simpan Perubahan
                </button>

            </form>

        <?php else: ?>

            <p>Data menti tidak ditemukan.</p>

        <?php endif; ?>

    </div>

</body>

</html>