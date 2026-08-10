<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa - FloTest</title>
    <link rel="stylesheet" href="../assets/css/style-mentor.css">
</head>
<body>

    <aside class="sidebar">
        <div class="sidebar-brand"><span>F</span> FloTest</div>
        <a class="" href="../dashboard.php">▣ Dashboard</a>
        <a class="active" href="../kelola-siswa/tambah-siswa.php">● Kelola Siswa</a>
        <a class="" href="../kelola-soal/buat-soal.php">□ Kelola Soal</a>
        <a class="" href="../kelola-ujian/buat-ujian.php">▤ Kelola Ujian</a>
        <a class="" href="../lihat-hasil-ujian/lihat-nilai.php">▥ Hasil Ujian</a>
        <a class="logout-link" href="../logout.php">↪ Logout</a>
    </aside>
    
<main class="content">

<div class="topbar">
    <div><h1>Tambah Siswa</h1><p>Tambahkan data siswa baru.</p></div>
</div>

<section class="panel">
    <form action="index.php" method="post">
        <div class="form-grid">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="nama@email.com" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Masukkan password" required>
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status">
                    <option>Aktif</option>
                    <option>Nonaktif</option>
                </select>
            </div>
        </div>
        <div class="form-actions">
            <button class="btn-success" type="submit">Simpan Siswa</button>
            <a class="btn btn-secondary" href="index.php">Batal</a>
        </div>
    </form>
</section>

</main>
</body>
</html>
