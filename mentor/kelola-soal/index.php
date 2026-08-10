<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Soal - FloTest</title>
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

<div class="topbar"><div><h1>Kelola Soal</h1><p>Kelola bank soal ujian.</p></div><a class="btn btn-success" href="buat-soal.php">+ Buat Soal</a></div>
<section class="panel">
<div class="panel-header"><h2>Bank Soal</h2><a class="btn btn-secondary" href="upload-soal.php">Upload Soal</a></div>
<div class="table-wrap">
<table>
<thead><tr><th>No</th><th>Pertanyaan</th><th>Mata Pelajaran</th><th>Tipe</th><th>Aksi</th></tr></thead>
<tbody>
<tr><td>1</td><td>Apa fungsi database?</td><td>Basis Data</td><td><span class="badge">Pilihan Ganda</span></td><td class="actions"><a class="btn" href="ubah-soal.php">Edit</a><a class="btn btn-danger" href="hapus-soal.php">Hapus</a></td></tr>
<tr><td>2</td><td>Apa itu PHP?</td><td>Pemrograman</td><td><span class="badge">Pilihan Ganda</span></td><td class="actions"><a class="btn" href="ubah-soal.php">Edit</a><a class="btn btn-danger" href="hapus-soal.php">Hapus</a></td></tr>
<tr><td>3</td><td>Jelaskan HTML.</td><td>Web</td><td><span class="badge">Essay</span></td><td class="actions"><a class="btn" href="ubah-soal.php">Edit</a><a class="btn btn-danger" href="hapus-soal.php">Hapus</a></td></tr>
</tbody>
</table>
</div>
</section>

</main>
</body>
</html>
