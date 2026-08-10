<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Ujian - FloTest</title>
    <link rel="stylesheet" href="../assets/css/style-mentor.css">
</head>
<body>

    <aside class="sidebar">
        <div class="sidebar-brand"><span>F</span> FloTest</div>
        <a class="" href="../dashboard.php">▣ Dashboard</a>
        <a class="" href="../kelola-siswa/tambah-siswa.php">● Kelola Siswa</a>
        <a class="" href="../kelola-soal/buat-soal.php">□ Kelola Soal</a>
        <a class="active" href="../kelola-ujian/buat-ujian.php">▤ Kelola Ujian</a>
        <a class="" href="../lihat-hasil-ujian/lihat-nilai.php">▥ Hasil Ujian</a>
        <a class="logout-link" href="../logout.php">↪ Logout</a>
    </aside>
    
<main class="content">

<div class="topbar"><div><h1>Buat Ujian</h1><p>Buat data ujian baru.</p></div></div>
<section class="panel">
<form action="index.php" method="post">
<div class="form-grid">
<div class="form-group"><label>Nama Ujian</label><input type="text" name="nama_ujian" placeholder="Contoh: UTS Pemrograman" required></div>
<div class="form-group"><label>Mata Pelajaran</label><select name="mapel"><option>Pemrograman</option><option>Matematika</option><option>Basis Data</option></select></div>
<div class="form-group"><label>Durasi</label><input type="number" name="durasi" placeholder="90"></div>
<div class="form-group"><label>Jumlah Soal</label><input type="number" name="jumlah_soal" placeholder="40"></div>
<div class="form-group"><label>Tanggal Mulai</label><input type="datetime-local" name="mulai"></div>
<div class="form-group"><label>Tanggal Selesai</label><input type="datetime-local" name="selesai"></div>
</div>
<div class="form-actions"><button class="btn-success" type="submit">Simpan Ujian</button><a class="btn btn-secondary" href="index.php">Batal</a></div>
</form>
</section>

</main>
</body>
</html>
