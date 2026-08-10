<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Ujian - FloTest</title>
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

<div class="topbar"><div><h1>Hasil Ujian</h1><p>Lihat nilai dan statistik peserta.</p></div><a class="btn" href="unduh-hasil.php">Unduh Hasil</a></div>
<section class="panel">
<div class="cards" style="margin-bottom:0">
<div class="card"><h3>Rata-rata Nilai</h3><p>78</p></div>
<div class="card green"><h3>Lulus</h3><p>75%</p></div>
<div class="card orange"><h3>Peserta</h3><p>85</p></div>
<div class="card purple"><h3>Nilai Tertinggi</h3><p>98</p></div>
</div>
</section>
<section class="panel">
<div class="panel-header"><h2>Daftar Nilai</h2></div>
<div class="table-wrap">
<table>
<thead><tr><th>No</th><th>Nama Siswa</th><th>Ujian</th><th>Nilai</th><th>Status</th></tr></thead>
<tbody>
<tr><td>1</td><td>Andi Setiawan</td><td>UTS Matematika</td><td>92</td><td><span class="badge success">Lulus</span></td></tr>
<tr><td>2</td><td>Siti Rahma</td><td>UTS Matematika</td><td>85</td><td><span class="badge success">Lulus</span></td></tr>
<tr><td>3</td><td>Budi Santoso</td><td>UTS Matematika</td><td>68</td><td><span class="badge danger">Tidak Lulus</span></td></tr>
</tbody>
</table>
</div>
</section>

</main>
</body>
</html>
