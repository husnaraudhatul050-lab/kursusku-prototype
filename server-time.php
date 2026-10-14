<?php
date_default_timezone_set('Asia/Jakarta');
$serverTime = date('Y-m-d H:i:s');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Time - KursusKu</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: #fff0f6;
            color: #4a2636;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 850px;
            background: #ffffff;
            padding: 45px 55px;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(193, 63, 125, 0.12);
            border: 1px solid #f5c2d8;
        }

        h1 {
            font-size: 32px;
            margin-top: 0;
            margin-bottom: 35px;
            color: #a82e68;
        }

        .time-box {
            background: #fff0f6;
            border-left: 5px solid #c13f7d;
            padding: 20px 25px;
            border-radius: 8px;
            font-size: 18px;
            overflow-wrap: anywhere;
        }

        .time {
            color: #c13f7d;
            font-family: monospace;
            font-size: 21px;
            font-weight: bold;
        }

        .description {
            margin: 25px 10px;
            line-height: 1.8;
            color: #795366;
        }

        .btn {
            display: inline-block;
            margin-top: 5px;
            padding: 14px 25px;
            background: #c13f7d;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 9px;
            transition: 0.2s;
        }

        .btn:hover {
            background: #a82e68;
        }

        @media (max-width: 600px) {
            .container {
                padding: 30px 22px;
            }

            h1 {
                font-size: 25px;
            }

            .time-box {
                font-size: 15px;
                padding: 16px;
            }

            .time {
                font-size: 17px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <h1>PHP Diproses oleh Server</h1>

    <div class="time-box">
        Waktu server:
        <span class="time"><?= htmlspecialchars($serverTime) ?></span>
    </div>

    <p class="description">
        Refresh halaman beberapa detik kemudian. Nilai berubah
        karena fungsi <code>date()</code> dijalankan ulang oleh PHP
        pada setiap request.
    </p>

    <a href="index.php" class="btn">Kembali ke Beranda</a>

</div>

</body>
</html>