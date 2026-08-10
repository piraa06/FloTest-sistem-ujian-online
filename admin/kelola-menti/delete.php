<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}

include "../dummy-data.php";

$id = $_GET['id'] ?? null;

$data = null;

foreach ($menti as $m) {

    if ($m['id'] == $id) {
        $data = $m;
        break;
    }
}

if ($data) {

    echo "<script>

            if (confirm('Yakin ingin menghapus menti {$data['nama']}?')) {

                alert('Data menti berhasil dihapus!');

            }

            window.location='../dashboard.php';

          </script>";

} else {

    echo "<script>

            alert('Data menti tidak ditemukan!');

            window.location='../dashboard.php';

          </script>";
}

exit;
?>