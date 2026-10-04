<?php

session_status();
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$course = $_POST['course'] ?? '';
$participantType = $_POST['participant_type'] ?? '';
$interests = $_POST['interests'] ?? [];
$method = $_POST['method'] ?? '';
$package = (int)($_POST['package'] ?? 1);
$note = trim($_POST['note'] ?? '');


// ======================================
// DAFTAR HARGA KURSUS
// ======================================

$prices = [
    'Web Dasar' => 300000,
    'PHP Dasar' => 400000,
    'PHP Lanjutan' => 300000,
    'Laravel Dasar' => 300000,
    'MySQL Dasar' => 275000,
    'UI Web Dasar' => 225000
];


// ======================================
// HARGA KURSUS
// ======================================

$price = $prices[$course] ?? 0;


// ======================================
// HITUNG BIAYA
// ======================================

$subtotal = $price * $package;


// ======================================
// DISKON BERDASARKAN TIPE PESERTA
// ======================================

if ($participantType === 'Mahasiswa') {
    $discountPercent = 20;
} elseif ($participantType === 'Guru') {
    $discountPercent = 15;
} else {
    $discountPercent = 5;
}

$discountAmount = $subtotal * $discountPercent / 100;

$total = $subtotal - $discountAmount;

if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = [];
}

$_SESSION['history'][] = [
    'name' => $name,
    'email' => $email,
    'course' => $course,
    'participantType' => $participantType,
    'interests' => $interests,
    'method' => $method,
    'package' => $package,
    'note' => $note,
    'price' => $price,
    'subtotal' => $subtotal,
    'discountPercent' => $discountPercent,
    'discountAmount' => $discountAmount,
    'total' => $total
];

// ======================================
// SIMPAN DATA KE HISTORY
// ======================================

if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = [];
}

$_SESSION['history'][] = [
    'name' => $name,
    'email' => $email,
    'course' => $course,
    'participantType' => $participantType,
    'interests' => $interests,
    'method' => $method,
    'package' => $package,
    'note' => $note,
    'price' => $price,
    'subtotal' => $subtotal,
    'discountPercent' => $discountPercent,
    'discountAmount' => $discountAmount,
    'total' => $total
];

// ======================================
// ESCAPE HTML
// ======================================

function e($value): string
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

    <title>Ringkasan Pendaftaran - KursusKu</title>

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

        .registration-page {
            padding: 40px 20px;
        }

        .registration-container {
            max-width: 900px;
            margin: auto;
        }

        .registration-header {
            margin-bottom: 25px;
        }

        .milestone {
            color: #d14d8b;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .registration-header h1 {
            font-size: 38px;
            margin: 10px 0;
            color: #222;
        }

        .registration-header p {
            font-size: 17px;
        }


        /* =========================
           DATA PENDAFTARAN
           ========================= */

        .data-card {
            background: white;
            border: 1px solid #f0b6d0;
            border-radius: 18px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(200, 80, 130, 0.08);
        }

        .data-card h2 {
            margin-top: 0;
            color: #c13f7d;
            font-size: 25px;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .data-table td {
            border: 1px solid #e5a9c4;
            padding: 15px;
            vertical-align: top;
            width: 50%;
        }

        .data-table strong {
            display: block;
            color: #c13f7d;
            margin-bottom: 5px;
            font-size: 15px;
        }


        /* =========================
           RINCIAN BIAYA
           ========================= */

        .section-title {
            font-size: 28px;
            margin: 25px 0 15px;
            color: #c13f7d;
        }

        .price-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border: 1px solid #e5a9c4;
        }

        .price-table td {
            border: 1px solid #e5a9c4;
            padding: 15px;
        }

        .price-table td:last-child {
            text-align: right;
            font-weight: bold;
        }

        .price-table .total-row {
            background: #ffd9e8;
            color: #9e245f;
            font-size: 18px;
        }


        /* =========================
           MINAT
           ========================= */

        .interest-section {
            margin-top: 30px;
        }

        .interest-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .interest-item {
            background: #ffe0ed;
            color: #a62c68;
            border-radius: 20px;
            padding: 9px 16px;
            font-weight: bold;
            font-size: 14px;
        }


        /* =========================
           FASILITAS
           ========================= */

        .facility-section {
            margin-top: 30px;
        }

        .facility-list {
            background: white;
            border-radius: 12px;
            padding: 18px 30px;
            border: 1px solid #f0b6d0;
        }

        .facility-list li {
            margin: 10px 0;
        }


        /* =========================
           CATATAN
           ========================= */

        .note-section {
            margin-top: 30px;
        }

        .note-box {
            background: white;
            border: 1px solid #f0b6d0;
            border-radius: 12px;
            padding: 18px;
            min-height: 60px;
        }


        /* =========================
           BUTTON
           ========================= */

        .button-area {
            margin-top: 30px;
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

        .btn-secondary {
            border: 2px solid #c13f7d;
            color: #c13f7d;
            background: white;
        }

        .btn-primary:hover,
        .btn-secondary:hover {
            opacity: 0.85;
        }


        /* =========================
           RESPONSIVE
           ========================= */

        @media (max-width: 600px) {

            .registration-page {
                padding: 20px 12px;
            }

            .registration-header h1 {
                font-size: 28px;
            }

            .data-card {
                padding: 15px;
            }

            .data-table td {
                padding: 10px;
                font-size: 14px;
            }

            .price-table td {
                padding: 12px 8px;
            }

        }

    </style>

</head>


<body>

<main class="registration-page">

<div class="registration-container">


    <!-- =========================
         HEADER
         ========================= -->

    <div class="registration-header">

        <p class="milestone">
            MILESTONE 6 · RINGKASAN
        </p>

        <h1>
            Pendaftaran Berhasil Diproses
        </h1>

        <p>
            Data pendaftaran berhasil diproses.
        </p>

    </div>


    <!-- =========================
         DATA PENDAFTARAN
         ========================= -->

    <div class="data-card">

        <h2>Data Pendaftaran</h2>

        <table class="data-table">

            <tr>

                <td>
                    <strong>Nama:</strong>
                    <?= e($name) ?>
                </td>

                <td>
                    <strong>Email:</strong>
                    <?= e($email) ?>
                </td>

            </tr>

            <tr>

                <td>
                    <strong>Kursus:</strong>
                    <?= e($course) ?>
                </td>

                <td>
                    <strong>Tipe peserta:</strong>
                    <?= e($participantType) ?>
                </td>

            </tr>

            <tr>

                <td>
                    <strong>Metode:</strong>
                    <?= e($method) ?>
                </td>

                <td>
                    <strong>Jumlah paket:</strong>
                    <?= $package ?>
                </td>

            </tr>

        </table>

    </div>


    <!-- =========================
         RINCIAN BIAYA
         ========================= -->

    <h2 class="section-title">
        Rincian Biaya
    </h2>

    <table class="price-table">

        <tr>
            <td>Biaya satuan</td>

            <td>
                Rp<?= number_format(
                    $price,
                    0,
                    ',',
                    '.'
                ) ?>
            </td>
        </tr>


        <tr>
            <td>Subtotal</td>

            <td>
                Rp<?= number_format(
                    $subtotal,
                    0,
                    ',',
                    '.'
                ) ?>
            </td>
        </tr>


        <tr>
            <td>
                Diskon <?= $discountPercent ?>%
            </td>

            <td>
                -Rp<?= number_format(
                    $discountAmount,
                    0,
                    ',',
                    '.'
                ) ?>
            </td>
        </tr>


        <tr class="total-row">

            <td>
                <strong>TOTAL AKHIR</strong>
            </td>

            <td>
                <strong>
                    Rp<?= number_format(
                        $total,
                        0,
                        ',',
                        '.'
                    ) ?>
                </strong>
            </td>

        </tr>

    </table>


    <!-- =========================
         MINAT
         ========================= -->

    <div class="interest-section">

        <h2 class="section-title">
            Minat
        </h2>

        <div class="interest-list">

            <?php if (!empty($interests)): ?>

                <?php foreach ($interests as $interest): ?>

                    <span class="interest-item">
                        <?= e($interest) ?>
                    </span>

                <?php endforeach; ?>

            <?php else: ?>

                <span class="interest-item">
                    Belum memilih minat.
                </span>

            <?php endif; ?>

        </div>

    </div>


    <!-- =========================
         FASILITAS
         ========================= -->

    <div class="facility-section">

        <h2 class="section-title">
            Fasilitas
        </h2>

        <ul class="facility-list">

            <li>Modul digital</li>

            <li>Sertifikat penyelesaian</li>

            <li>Forum diskusi kelas</li>

        </ul>

    </div>


    <!-- =========================
         CATATAN
         ========================= -->

    <div class="note-section">

        <h2 class="section-title">
            Catatan
        </h2>

        <div class="note-box">

            <?php if ($note !== ''): ?>

                <?= e($note) ?>

            <?php else: ?>

                Tidak ada catatan.

            <?php endif; ?>

        </div>

    </div>


    <!-- =========================
         BUTTON
         ========================= -->

    <div class="button-area">

    <a
        href="registration.php"
        class="btn-primary">
        Daftar Lagi
    </a>

    <a
        href="history.php"
        class="btn-secondary">
        Lihat History Dummy
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