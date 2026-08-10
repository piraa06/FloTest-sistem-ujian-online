<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Soal - FloTest</title>
    <link rel="stylesheet" href="../assets/css/style-mentor.css">
</head>
<body>

    <aside class="sidebar">
        <div class="sidebar-brand"><span>F</span> FloTest</div>
        <a class="" href="../dashboard.php">▣ Dashboard</a>
        <a class="" href="../kelola-siswa/tambah-siswa.php">● Kelola Siswa</a>
        <a class="active" href="../kelola-soal/buat-soal.php">□ Kelola Soal</a>
        <a class="" href="../kelola-ujian/buat-ujian.php">▤ Kelola Ujian</a>
        <a class="" href="../lihat-hasil-ujian/lihat-nilai.php">▥ Hasil Ujian</a>
        <a class="logout-link" href="../logout.php">↪ Logout</a>
    </aside>
    
<main class="content">

<div class="topbar"><div><h1>Buat Soal</h1><p>Tambahkan soal baru ke bank soal.</p></div></div>
<section class="panel">
<form action="index.php" method="post">
<div class="form-grid">
<div class="form-group full"><label>Pertanyaan</label><textarea name="pertanyaan" placeholder="Tuliskan pertanyaan..." required></textarea></div>
<div class="form-group"><label>Mata Pelajaran</label><select name="mapel"><option>Matematika</option><option>Pemrograman</option><option>Basis Data</option></select></div>
<div class="form-group"><label>Tipe Soal</label><select name="tipe"><option>Pilihan Ganda</option><option>Essay</option></select></div>
<div class="form-group"><label>Pilihan A</label><input type="text" name="a"></div>
<div class="form-group"><label>Pilihan B</label><input type="text" name="b"></div>
<div class="form-group"><label>Pilihan C</label><input type="text" name="c"></div>
<div class="form-group"><label>Pilihan D</label><input type="text" name="d"></div>
<div class="form-group"><label>Jawaban Benar</label><select name="jawaban"><option>A</option><option>B</option><option>C</option><option>D</option></select></div>
</div>
<div class="form-actions"><button class="btn-success" type="submit">Simpan Soal</button><a class="btn btn-secondary" href="index.php">Batal</a></div>
</form>
</section>

</main>
</body>
</html>
