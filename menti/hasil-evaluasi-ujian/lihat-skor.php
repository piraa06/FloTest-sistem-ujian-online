<?php

session_start();

if (!isset($_SESSION['menti'])) {
    header('Location: ../login.php');
    exit;
}

require_once '../data.php';

$jawabanUser = $_SESSION['jawaban'] ?? [];

$benar = 0;
$total = count($soal);

foreach ($soal as $item) {

    $id = $item['id'];

    if (
        isset($jawabanUser[$id]) &&
        $jawabanUser[$id] === $item['jawaban']
    ) {

        $benar++;
    }
}

$nilai = $total > 0
    ? ($benar / $total) * 100
    : 0;

$nilai = round($nilai);

$status = $nilai >= 75
    ? 'Lulus'
    : 'Tidak Lulus';

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Hasil Ujian</title>

    <link
        rel="stylesheet"
        href="../assets/css/style-menti.css"
    >

</head>

<body>

<main>

    <div class="card result">

        <h1>Hasil Ujian</h1>

        <h2>Ujian Matematika</h2>

        <p>
            Jumlah soal:
            <?= $total ?>
        </p>

        <p>
            Jawaban benar:
            <?= $benar ?>
        </p>

        <h1>
            <?= $nilai ?>
        </h1>

        <h3>
            <?= $status ?>
        </h3>

        <a
            class="button"
            href="detail-status.php"
        >
            Detail Status
        </a>

        <a
            class="button"
            href="pembahasan.php"
        >
            Lihat Pembahasan
        </a>

    </div>

</main>

</body>
</html>