<?php

session_start();

if (!isset($_SESSION['menti'])) {
    header('Location: ../login.php');
    exit;
}

$pesan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $_SESSION['menti']['nama'] = $_POST['nama'];
    $_SESSION['menti']['email'] = $_POST['email'];

    $pesan = 'Profil berhasil diperbarui!';
}

$user = $_SESSION['menti'];

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Edit Profil</title>

    <link
        rel="stylesheet"
        href="../assets/css/style-menti.css"
    >

</head>

<body>

<main>

    <div class="card">

        <h1>Edit Profil</h1>

        <?php if ($pesan): ?>

            <div class="alert success">
                <?= $pesan ?>
            </div>

        <?php endif; ?>


        <form method="POST">

            <label>Nama</label>

            <input
                type="text"
                name="nama"
                value="<?= htmlspecialchars($user['nama']) ?>"
                required
            >


            <label>Email</label>

            <input
                type="email"
                name="email"
                value="<?= htmlspecialchars($user['email']) ?>"
                required
            >


            <label>Kelas</label>

            <input
                type="text"
                value="<?= htmlspecialchars($user['kelas']) ?>"
                disabled
            >


            <button type="submit">
                Simpan
            </button>

        </form>

    </div>

</main>

</body>
</html>