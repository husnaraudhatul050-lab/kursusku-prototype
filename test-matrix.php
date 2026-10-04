<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Test Matrix - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<main class="test-page">

    <div class="test-container">

        <div class="test-header">

            <p class="milestone">
                PERTEMUAN 6
            </p>

            <h1>
                Test Matrix KursusKu
            </h1>

            <p>
                Pengujian form pendaftaran, perhitungan biaya,
                ringkasan, dan history.
            </p>

        </div>


        <div class="test-card">

            <table class="test-table">

                <thead>

                    <tr>

                        <th>No</th>

                        <th>Skenario Pengujian</th>

                        <th>Hasil yang Diharapkan</th>

                        <th>Status</th>

                    </tr>

                </thead>


                <tbody>

                    <tr>

                        <td>01</td>

                        <td>
                            Mahasiswa + Web Dasar + 1 paket
                        </td>

                        <td>
                            Total Rp 240.000
                        </td>

                        <td class="pass">
                            PASS
                        </td>

                    </tr>


                    <tr>

                        <td>02</td>

                        <td>
                            Guru + PHP Dasar + 1 paket
                        </td>

                        <td>
                            Total Rp 340.000
                        </td>

                        <td class="pass">
                            PASS
                        </td>

                    </tr>


                    <tr>

                        <td>03</td>

                        <td>
                            Umum + Laravel Dasar + 1 paket
                        </td>

                        <td>
                            Total Rp 285.000
                        </td>

                        <td class="pass">
                            PASS
                        </td>

                    </tr>


                    <tr>

                        <td>04</td>

                        <td>
                            Mahasiswa + Web Dasar + 2 paket
                        </td>

                        <td>
                            Total Rp 480.000
                        </td>

                        <td class="pass">
                            PASS
                        </td>

                    </tr>


                    <tr>

                        <td>05</td>

                        <td>
                            Nama kosong
                        </td>

                        <td>
                            Browser menahan pengiriman karena field wajib
                        </td>

                        <td class="pass">
                            PASS
                        </td>

                    </tr>


                    <tr>

                        <td>06</td>

                        <td>
                            Email tidak valid
                        </td>

                        <td>
                            Browser meminta format email yang valid
                        </td>

                        <td class="pass">
                            PASS
                        </td>

                    </tr>


                    <tr>

                        <td>07</td>

                        <td>
                            Tidak memilih minat
                        </td>

                        <td>
                            "Belum memilih minat." tampil tanpa warning
                        </td>

                        <td class="pass">
                            PASS
                        </td>

                    </tr>


                    <tr>

                        <td>08</td>

                        <td>
                            Memilih 3 minat
                        </td>

                        <td>
                            Frontend, Backend, dan Database tampil di ringkasan
                        </td>

                        <td class="pass">
                            PASS
                        </td>

                    </tr>


                    <tr>

                        <td>09</td>

                        <td>
                            Metode Offline
                        </td>

                        <td>
                            Offline tampil di ringkasan
                        </td>

                        <td class="pass">
                            PASS
                        </td>

                    </tr>


                    <tr>

                        <td>10</td>

                        <td>
                            Metode Hybrid
                        </td>

                        <td>
                            Hybrid tampil di ringkasan
                        </td>

                        <td class="pass">
                            PASS
                        </td>

                    </tr>


                    <tr>

                        <td>11</td>

                        <td>
                            PHP Dasar dipilih
                        </td>

                        <td>
                            Jumlah paket tersedia dari 1 sampai 3
                        </td>

                        <td class="pass">
                            PASS
                        </td>

                    </tr>


                    <tr>

                        <td>12</td>

                        <td>
                            Fasilitas kursus
                        </td>

                        <td>
                            Modul digital, Sertifikat penyelesaian,
                            dan Forum diskusi kelas tampil
                        </td>

                        <td class="pass">
                            PASS
                        </td>

                    </tr>

                </tbody>

            </table>


            <div class="test-note">

                <strong>Catatan:</strong>

                Pengujian menyesuaikan form pendaftaran,
                perhitungan biaya, diskon berdasarkan tipe peserta,
                ringkasan pendaftaran, history, minat belajar,
                metode belajar, jumlah paket, dan fasilitas
                pada proyek KursusKu.

            </div>

        </div>


        <div class="button-area">

            <a
                href="registration.php"
                class="btn-primary">

                Daftar Kursus

            </a>


            <a
                href="history.php"
                class="btn-secondary">

                History

            </a>


            <a
                href="index.php"
                class="btn-secondary">

                Beranda

            </a>

        </div>

    </div>

</main>

</body>

</html>