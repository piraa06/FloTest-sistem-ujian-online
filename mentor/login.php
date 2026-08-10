<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Mentor - FloTest</title>
    <link rel="stylesheet" href="assets/css/style-mentor.css">
</head>
<body>
<div class="login-page">
    <div class="login-container">
        <div class="login-logo">
            <div class="logo-mark">F</div>
            <h1>FloTest</h1>
            <p>Sistem Ujian Online</p>
        </div>

        <h2>Login Mentor</h2>

        <form action="dashboard.php" method="get">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="mentor@gmail.com" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>

            <button type="submit" class="btn-login">Login</button>
        </form>

        <div class="demo-account">
            <strong>Dummy akun:</strong><br>
            Email: mentor@gmail.com<br>
            Password: mentor123
        </div>
    </div>
</div>
</body>
</html>
