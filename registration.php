<?php

require_once __DIR__ . '/helpers.php';

/*
|--------------------------------------------------------------------------
| Data Kursus
|--------------------------------------------------------------------------
*/

$courses = [
    [
        'code' => 'WEB-01',
        'name' => 'Web Dasar',
        'fee' => 300000
    ],
    [
        'code' => 'PHP-01',
        'name' => 'PHP Dasar',
        'fee' => 400000
    ],
    [
        'code' => 'PHP-02',
        'name' => 'PHP Lanjutan',
        'fee' => 300000
    ],
    [
        'code' => 'LAR-01',
        'name' => 'Laravel Dasar',
        'fee' => 500000
    ],
    [
        'code' => 'DB-01',
        'name' => 'MySQL Dasar',
        'fee' => 275000
    ],
    [
        'code' => 'UI-01',
        'name' => 'UI Web Dasar',
        'fee' => 225000
    ]
];

?>

<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        Daftar Kursus - KursusKu
    </title>

    <link
        rel="stylesheet"
        href="assets/css/style.css">

</head>


<body>


<main class="registration-page">


    <div class="registration-container">


        <!-- JUDUL -->

        <div class="registration-header">

            <p class="milestone">
                MILESTONE 6 • FORM LANJUTAN
            </p>

            <h1>
                Daftar Kursus
            </h1>

            <p>
                Alur: landing page → form → proses PHP → ringkasan.
                Belum memakai database.
            </p>

        </div>



        <!-- FORM -->

        <form
            action="process-registration.php"
            method="POST"
            class="registration-form">


            <!-- NAMA + EMAIL -->

            <div class="form-row">


                <div class="form-group">

                    <label>
                        Nama lengkap
                    </label>

                    <input
                        type="text"
                        name="name"
                        required>

                </div>


                <div class="form-group">

                    <label>
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        required>

                </div>


            </div>



            <!-- PILIH KURSUS -->

            <div class="form-group">

                <label>
                    Pilih kursus
                </label>

                <select
                    name="course"
                    required>

                    <option value="">
                        -- Pilih kursus --
                    </option>


                    <?php foreach ($courses as $course): ?>

                        <option
                            value="<?= htmlspecialchars($course['name']) ?>">

                            <?= htmlspecialchars($course['name']) ?>

                            -
                            Rp<?= number_format(
                                $course['fee'],
                                0,
                                ',',
                                '.'
                            ) ?>

                        </option>

                    <?php endforeach; ?>

                </select>

            </div>



            <!-- TIPE PESERTA -->

            <fieldset>

                <legend>
                    Tipe peserta
                </legend>


                <div class="radio-group">


                    <label>

                        <input
                            type="radio"
                            name="participant_type"
                            value="Mahasiswa"
                            required>

                        Mahasiswa

                    </label>


                    <label>

                        <input
                            type="radio"
                            name="participant_type"
                            value="Guru">

                        Guru

                    </label>


                    <label>

                        <input
                            type="radio"
                            name="participant_type"
                            value="Umum">

                        Umum

                    </label>


                </div>

            </fieldset>



            <!-- MINAT BELAJAR -->

            <fieldset>

                <legend>
                    Minat belajar
                </legend>


                <div class="checkbox-group">


                    <label>

                        <input
                            type="checkbox"
                            name="interests[]"
                            value="Frontend">

                        Frontend

                    </label>


                    <label>

                        <input
                            type="checkbox"
                            name="interests[]"
                            value="Backend">

                        Backend

                    </label>


                    <label>

                        <input
                            type="checkbox"
                            name="interests[]"
                            value="Database">

                        Database

                    </label>


                    <label>

                        <input
                            type="checkbox"
                            name="interests[]"
                            value="UI/UX">

                        UI/UX

                    </label>


                </div>

            </fieldset>



            <!-- METODE + PAKET -->

            <div class="form-row">


                <div class="form-group">

                    <label>
                        Metode belajar
                    </label>

                    <select
                        name="method"
                        required>

                        <option value="">
                            -- Pilih metode --
                        </option>

                        <option value="Online">
                            Online
                        </option>

                        <option value="Offline">
                            Offline
                        </option>

                        <option value="Hybrid">
                            Hybrid
                        </option>

                    </select>

                </div>



                <div class="form-group">

                    <label>
                        Jumlah paket
                    </label>

                    <select
                        name="package">

                        <option value="1">
                            1 paket
                        </option>

                        <option value="2">
                            2 paket
                        </option>

                        <option value="3">
                            3 paket
                        </option>

                    </select>

                </div>


            </div>



            <!-- CATATAN -->

            <div class="form-group">

                <label>
                    Catatan tambahan
                </label>

                <textarea
                    name="note"
                    rows="5"></textarea>

            </div>



            <!-- TOMBOL -->

            <div class="button-group">


                <button
                    type="submit"
                    class="btn-submit">

                    Proses Pendaftaran

                </button>


                <a
                    href="history.php"
                    class="btn-secondary">

                    History Dummy

                </a>


                <a
                    href="history.php"
                    class="btn-secondary">

                    Loop Lab

                </a>


            </div>


        </form>



        <!-- FASILITAS -->

        <div class="facilities">

            <h3>
                Fasilitas
            </h3>

            <ul>

                <li>
                    Materi pembelajaran
                </li>

                <li>
                    Sertifikat
                </li>

                <li>
                    Akses latihan
                </li>

            </ul>

        </div>


    </div>

</main>


</body>

</html>