<?php
require __DIR__ . '/data.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - KursusKu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff0f6;
            color: #4a2636;
            margin: 0;
            padding: 30px 15px;
        }

        .container {
            max-width: 650px;
            margin: 20px auto;
            padding: 30px;
            background: white;
            border: 1px solid #f0b6d0;
            border-radius: 15px;
            box-shadow: 0 8px 25px #c13f7d18;
        }

        h1, h2 {
            color: #a82e68;
        }

        label, legend {
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 18px;
        }

        input[type="text"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid #e5a9c4;
            border-radius: 7px;
            box-sizing: border-box;
        }

        fieldset {
            border: 1px solid #e5a9c4;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 18px;
        }

        .options label {
            display: inline-block;
            margin: 10px 12px 0 0;
            font-weight: normal;
        }

        .facility {
            background: #fff0f6;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 18px;
        }

        button, .btn {
            display: inline-block;
            padding: 12px 18px;
            border: none;
            border-radius: 8px;
            background: #c13f7d;
            color: white;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-secondary {
            background: white;
            color: #c13f7d;
            border: 1px solid #c13f7d;
        }

        button:hover, .btn:hover {
            opacity: 0.85;
        }
    </style>
</head>

<body>
<div class="container">
    <h1>Form Pendaftaran Kursus</h1>
    <p>Silakan isi data untuk mendaftar di KursusKu.</p>

    <form action="process.php" method="POST">

        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="course">Pilih Kursus</label>
            <select id="course" name="course" required>
                <option value="">-- Pilih Kursus --</option>
                <?php foreach ($courses as $code => $course): ?>
                    <option value="<?= htmlspecialchars($course['name']) ?>">
                        <?= htmlspecialchars($course['name']) ?>
                        - Rp<?= number_format($course['price'], 0, ',', '.') ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <fieldset>
            <legend>Tipe Peserta</legend>
            <div class="options">
                <label><input type="radio" name="participant_type" value="Mahasiswa" required> Mahasiswa</label>
                <label><input type="radio" name="participant_type" value="Guru"> Guru</label>
                <label><input type="radio" name="participant_type" value="Umum"> Umum</label>
            </div>
        </fieldset>

        <fieldset>
            <legend>Minat Belajar</legend>
            <div class="options">
                <?php foreach ($interestOptions as $interest): ?>
                    <label>
                        <input type="checkbox" name="interests[]"
                               value="<?= htmlspecialchars($interest) ?>">
                        <?= htmlspecialchars($interest) ?>
                    </label>
                <?php endforeach; ?>
            </div>
        </fieldset>

        <div class="form-group">
            <label for="method">Metode Belajar</label>
            <select name="method" id="method" required>
                <option value="">-- Pilih Metode --</option>
                <option value="online">Online</option>
                <option value="offline">Tatap Muka</option>
                <option value="hybrid">Hybrid</option>
            </select>
        </div>

        <div class="form-group">
            <label for="package">Jumlah Paket</label>
            <select name="package" id="package" required>
                <option value="1">1 Paket</option>
                <option value="2">2 Paket</option>
                <option value="3">3 Paket</option>
            </select>
        </div>

        <div class="form-group">
            <label for="note">Catatan Tambahan</label>
            <textarea name="note" id="note" rows="3"
                      placeholder="Tulis catatan jika ada..."></textarea>
        </div>

        <div class="facility">
            <h3>Fasilitas Kursus</h3>
            <ul>
                <?php foreach ($facilities as $facility): ?>
                    <li><?= htmlspecialchars($facility) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <button type="submit">Daftar Sekarang</button>
        <a href="index.php" class="btn btn-secondary">Beranda</a>

    </form>
</div>
</body>
</html>