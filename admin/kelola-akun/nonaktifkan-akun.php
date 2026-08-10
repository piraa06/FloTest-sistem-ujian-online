<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}

include "../dummy-data.php";

$id = $_GET['id'] ?? null;

if ($id) {

    foreach ($akun as $a) {

        if ($a['id'] == $id) {

            echo "<script>
                    if (confirm('Yakin ingin menonaktifkan akun {$a['nama']}?')) {
                        alert('Akun berhasil dinonaktifkan!');
                    }

                    window.location='nonaktifkan.php';
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