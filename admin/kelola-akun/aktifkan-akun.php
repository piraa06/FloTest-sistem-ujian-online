<?php
session_start();

require_once '../dummy-data.php';

$akun = $_SESSION['akun'];

$id = $_GET['id'] ?? null;

if ($id) {

    foreach ($akun as $a) {

        if ($a['id'] == $id) {

            echo "<script>
                    alert('Akun {$a['nama']} berhasil diaktifkan!');
                    window.location='aktifkan.php';
                  </script>";

            exit;
        }
    }
}

echo "<script>
        alert('Data akun tidak ditemukan!');
        window.location='../dashboard.php';
      </script>";

exit;
?>