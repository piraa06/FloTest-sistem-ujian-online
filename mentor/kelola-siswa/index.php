<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Siswa - FloTest</title>
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
    <div><h1>Kelola Siswa</h1><p>Kelola data siswa yang mengikuti ujian.</p></div>
    <a class="btn btn-success" href="tambah-siswa.php">+ Tambah Siswa</a>
</div>

<section class="panel">
    <div class="panel-header">
        <h2>Daftar Siswa</h2>
        <input style="max-width:260px;padding:10px;border:1px solid #cbd5e1;border-radius:7px" type="search" placeholder="Cari siswa...">
    </div>
    <div class="table-wrap">
    <table>
        <thead><tr><th>No</th><th>Nama</th><th>Email</th><th>Status</th><th>Aksi</th></tr></thead>
        <tbody>
            <tr><td>1</td><td>Andi Setiawan</td><td>andi@mail.com</td><td><span class="badge success">Aktif</span></td><td class="actions"><a class="btn" href="ubah-data-siswa.php">Edit</a><a class="btn btn-danger" href="hapus-siswa.php">Hapus</a></td></tr>
            <tr><td>2</td><td>Siti Rahma</td><td>siti@mail.com</td><td><span class="badge success">Aktif</span></td><td class="actions"><a class="btn" href="ubah-data-siswa.php">Edit</a><a class="btn btn-danger" href="hapus-siswa.php">Hapus</a></td></tr>
            <tr><td>3</td><td>Budi Santoso</td><td>budi@mail.com</td><td><span class="badge warning">Nonaktif</span></td><td class="actions"><a class="btn" href="ubah-data-siswa.php">Edit</a><a class="btn btn-danger" href="hapus-siswa.php">Hapus</a></td></tr>
        </tbody>
    </table>
    </div>
</section>

</main>
</body>
</html>
