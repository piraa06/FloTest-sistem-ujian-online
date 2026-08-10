<?php

require_once '../data.php';

?>

<div class="question-navigation">

    <h3>Nomor Soal</h3>

    <?php foreach ($soal as $item): ?>

        <a href="#soal-<?= $item['id'] ?>">
            <?= $item['nomor'] ?>
        </a>

    <?php endforeach; ?>

</div>