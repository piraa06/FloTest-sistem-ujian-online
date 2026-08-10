<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}

include "../dummy-data.php";

$id = $_GET['id'] ?? null;

$data = null;

foreach ($mata_pelajaran as $mp) {

    if ($mp['id'] == $id) {
        $data = $mp;
        break;
    }
}

if ($data) {

    echo "<script>

            if (confirm('Yakin ingin menghapus mata pelajaran {$data['nama']}?')) {

                alert('Mata pelajaran berhasil dihapus!');

            }

            window.location='../dashboard.php';

          </script>";

} else {

    echo "<script>

            alert('Data mata pelajaran tidak ditemukan!');

            window.location='../dashboard.php';

          </script>";
}

exit;
?>