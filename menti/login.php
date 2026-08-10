<?php

session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'menti01' && $password === '12345') {

        $_SESSION['login'] = true;

        header('Location: dashboard.php');
        exit;

    } else {

        $error = 'Username atau password salah.';

    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Login Menti - FloTest</title>

    <link rel="stylesheet" href="assets/css/style-menti.css">

</head>

<body>

    <div class="login-container">

        <h1>FloTest</h1>

        <p>Login Menti</p>

        <?php if ($error): ?>

            <div class="alert">
                <?= htmlspecialchars($error) ?>
            </div>

        <?php endif; ?>

        <form method="POST">

            <label>Username</label>

            <input
                type="text"
                name="username"
                required
            >

            <label>Password</label>

            <input
                type="password"
                name="password"
                required
            >

            <button type="submit">
                Login
            </button>

        </form>


</body>

</html>