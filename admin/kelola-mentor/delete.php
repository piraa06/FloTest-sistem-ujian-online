<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}

$id = $_GET['id'] ?? null;

if ($id) {

    echo "<script>
            if (confirm('Yakin ingin menghapus mentor ini?')) {
                alert('Data mentor berhasil dihapus!');
            }

            window.location='index.php';
          </script>";

} else {

    header("Location: tambah.php");
    exit;

}
?>