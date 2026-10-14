<?php

declare(strict_types=1);

$tests = [
    ['fee' => 350000, 'participants' => 1, 'discount' => 0, 'admin' => 25000, 'expected' => 375000],
    ['fee' => 350000, 'participants' => 1, 'discount' => 10, 'admin' => 25000, 'expected' => 340000],
    ['fee' => 350000, 'participants' => 2, 'discount' => 25, 'admin' => 25000, 'expected' => 550000],
    ['fee' => 0, 'participants' => 1, 'discount' => 10, 'admin' => 0, 'expected' => 0],
    ['fee' => 2500000, 'participants' => 3, 'discount' => 10, 'admin' => 50000, 'expected' => 6800000],
];

foreach ($tests as $index => $test) {
    $subtotal = $test['fee'] * $test['participants'];
    $discountAmount = intdiv(
        $subtotal * $test['discount'],
        100
    );

    $actual = $subtotal - $discountAmount + $test['admin'];

    $tests[$index]['actual'] = $actual;
    $tests[$index]['status'] =
        $actual === $test['expected'] ? 'PASS' : 'FAIL';
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Case - KursusKu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff0f6;
            color: #4a2636;
            margin: 0;
            padding: 30px 15px;
        }

        .container {
            max-width: 1100px;
            margin: 20px auto;
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
            margin-top: 25px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #f0b6d0;
            text-align: center;
            white-space: nowrap;
        }

        th {
            background: #c13f7d;
            color: white;
        }

        tbody tr:nth-child(even) {
            background: #fff0f6;
        }

        tbody tr:hover {
            background: #ffe0ed;
        }

        .pass {
            color: #187344;
            background: #e2f7e9;
            font-weight: bold;
        }

        .fail {
            color: #a32135;
            background: #ffe1e5;
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

<main class="container">
    <h1>Test Matrix Kalkulator Biaya</h1>

    <p>
        Pengujian lima skenario untuk memeriksa hasil perhitungan
        biaya, diskon, dan biaya administrasi.
    </p>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Biaya per Peserta</th>
                    <th>Peserta</th>
                    <th>Diskon</th>
                    <th>Biaya Admin</th>
                    <th>Expected</th>
                    <th>Actual</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($tests as $i => $test): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>

                        <td>
                            Rp<?= number_format(
                                $test['fee'], 0, ',', '.'
                            ) ?>
                        </td>

                        <td><?= $test['participants'] ?></td>

                        <td><?= $test['discount'] ?>%</td>

                        <td>
                            Rp<?= number_format(
                                $test['admin'], 0, ',', '.'
                            ) ?>
                        </td>

                        <td>
                            Rp<?= number_format(
                                $test['expected'], 0, ',', '.'
                            ) ?>
                        </td>

                        <td>
                            Rp<?= number_format(
                                $test['actual'], 0, ',', '.'
                            ) ?>
                        </td>

                        <td class="<?= $test['status'] === 'PASS' ? 'pass' : 'fail' ?>">
                            <?= $test['status'] ?>
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