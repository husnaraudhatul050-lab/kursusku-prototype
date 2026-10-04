AI Usage Log - Pertemuan 6

Masalah/tujuan	Saran AI	Keputusan	Hasil uji

Perhitungan biaya kursus	Gunakan harga kursus, jumlah paket, dan diskon berdasarkan tipe peserta	Diterima	Total biaya berhasil dihitung
Branching diskon	Gunakan percabangan berdasarkan tipe peserta Mahasiswa, Guru, dan Umum	Diterima	Mahasiswa 20%, Guru 15%, Umum 5%
Checkbox minat kosong	Gunakan $_POST['interests'] ?? []	Diterima	Tidak ada warning saat minat kosong
Validasi form	Gunakan atribut required pada data yang wajib diisi	Diterima	Form tidak dapat dikirim jika data wajib kosong
Penyimpanan history	Gunakan $_SESSION['history'] untuk menyimpan data pendaftaran	Diterima	Data pendaftaran tampil pada halaman history
Tampilan history	Buat tabel yang berisi Nomor, Nama, Kursus, dan Total	Diterima	History tampil dalam bentuk tabel
Ringkasan pendaftaran	Tampilkan data peserta, kursus, metode, paket, dan biaya	Diterima	Data berhasil tampil pada halaman ringkasan
Pemisahan CSS	Pindahkan CSS ke assets/css/style.css	Diterima	Tampilan menjadi lebih rapi dan mudah dikelola
Fasilitas kursus	Tampilkan Modul digital, Sertifikat penyelesaian, dan Forum diskusi	Diterima	Fasilitas tampil pada ringkasan
Navigasi halaman	Tambahkan tombol Daftar Kursus, History, dan Beranda	Diterima	Navigasi antarhalaman berhasil digunakan