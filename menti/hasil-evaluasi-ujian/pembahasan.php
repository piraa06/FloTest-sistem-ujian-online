<?php

session_start();

if (!isset($_SESSION['menti'])) {
    header('Location: ../login.php');
    exit;
}

require_once '../data.php';

$jawabanUser = $_SESSION['jawaban'] ?? [];

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Pembahasan</title>

    <link
        rel="stylesheet"
        href="../assets/css/style-menti.css"
    >

</head>

<body>

<main>

    <h1>Pembahasan Ujian</h1>

    <?php foreach ($soal as $item): ?>

        <div class="card">

            <h3>
                Soal <?= $item['nomor'] ?>
            </h3>

            <p>
                <?= $item['pertanyaan'] ?>
            </p>

            <p>
                <b>Jawaban kamu:</b>

                <?= $jawabanUser[$item['id']] ?? 'Tidak dijawab' ?>
            </p>

            <p>
                <b>Jawaban benar:</b>
                <?= $item['jawaban'] ?>
            </p>

            <p>
                <b>Pembahasan:</b><br>
                <?= $item['pembahasan'] ?>
            </p>

        </div>

    <?php endforeach; ?>

</main>

</body>
</html>