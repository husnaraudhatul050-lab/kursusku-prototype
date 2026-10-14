<?php

$courses = [
    ['code' => 'WEB-01', 'name' => 'Web Dasar', 'price' => 300000],
    ['code' => 'PHP-01', 'name' => 'PHP Dasar', 'price' => 400000],
    ['code' => 'PHP-02', 'name' => 'PHP Lanjutan', 'price' => 300000],
    ['code' => 'LAR-01', 'name' => 'Laravel Dasar', 'price' => 300000],
    ['code' => 'DB-01', 'name' => 'MySQL Dasar', 'price' => 275000],
    ['code' => 'UI-01', 'name' => 'UI Web Dasar', 'price' => 225000]
];

$interestOptions = ['Frontend', 'Backend', 'Database', 'UI/UX'];

$facilities = [
    'Modul digital',
    'Sertifikat penyelesaian',
    'Forum diskusi kelas'
];

$methodLabels = [
    'online' => 'Online',
    'offline' => 'Tatap Muka',
    'hybrid' => 'Hybrid'
];

// Tampilkan tabel hanya jika data.php dibuka langsung
if (basename($_SERVER['SCRIPT_FILENAME']) === basename(__FILE__)):
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kursus - KursusKu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff0f6;
            color: #4a2636;
            padding: 30px 15px;
        }
        .container {
            max-width: 850px;
            margin: auto;
            padding: 25px;
            background: white;
            border: 1px solid #f0b6d0;
            border-radius: 15px;
        }
        h1 { color: #a82e68; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            border: 1px solid #f0b6d0;
            text-align: left;
        }
        th { background: #c13f7d; color: white; }
        tr:nth-child(even) { background: #fff0f6; }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 11px 17px;
            background: #c13f7d;
            color: white;
            text-decoration: none;
            border-radius: 7px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Data Kursus KursusKu</h1>
    <p>Daftar data kursus yang tersedia.</p>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Kursus</th>
                <th>Nama Kursus</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($courses as $i => $course): ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= htmlspecialchars($course['code']) ?></td>
                <td><?= htmlspecialchars($course['name']) ?></td>
                <td>Rp<?= number_format($course['price'], 0, ',', '.') ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="index.php">Kembali ke Beranda</a>
</div>
</body>
</html>
<?php endif; ?>