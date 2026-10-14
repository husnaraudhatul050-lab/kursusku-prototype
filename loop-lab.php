<?php
require_once __DIR__ . '/data.php';
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
            padding: 25px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 25px;
            border: 1px solid #f0b6d0;
            border-radius: 15px;
        }
        h1, h2 { color: #c13f7d; }
        .card {
            padding: 15px;
            margin: 12px 0;
            background: #fff0f6;
            border-radius: 8px;
        }
        a {
            display: inline-block;
            margin: 12px 8px 0 0;
            padding: 10px 15px;
            background: #c13f7d;
            color: white;
            text-decoration: none;
            border-radius: 7px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Loop Lab KursusKu</h1>
    <p>Contoh perulangan for, while, dan do-while.</p>

    <h2>Daftar Kursus (foreach)</h2>
    <?php foreach ($courses as $code => $course): ?>
        <div class="card">
            <strong><?= htmlspecialchars($course['name']) ?></strong><br>
            Kode: <?= htmlspecialchars($code) ?><br>
            Harga: Rp<?= number_format($course['price'], 0, ',', '.') ?>
        </div>
    <?php endforeach; ?>

    <h2>Contoh for</h2>
    <p>
        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "Paket $i ";
        }
        ?>
    </p>

    <h2>Contoh while</h2>
    <p>
        <?php
        $i = 1;
        while ($i <= 3) {
            echo "Peserta $i ";
            $i++;
        }
        ?>
    </p>

    <h2>Contoh do-while</h2>
    <p>
        <?php
        $i = 1;
        do {
            echo "Latihan $i ";
            $i++;
        } while ($i <= 3);
        ?>
    </p>

    <a href="register.php">Daftar Kursus</a>
    <a href="history.php">History</a>
    <a href="index.php">Beranda</a>
</div>
</body>
</html>