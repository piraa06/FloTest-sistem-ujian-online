<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mentor - FloTest</title>
    <link rel="stylesheet" href="assets/css/style-mentor.css">
</head>
<body>

    <aside class="sidebar">
        <div class="sidebar-brand"><span>F</span> FloTest</div>
        <a class="active" href="dashboard.php">▣ Dashboard</a>
        <a class="" href="kelola-siswa/tambah-siswa.php">● Kelola Siswa</a>
        <a class="" href="kelola-soal/buat-soal.php">□ Kelola Soal</a>
        <a class="" href="kelola-ujian/buat-ujian.php">▤ Kelola Ujian</a>
        <a class="" href="lihat-hasil-ujian/lihat-nilai.php">▥ Hasil Ujian</a>
        <a class="logout-link" href="logout.php">↪ Logout</a>
    </aside>
    
<main class="content">

<div class="topbar">
    <div>
        <h1>Dashboard Mentor</h1>
        <p>Selamat datang kembali, Mentor.</p>
    </div>
    <div class="user-badge">👤 Mentor</div>
</div>

<div class="cards">
    <div class="card"><h3>Test Dibuat</h3><p>12</p></div>
    <div class="card green"><h3>Soal Dibuat</h3><p>150</p></div>
    <div class="card orange"><h3>Peserta Ujian</h3><p>85</p></div>
    <div class="card purple"><h3>Test Aktif</h3><p>3</p></div>
</div>

<div class="dashboard-grid">
    <section class="panel">
        <div class="panel-header">
            <div>
                <h2>Test Terbaru</h2>
                <p>Daftar ujian yang terakhir dibuat.</p>
            </div>
            <a class="btn" href="kelola-ujian/buat-ujian.php">+ Buat Ujian</a>
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Nama Ujian</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>UTS Pemrograman</td><td>20 Mei 2026</td><td><span class="badge success">Aktif</span></td></tr>
                    <tr><td>Quiz Basis Data</td><td>18 Mei 2026</td><td><span class="badge">Selesai</span></td></tr>
                    <tr><td>Ujian Harian</td><td>17 Mei 2026</td><td><span class="badge warning">Draft</span></td></tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="panel">
        <div class="panel-header">
            <div>
                <h2>Aktivitas</h2>
                <p>Aktivitas terbaru mentor.</p>
            </div>
        </div>

        <div class="activity-item">
            <div>Ujian baru dibuat</div><span>10 menit lalu</span>
        </div>
        <div class="activity-item">
            <div>5 soal diperbarui</div><span>1 jam lalu</span>
        </div>
        <div class="activity-item">
            <div>Hasil ujian dilihat</div><span>2 jam lalu</span>
        </div>
    </section>
</div>

</main>
</body>
</html>
