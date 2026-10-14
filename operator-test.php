<?php

$fee = 350000;
$participants = 2;
$subtotal = $fee * $participants;
$comparisonPositive = $fee > 0;
$comparisonStrict = $fee === 350000;
$message = 'Biaya: Rp ' . $fee;

$results = [
    [
        'operator' => 'Perkalian (*)',
        'expression' => '$fee * $participants',
        'result' => 'Rp' . number_format($subtotal, 0, ',', '.'),
        'description' => 'Menghitung biaya untuk 2 peserta.'
    ],
    [
        'operator' => 'Comparison (>)',
        'expression' => '$fee > 0',
        'result' => $comparisonPositive ? 'true' : 'false',
        'description' => 'Memeriksa apakah biaya lebih dari nol.'
    ],
    [
        'operator' => 'Strict Comparison (===)',
        'expression' => '$fee === 350000',
        'result' => $comparisonStrict ? 'true' : 'false',
        'description' => 'Memeriksa nilai dan tipe data harus sama.'
    ],
    [
        'operator' => 'Concatenation (.)',
        'expression' => "'Biaya: Rp ' . \$fee",
        'result' => $message,
        'description' => 'Menggabungkan teks dengan nilai biaya.'
    ]
];

?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Operator Test - KursusKu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff0f6;
            color: #4a2636;
            margin: 0;
            padding: 30px 15px;
        }

        .utility-card {
            max-width: 950px;
            margin: 30px auto;
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

        code {
            color: #a82e68;
            white-space: nowrap;
        }

        .result {
            font-weight: bold;
            color: #a82e68;
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

<main class="utility-card">
    <h1>Operator PHP</h1>

    <p>
        Halaman ini menampilkan contoh penggunaan operator
        perkalian, perbandingan, dan penggabungan teks dalam PHP.
    </p>

    <p>
        Biaya per peserta:
        <strong>Rp<?= number_format($fee, 0, ',', '.') ?></strong><br>
        Jumlah peserta: <strong><?= $participants ?></strong><br>
        Total biaya:
        <strong>Rp<?= number_format($subtotal, 0, ',', '.') ?></strong>
    </p>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Jenis Operator</th>
                    <th>Ekspresi PHP</th>
                    <th>Hasil</th>
                    <th>Keterangan</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($results as $index => $item): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($item['operator']) ?></td>
                        <td><code><?= htmlspecialchars($item['expression']) ?></code></td>
                        <td class="result"><?= htmlspecialchars($item['result']) ?></td>
                        <td><?= htmlspecialchars($item['description']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <a href="fee-calculator.php" class="button">
        Kembali ke Kalkulator
    </a>
</main>

</body>
</html>