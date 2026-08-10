<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unduh Hasil - FloTest</title>
    <link rel="stylesheet" href="../assets/css/style-mentor.css">
</head>
<body>

    <aside class="sidebar">
        <div class="sidebar-brand"><span>F</span> FloTest</div>
        <a class="" href="../dashboard.php">▣ Dashboard</a>
        <a class="" href="../kelola-siswa/tambah-siswa.php">● Kelola Siswa</a>
        <a class="" href="../kelola-soal/buat-soal.php">□ Kelola Soal</a>
        <a class="" href="../kelola-ujian/buat-ujian.php">▤ Kelola Ujian</a>
        <a class="active" href="../lihat-hasil-ujian/lihat-nilai.php">▥ Hasil Ujian</a>
        <a class="logout-link" href="../logout.php">↪ Logout</a>
    </aside>
    
<main class="content">

<div class="topbar"><div><h1>Unduh Hasil</h1><p>Pilih data hasil ujian yang ingin diunduh.</p></div></div>
<section class="panel">
<form action="lihat-nilai.php" method="get">
<div class="form-grid">
<div class="form-group"><label>Ujian</label><select name="ujian"><option>UTS Matematika</option><option>UAS Pemrograman</option></select></div>
<div class="form-group"><label>Format</label><select name="format"><option>CSV</option><option>Excel</option><option>PDF</option></select></div>
</div>
<div class="form-actions"><button class="btn-success" type="submit">Unduh Hasil</button><a class="btn btn-secondary" href="lihat-nilai.php">Kembali</a></div>
</form>
</section>

</main>
</body>
</html>
