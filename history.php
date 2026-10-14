<?php

session_start();

/*
|--------------------------------------------------------------------------
| Ambil History dari Session
|--------------------------------------------------------------------------
*/

$sessionHistory = $_SESSION['history'] ?? [];


/*
|--------------------------------------------------------------------------
| Data Dummy
|--------------------------------------------------------------------------
*/

$dummyHistory = [
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
    ]
];


/*
|--------------------------------------------------------------------------
| Gunakan Session jika datanya lengkap
|--------------------------------------------------------------------------
*/

$history = [];

foreach ($sessionHistory as $item) {

    if (
        isset($item['name']) &&
        isset($item['course']) &&
        isset($item['total'])
    ) {

        $history[] = $item;

    }

}


/*
|--------------------------------------------------------------------------
| Jika tidak ada data valid, tampilkan data dummy
|--------------------------------------------------------------------------
*/

if (empty($history)) {
    $history = $dummyHistory;
}


/*
|--------------------------------------------------------------------------
| Fungsi keamanan
|--------------------------------------------------------------------------
*/

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

    <title>History Pendaftaran - KursusKu</title>


    <style>

        * {
            box-sizing: border-box;
        }


        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff0f6;
            color: #333;
        }


        .history-page {
            min-height: 100vh;
            padding: 40px 20px;
            background: #fff0f6;
        }


        .history-container {
            max-width: 1100px;
            margin: 0 auto;
        }


        /* HEADER */

        .history-header {
            margin-bottom: 25px;
        }


        .milestone {
            color: #c13f7d;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }


        .history-header h1 {
            font-size: 38px;
            margin: 10px 0;
            color: #222;
        }


        .history-header p {
            font-size: 17px;
            color: #555;
        }


        /* CARD */

        .history-card {
            background: #ffffff;
            padding: 25px;
            border-radius: 18px;
            border: 1px solid #f0b6d0;
            box-shadow: 0 5px 15px rgba(200, 80, 130, 0.10);
        }


        .history-card h2 {
            margin-top: 0;
            margin-bottom: 8px;
            color: #c13f7d;
            font-size: 25px;
        }


        .description {
            color: #666;
            margin-bottom: 20px;
        }


        /* TABEL */

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }


        .history-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }


        .history-table th {
            background: #c13f7d;
            color: white;
            border: 1px solid #a83268;
            padding: 14px;
            text-align: left;
        }


        .history-table td {
            border: 1px solid #e5a9c4;
            padding: 14px;
        }


        .history-table tbody tr:nth-child(even) {
            background: #fff0f6;
        }


        .history-table tbody tr:hover {
            background: #ffe0ed;
        }


        .history-table .number {
            text-align: center;
            width: 80px;
        }


        .history-table .total {
            color: #c13f7d;
            font-weight: bold;
        }


        /* TOMBOL */

        .button-area {
            margin-top: 25px;
        }


        .btn-primary,
        .btn-secondary {
            display: inline-block;
            padding: 12px 22px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            margin-right: 8px;
        }


        .btn-primary {
            background: #c13f7d;
            color: white;
        }


        .btn-primary:hover {
            background: #a83268;
        }


        .btn-secondary {
            background: white;
            color: #c13f7d;
            border: 2px solid #c13f7d;
        }


        .btn-secondary:hover {
            background: #ffe0ed;
        }


        /* HP */

        @media (max-width: 700px) {

            .history-page {
                padding: 20px 12px;
            }


            .history-header h1 {
                font-size: 28px;
            }


            .history-card {
                padding: 15px;
            }


            .history-table {
                min-width: 650px;
            }

        }

    </style>

</head>


<body>

<main class="history-page">

    <div class="history-container">


        <!-- HEADER -->

        <div class="history-header">

            <p class="milestone">
                MILESTONE 6 · HISTORY
            </p>


            <h1>
                History Pendaftaran
            </h1>


            <p>
                Berikut adalah daftar pendaftaran
                kursus yang sudah diproses.
            </p>

        </div>


        <!-- CARD -->

        <div class="history-card">

            <h2>
                Data Pendaftaran
            </h2>


            <p class="description">
                Riwayat peserta yang telah melakukan
                pendaftaran kursus.
            </p>


            <!-- TABEL -->

            <div class="table-wrapper">

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
                                    <?= e($item['name']) ?>
                                </td>


                                <td>
                                    <?= e($item['course']) ?>
                                </td>


                                <td class="total">

                                    Rp<?= number_format(
                                        $item['total'],
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