<?php
$registrationCourses = require __DIR__ . '/course-data.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Lab - KursusKu</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header>
    <a href="index.php">KursusKu</a>
    <nav>
        <a href="index.php">Beranda</a>
        <a href="registration.php">Daftar</a>
        <a href="history-dummy.php">History</a>
        <a href="loop-lab.php">Loop Lab</a>
    </nav>
</header>

<main class="container">
    <p>MILESTONE 6 · LOOP LAB</p>
    <h1>Daftar Kursus</h1>
    <p>Daftar kursus ditampilkan menggunakan perulangan foreach.</p>

    <div class="course-list">
        <?php foreach ($registrationCourses as $course): ?>
            <article class="course-card">
                <p><?= $course['package_total'] ?> Paket Tersedia</p>

                <h2>
                    <?= htmlspecialchars($course['name'], ENT_QUOTES, 'UTF-8') ?>
                </h2>

                <p>Fasilitas:</p>
                <ul>
                    <?php foreach ($course['facilities'] as $facility): ?>
                        <li>
                            <?= htmlspecialchars($facility, ENT_QUOTES, 'UTF-8') ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </article>
        <?php endforeach; ?>
    </div>

    <a href="registration.php">Daftar Kursus</a>
    <a href="index.php">Beranda</a>
</main>

</body>
</html>