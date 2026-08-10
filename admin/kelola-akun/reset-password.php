<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}

include "../dummy-data.php";

$id = $_GET['id'] ?? null;

$data = null;

foreach ($akun as $a) {
    if ($a['id'] == $id) {
        $data = $a;
        break;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $password_baru = $_POST['password_baru'];

    echo "<script>
            alert('Password berhasil direset!');
            window.location='reset-password.php?id=$id';
          </script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body>

<div class="content">

    <h1>Reset Password</h1>

    <?php if ($data): ?>

        <p>
            Reset password untuk akun:
            <strong><?= $data['nama'] ?></strong>
        </p>

        <form method="POST">

            <label>Password Baru</label>

            <input
                type="password"
                name="password_baru"
                required
            >

            <button type="submit">
                Reset Password
            </button>

        </form>

    <?php else: ?>

        <p>Data akun tidak ditemukan.</p>

    <?php endif; ?>

    <br>

    <a href="../dashboard.php">
        ← Kembali ke Dashboard
    </a>

</div>

</body>
</html>