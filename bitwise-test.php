<?php
$READ = 1;
$WRITE = 2;
$DELETE = 4;

$permission = $READ | $WRITE;

$canRead = ($permission & $READ) === $READ;
$canWrite = ($permission & $WRITE) === $WRITE;
$canDelete = ($permission & $DELETE) === $DELETE;

$results = [
    [
        'permission' => 'READ',
        'nilai' => $READ,
        'status' => $canRead
    ],
    [
        'permission' => 'WRITE',
        'nilai' => $WRITE,
        'status' => $canWrite
    ],
    [
        'permission' => 'DELETE',
        'nilai' => $DELETE,
        'status' => $canDelete
    ]
];
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Bitwise Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff0f6;
            margin: 0;
            padding: 30px;
            color: #63334b;
        }

        .utility-card {
            max-width: 750px;
            margin: 20px auto;
            background: white;
            padding: 25px;
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
            text-align: center;
        }

        th {
            background: #d14d8b;
            color: white;
        }

        tr:nth-child(even) {
            background: #fff0f6;
        }

        .yes {
            color: #198754;
            font-weight: bold;
        }

        .no {
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
        <h1>Bitwise Permission Test</h1>
        <p>Hasil pemeriksaan hak akses pengguna</p>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Hak Akses</th>
                    <th>Nilai</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $index => $result): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($result['permission']) ?></td>
                    <td><?= $result['nilai'] ?></td>
                    <td class="<?= $result['status'] ? 'yes' : 'no' ?>">
                        <?= $result['status'] ? 'Diizinkan' : 'Tidak Diizinkan' ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <p>
            Nilai permission aktif:
            <strong><?= $permission ?></strong>
        </p>

        <a href="index.php">Kembali</a>
    </main>
</body>
</html>