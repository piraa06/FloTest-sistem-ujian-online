<?php

session_start();

if (!isset($_SESSION['menti'])) {
    header('Location: ../login.php');
    exit;
}

$pesan = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $passwordLama = $_POST['password_lama'];
    $passwordBaru = $_POST['password_baru'];

    if ($passwordLama === '12345') {

        $_SESSION['menti']['password'] = $passwordBaru;

        $pesan = 'Password berhasil diubah!';

    } else {

        $error = 'Password lama salah.';

    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Ubah Password</title>

    <link
        rel="stylesheet"
        href="../assets/css/style-menti.css"
    >

</head>

<body>

<main>

    <div class="card">

        <h1>Ubah Password</h1>

        <?php if ($pesan): ?>
            <div class="alert success">
                <?= $pesan ?>
            </div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="alert error">
                <?= $error ?>
            </div>
        <?php endif; ?>


        <form method="POST">

            <label>Password Lama</label>

            <input
                type="password"
                name="password_lama"
                required
            >


            <label>Password Baru</label>

            <input
                type="password"
                name="password_baru"
                required
            >


            <button type="submit">
                Ubah Password
            </button>

        </form>

    </div>

</main>

</body>
</html>