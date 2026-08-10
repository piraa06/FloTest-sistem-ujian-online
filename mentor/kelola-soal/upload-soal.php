<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Soal - FloTest</title>
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

<div class="topbar"><div><h1>Upload Soal</h1><p>Upload file soal secara massal.</p></div></div>
<section class="panel">
<form action="index.php" method="post" enctype="multipart/form-data">
<div class="form-group"><label>File Soal</label><input type="file" name="file_soal" accept=".csv,.xlsx,.xls" required></div>
<div class="form-actions"><button class="btn-success" type="submit">Upload</button><a class="btn btn-secondary" href="index.php">Batal</a></div>
</form>
</section>

</main>
</body>
</html>
