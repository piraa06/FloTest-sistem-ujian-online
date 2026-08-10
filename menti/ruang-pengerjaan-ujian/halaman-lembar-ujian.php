<?php

session_start();

if (!isset($_SESSION['menti'])) {
    header('Location: ../login.php');
    exit;
}

require_once '../data.php';

if (!isset($_SESSION['jawaban'])) {
    $_SESSION['jawaban'] = [];
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Lembar Ujian</title>

    <link
        rel="stylesheet"
        href="../assets/css/style-menti.css"
    >

</head>

<body>

<header class="exam-header">

    <h2>Ujian Matematika</h2>

    <div>
        Sisa waktu:
        <b id="timer">60:00</b>
    </div>

</header>


<main>

    <form
        method="POST"
        action="konfirmasi-pengiriman.php"
    >

        <?php foreach ($soal as $item): ?>

            <div class="card">

                <h3>
                    Soal <?= $item['nomor'] ?>
                </h3>

                <p>
                    <?= $item['pertanyaan'] ?>
                </p>


                <?php foreach ($item['pilihan'] as $kode => $pilihan): ?>

                    <label class="option">

                        <input
                            type="radio"
                            name="jawaban[<?= $item['id'] ?>]"
                            value="<?= $kode ?>"
                        >

                        <?= $kode ?>.
                        <?= $pilihan ?>

                    </label>

                <?php endforeach; ?>

            </div>

        <?php endforeach; ?>


        <button type="submit">
            Selesai & Kirim Ujian
        </button>

    </form>

</main>


<script src="countdown-timer.php"></script>

</body>
</html>