<?php
$quota = 30;
$registered = 18;

$isFull = $registered >= $quota;
$hasSeat = $registered < $quota;

$results = [
    [
        'no' => 1,
        'kondisi' => 'Kapasitas Kursus',
        'keterangan' => 'Jumlah kuota kursus',
        'hasil' => $quota . ' peserta'
    ],
    [
        'no' => 2,
        'kondisi' => 'Peserta Terdaftar',
        'keterangan' => 'Jumlah peserta yang sudah mendaftar',
        'hasil' => $registered . ' peserta'
    ],
    [
        'no' => 3,
        'kondisi' => 'isFull',
        'keterangan' => 'Apakah kursus sudah penuh?',
        'hasil' => $isFull ? 'Ya (true)' : 'Tidak (false)'
    ],
    [
        'no' => 4,
        'kondisi' => 'hasSeat',
        'keterangan' => 'Apakah kursi masih tersedia?',
        'hasil' => $hasSeat ? 'Ya (true)' : 'Tidak (false)'
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logic Test</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff0f6;
            color: #63334b;
            margin: 0;
            padding: 30px 15px;
        }

        .utility-card {
            max-width: 800px;
            margin: 20px auto;
            padding: 25px;
            background: #ffffff;
            border: 1px solid #f0b6d0;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(193, 63, 125, 0.1);
        }

        h1 {
            color: #c13f7d;
            text-align: center;
        }

        p {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #e5a9c4;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #d14d8b;
            color: white;
        }

        tbody tr:nth-child(even) {
            background: #fff0f6;
        }

        .true {
            color: #198754;
            font-weight: bold;
        }

        .false {
            color: #dc3545;
            font-weight: bold;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 18px;
            background: #d14d8b;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        a:hover {
            background: #b83270;
        }
    </style>
</head>
<body>
    <main class="utility-card">
        <h1>Logic Test</h1>
        <p>Hasil pemeriksaan logika kapasitas kursus</p>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kondisi</th>
                    <th>Keterangan</th>
                    <th>Hasil</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $result): ?>
                    <tr>
                        <td><?= $result['no'] ?></td>
                        <td><?= htmlspecialchars($result['kondisi']) ?></td>
                        <td><?= htmlspecialchars($result['keterangan']) ?></td>
                        <td class="<?= strpos($result['hasil'], 'true') !== false || strpos($result['hasil'], 'Ya') !== false ? 'true' : (strpos($result['hasil'], 'false') !== false || strpos($result['hasil'], 'Tidak') !== false ? 'false' : '') ?>">
                            <?= htmlspecialchars($result['hasil']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="index.php">Kembali</a>
    </main>
</body>
</html>