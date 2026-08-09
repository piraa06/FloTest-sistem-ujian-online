<?php
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    // Login sementara / dummy
    $dummyEmail = 'mentor@flotest.com';
    $dummyPassword = 'mentor123';

    if ($email === $dummyEmail && $password === $dummyPassword) {
        $_SESSION['mentor_logged_in'] = true;
        $_SESSION['mentor_email'] = $email;

        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Email atau password yang Anda masukkan salah.';
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Mentor | FloTest</title>

    <!-- CSS Mentor -->
    <link rel="stylesheet" href="../assets/css/style-mentor.css">
</head>

<body>

    <main class="login-container">

        <section class="login-card">

            <div class="logo">
                F
            </div>

            <header class="login-header">
                <h1>Login Mentor</h1>
                <p>Masuk ke sistem FloTest</p>
            </header>

            <?php if (!empty($error)): ?>
                <div class="error-message">
                    <?= htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="" autocomplete="on">

                <div class="form-group">
                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Masukkan email"
                        autocomplete="email"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password">
                        Password
                    </label>

                    <div class="password-wrapper">

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan password"
                            autocomplete="current-password"
                            required
                        >

                        <button
                            type="button"
                            class="show-password"
                            id="togglePassword"
                        >
                            Lihat
                        </button>

                    </div>
                </div>

                <div class="form-options">

                    <label class="remember">
                        <input
                            type="checkbox"
                            name="remember"
                        >

                        <span>Ingat saya</span>
                    </label>

                    <a href="#" class="forgot-password">
                        Lupa password?
                    </a>

                </div>

                <button
                    type="submit"
                    class="btn-login"
                >
                    Login
                </button>

            </form>

            <footer class="login-footer">
                &copy; 2026 FloTest. Sistem Ujian Online.
            </footer>

        </section>

    </main>

    <script>
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');

        togglePassword.addEventListener('click', function () {

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                togglePassword.textContent = 'Sembunyikan';
            } else {
                passwordInput.type = 'password';
                togglePassword.textContent = 'Lihat';
            }

        });
    </script>

</body>

</html>