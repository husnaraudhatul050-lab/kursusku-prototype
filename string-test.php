<?php

$rawName = ' Laravel Fundamental ';
$cleanName = trim($rawName);
$upperName = strtoupper($cleanName);
$lowerName = strtolower($cleanName);
$length = strlen($cleanName);
$short = substr($cleanName, 0, 7);

$results = [
    [
        'function' => 'trim()',
        'expression' => '$rawName',
        'result' => $cleanName,
        'description' => 'Menghapus spasi di awal dan akhir teks.'
    ],
    [
        'function' => 'strtoupper()',
        'expression' => '$cleanName',
        'result' => $upperName,
        'description' => 'Mengubah semua huruf menjadi huruf kapital.'
    ],
    [
        'function' => 'strtolower()',
        'expression' => '$cleanName',
        'result' => $lowerName,
        'description' => 'Mengubah semua huruf menjadi huruf kecil.'
    ],
    [
        'function' => 'strlen()',
        'expression' => '$cleanName',
        'result' => $length . ' karakter',
        'description' => 'Menghitung jumlah karakter dalam teks.'
    ],
    [
        'function' => 'substr()',
        'expression' => '$cleanName, 0, 7',
        'result' => $short,
        'description' => 'Mengambil tujuh karakter pertama dari teks.'
    ]
];

function e($value): string {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Test - KursusKu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff0f6;
            color: #4a2636;
            margin: 0;
            padding: 30px 15px;
        }

        .container {
            max-width: 950px;
            margin: 25px auto;
            padding: 30px;
            background: white;
            border: 1px solid #f0b6d0;
            border-radius: 15px;
            box-shadow: 0 8px 25px #c13f7d18;
        }

        h1 {
            color: #a82e68;
        }

        p {
            color: #795366;
            line-height: 1.6;
        }

        .table-wrap {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 13px;
            border: 1px solid #f0b6d0;
            text-align: left;
        }

        th {
            background: #c13f7d;
            color: white;
        }

        tbody tr:nth-child(even) {
            background: #fff0f6;
        }

        .result {
            color: #a82e68;
            font-weight: bold;
        }

        code {
            overflow-wrap: anywhere;
        }

        .button {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 20px;
            background: #c13f7d;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .button:hover {
            background: #a82e68;
        }
    </style>
</head>

<body>
<main class="container">

    <h1>String Function Test</h1>

    <p>
        Pengujian fungsi string PHP untuk mengolah teks
        pada sistem KursusKu.
    </p>

    <p>
        Teks awal:
        <strong><?= e($rawName) ?></strong>
    </p>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Fungsi</th>
                    <th>Ekspresi</th>
                    <th>Hasil</th>
                    <th>Keterangan</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($results as $index => $item): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= e($item['function']) ?></td>
                        <td><code><?= e($item['expression']) ?></code></td>
                        <td class="result"><?= e($item['result']) ?></td>
                        <td><?= e($item['description']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <a href="index.php" class="button">Kembali ke Beranda</a>

</main>
</body>
</html>