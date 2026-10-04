<?php

session_start();

$history = $_SESSION['history'] ?? [];


// Data contoh jika belum ada data
if (empty($history)) {

    $history = [
        [
            'name' => 'rara',
            'course' => 'Web Dasar',
            'total' => 240000
        ],
        [
            'name' => 'guru izan',
            'course' => 'Web Dasar',
            'total' => 340000
        ],
        [
            'name' => 'citra',
            'course' => 'Laravel Dasar',
            'total' => 285000
        ],
        [
            'name' => 'Deni',
            'course' => 'Web Dasar',
            'total' => 480000
        ],
       
    ];

}


function e($value)
{
    return htmlspecialchars(
        (string)$value,
        ENT_QUOTES,
        'UTF-8'
    );
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        History Pendaftaran - KursusKu
    </title>

    <!-- CSS -->
    <link
        rel="stylesheet"
        href="assets/css/style.css">

</head>


<body>

<main class="history-page">

    <div class="history-container">


        <div class="history-header">

            <p class="milestone">
                MILESTONE 6 · HISTORY
            </p>

            <h1>
                History Pendaftaran
            </h1>

            <p>
                Berikut adalah daftar pendaftaran kursus yang sudah diproses.
            </p>

        </div>


        <div class="history-card">

            <h2>
                Data Pendaftaran
            </h2>

            <p class="description">
                Riwayat peserta yang telah melakukan pendaftaran kursus.
            </p>


            <!-- TABEL -->

            <table class="history-table">

                <thead>

                    <tr>

                        <th>Nomor</th>

                        <th>Nama</th>

                        <th>Kursus</th>

                        <th>Total</th>

                    </tr>

                </thead>


                <tbody>

                    <?php foreach ($history as $index => $item): ?>

                        <tr>

                            <td class="number">
                                <?= $index + 1 ?>
                            </td>

                            <td>
                                <?= e($item['name'] ?? '') ?>
                            </td>

                            <td>
                                <?= e($item['course'] ?? '') ?>
                            </td>

                            <td class="total">
                                Rp<?= number_format(
                                    $item['total'] ?? 0,
                                    0,
                                    ',',
                                    '.'
                                ) ?>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>


        <!-- TOMBOL -->

        <div class="button-area">

            <a
                href="registration.php"
                class="btn-primary">

                Daftar Kursus

            </a>


            <a
                href="index.php"
                class="btn-secondary">

                Beranda

            </a>

        </div>


    </div>

</main>

</body>

</html>