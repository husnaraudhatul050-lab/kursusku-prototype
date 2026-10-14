<?php

$courseName = 'Laravel Fundamental';
$fee = 350000;
$participantCount = 2;
$discountPercent = 10;
$adminFee = 25000;
$isActive = true;

$variables = [
    [
        'name' => '$courseName',
        'value' => $courseName,
        'type' => gettype($courseName)
    ],
    [
        'name' => '$fee',
        'value' => $fee,
        'type' => gettype($fee)
    ],
    [
        'name' => '$participantCount',
        'value' => $participantCount,
        'type' => gettype($participantCount)
    ],
    [
        'name' => '$discountPercent',
        'value' => $discountPercent,
        'type' => gettype($discountPercent)
    ],
    [
        'name' => '$adminFee',
        'value' => $adminFee,
        'type' => gettype($adminFee)
    ],
    [
        'name' => '$isActive',
        'value' => $isActive ? 'true' : 'false',
        'type' => gettype($isActive)
    ]
];

?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Type Data Test - KursusKu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff0f6;
            color: #4a2636;
            margin: 0;
            padding: 30px 15px;
        }

        .utility-card {
            max-width: 850px;
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

        .type {
            color: #a82e68;
            font-weight: bold;
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
    <h1>Variabel dan Tipe Data</h1>
    <p>
        Tabel berikut menampilkan variabel, nilai, dan tipe data
        yang digunakan pada sistem KursusKu.
    </p>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Variabel</th>
                    <th>Nilai</th>
                    <th>Tipe Data</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($variables as $index => $variable): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($variable['name']) ?></td>
                        <td>
                            <?php if ($variable['name'] === '$fee' ||
                                      $variable['name'] === '$adminFee'): ?>
                                Rp<?= number_format(
                                    (int) $variable['value'],
                                    0,
                                    ',',
                                    '.'
                                ) ?>
                            <?php else: ?>
                                <?= htmlspecialchars((string) $variable['value']) ?>
                            <?php endif; ?>
                        </td>
                        <td class="type">
                            <?= htmlspecialchars($variable['type']) ?>
                        </td>
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