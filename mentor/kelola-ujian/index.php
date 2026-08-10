<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Ujian - FloTest</title>
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

<div class="topbar"><div><h1>Kelola Ujian</h1><p>Kelola jadwal dan publikasi ujian.</p></div><a class="btn btn-success" href="buat-ujian.php">+ Buat Ujian</a></div>
<section class="panel">
<div class="table-wrap">
<table>
<thead><tr><th>No</th><th>Nama Ujian</th><th>Mata Pelajaran</th><th>Durasi</th><th>Status</th><th>Aksi</th></tr></thead>
<tbody>
<tr><td>1</td><td>UTS Matematika</td><td>Matematika</td><td>90 Menit</td><td><span class="badge success">Aktif</span></td><td class="actions"><a class="btn" href="atur-waktu-ujian.php">Atur</a><a class="btn btn-warning" href="publikasikan-ujian.php">Publikasikan</a></td></tr>
<tr><td>2</td><td>UAS Pemrograman</td><td>Pemrograman</td><td>120 Menit</td><td><span class="badge warning">Draft</span></td><td class="actions"><a class="btn" href="atur-waktu-ujian.php">Atur</a><a class="btn btn-success" href="publikasikan-ujian.php">Publikasikan</a></td></tr>
</tbody>
</table>
</div>
</section>

</main>
</body>
</html>
