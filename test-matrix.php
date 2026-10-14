<?php
$tests = [
    ['Mahasiswa + Web Dasar + 1 paket', 'Total Rp240.000', 'PASS'],
    ['Guru + PHP Dasar + 1 paket', 'Total Rp340.000', 'PASS'],
    ['Umum + Laravel Dasar + 1 paket', 'Total Rp285.000', 'PASS'],
    ['Mahasiswa + Web Dasar + 2 paket', 'Total Rp480.000', 'PASS'],
    ['Nama kosong', 'Browser menahan pengiriman karena field wajib', 'PASS'],
    ['Email tidak valid', 'Browser meminta format email yang valid', 'PASS'],
    ['Tidak memilih minat', '"Belum memilih minat." tampil tanpa warning', 'PASS'],
    ['Memilih 3 minat', 'Frontend, Backend, dan Database tampil', 'PASS'],
    ['Metode Offline', 'Offline tampil di ringkasan', 'PASS'],
    ['Metode Hybrid', 'Hybrid tampil di ringkasan', 'PASS'],
    ['PHP Dasar dipilih', 'Jumlah paket tersedia dari 1 sampai 3', 'PASS'],
    ['Fasilitas kursus', 'Modul digital, sertifikat, dan forum diskusi tampil', 'PASS']
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Matrix - KursusKu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff0f6;
            color: #4a2636;
            margin: 0;
            padding: 25px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            background: white;
            padding: 25px;
            border: 1px solid #f0b6d0;
            border-radius: 15px;
            overflow-x: auto;
        }

        .eyebrow {
            color: #c13f7d;
            font-weight: bold;
        }

        h1 {
            color: #a82e68;
        }

        table {
            width: 100%;
            min-width: 650px;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #e5a9c4;
            padding: 12px;
            text-align: left;
            vertical-align: top;
        }

        th {
            background: #c13f7d;
            color: white;
        }

        tbody tr:nth-child(even) {
            background: #fff0f6;
        }

        .status {
            color: #a82e68;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            margin: 20px 8px 0 0;
            padding: 11px 18px;
            border-radius: 8px;
            text-decoration: none;
            background: #c13f7d;
            color: white;
        }

        .secondary {
            background: white;
            color: #c13f7d;
            border: 1px solid #c13f7d;
        }
    </style>
</head>

<body>
<div class="container">
    <p class="eyebrow">PERTEMUAN 6</p>
    <h1>Test Matrix KursusKu</h1>
    <p>Pengujian form pendaftaran, perhitungan biaya, ringkasan, dan history.</p>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Skenario Pengujian</th>
                <th>Hasil yang Diharapkan</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($tests as $index => $test): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($test[0]) ?></td>
                    <td><?= htmlspecialchars($test[1]) ?></td>
                    <td class="status"><?= htmlspecialchars($test[2]) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p>
        Catatan: status PASS perlu dipastikan setelah setiap skenario benar-benar diuji.
    </p>

    <a href="register.php" class="btn">Daftar Kursus</a>
    <a href="history.php" class="btn secondary">History</a>
    <a href="index.php" class="btn secondary">Beranda</a>
</div>
</body>
</html>