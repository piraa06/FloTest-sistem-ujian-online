<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $soal_id = $_POST['soal_id'] ?? null;
    $jawaban = $_POST['jawaban'] ?? null;

    if ($soal_id && $jawaban) {

        $_SESSION['jawaban'][$soal_id] = $jawaban;

        echo "Jawaban berhasil disimpan.";

    } else {

        echo "Data tidak lengkap.";

    }

}