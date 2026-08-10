<?php
session_start();

$error = "";

if (isset($_SESSION['admin'])) {
    header("Location: dashboard.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy akun admin
    if ($username == "admin" && $password == "admin123") {

        $_SESSION['admin'] = $username;

        header("Location: dashboard.php");
        exit;

    } else {

        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login Admin - FloTest</title>

    <link rel="stylesheet" href="assets/css/admin.css">
</head>

<body>

<div class="login-container">

    <div class="login-card">

        <h1>FloTest</h1>
        <p>Login Admin</p>

        <?php if ($error): ?>
            <div class="alert">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <form method="POST">

            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>

        </form>

    </div>

</div>

</body>
</html>