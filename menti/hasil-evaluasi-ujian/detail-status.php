<?php

session_start();

if (!isset($_SESSION['menti'])) {
    header('Location: ../login.php');
    exit;
}

require_once '../data.php';

$jawabanUser = $_SESSION['jawaban'] ?? [];

$benar = 0;

foreach ($soal as $item) {

    if (
        isset($jawabanUser[$item['id']]) &&
        $jawabanUser[$item['id']] === $item['jawaban']
    ) {
        $benar++;
    }
}

$total = count($soal);

$nilai = $total > 0
    ? round(($benar / $total) * 100)
    : 0;

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Detail Status</title>

    <link
        rel="stylesheet"
        href="../assets/css/style-menti.css"
    >

</head>

<body>

<main>

    <div class="card">

        <h1>Detail Status Ujian</h1>

        <p>
            <b>Nama:</b>
            <?= $_SESSION['menti']['nama'] ?>
        </p>

        <p>
            <b>Ujian:</b>
            Ujian Matematika
        </p>

        <p>
            <b>Jumlah soal:</b>
            <?= $total ?>
        </p>

        <p>
            <b>Benar:</b>
            <?= $benar ?>
        </p>

        <p>
            <b>Salah:</b>
            <?= $total - $benar ?>
        </p>

        <p>
            <b>Nilai:</b>
            <?= $nilai ?>
        </p>

        <p>
            <b>Status:</b>

            <?= $nilai >= 75
                ? 'Lulus'
                : 'Tidak Lulus'
            ?>

        </p>

    </div>

</main>

</body>
</html>