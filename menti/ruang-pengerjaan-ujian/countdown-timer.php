<?php

header('Content-Type: application/javascript');

?>

let waktu = 60 * 60;

const timer = document.getElementById("timer");

const countdown = setInterval(function () {

    let menit = Math.floor(waktu / 60);
    let detik = waktu % 60;

    menit = String(menit).padStart(2, "0");
    detik = String(detik).padStart(2, "0");

    timer.innerText = menit + ":" + detik;

    waktu--;

    if (waktu < 0) {

        clearInterval(countdown);

        alert("Waktu ujian telah habis!");

        window.location.href =
            "konfirmasi-pengiriman.php";

    }

}, 1000);