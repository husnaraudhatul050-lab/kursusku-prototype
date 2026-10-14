<?php
require_once __DIR__ . '/data.php';

function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Lab - KursusKu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff0f6;
            color: #4a2636;
            padding: 25px 15px;
        }

        .container {
            max-width: 850px;
            margin: 30px auto;
            padding: 30px;
            background: white;
            border: 1px solid #f0b6d0;
            border-radius: 15px;
            box-shadow: 0 8px 25px #c13f7d18;
        }

        h1, h2 {
            color: #a82e68;
        }

        .table-wrap {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            padding: 12px;
            border: 1px solid #f0b6d0;
            text-align: left;
        }

        th {
            background: #c13f7d;
            color: white;
        }

        tr:nth-child(even) {
            background: #fff0f6;
        }

        .button {
            display: inline-block;
            margin: 8px 5px 0 0;
            padding: 11px 17px;
            background: #c13f7d;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .secondary {
            background: white;
            color: #a82e68;
            border: 1px solid #c13f7d;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Loop Lab KursusKu</h1>
    <p>Contoh perulangan foreach, for, while, dan do-while.</p>

    <h2>Daftar Kursus (foreach)</h2>

    <div class="table-wrap">
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
                <?php foreach ($courses as $index => $course): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= e($course['code']) ?></td>
                    <td><?= e($course['name']) ?></td>
                    <td>Rp<?= number_format($course['price'], 0, ',', '.') ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <h2>Contoh for</h2>
    <p>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo $i . ' ';
        }
        ?>
    </p>

    <h2>Contoh while</h2>
    <p>
        <?php
        $i = 1;
        while ($i <= 5) {
            echo $i . ' ';
            $i++;
        }
        ?>
    </p>

    <h2>Contoh do-while</h2>
    <p>
        <?php
        $i = 1;
        do {
            echo $i . ' ';
            $i++;
        } while ($i <= 5);
        ?>
    </p>

    <a href="index.php" class="button">Kembali ke Beranda</a>
    <a href="register.php" class="button secondary">Daftar Kursus</a>
</div>

</body>
</html>