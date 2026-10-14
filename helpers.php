<?php  
function rupiah(int $amount): string {  
    return 'Rp ' . number_format($amount, 0, ',', '.');  
}  
  
function statusKursus(int $quota, int $registered): string {  
    return $registered >= $quota ? 'Penuh' : 'Tersedia';  
}  
  
function sisaKursi(int $quota, int $registered): int {  
    return max(0, $quota - $registered);  
}  
  
function formatTanggal(string $date): string {  
    $value = new DateTimeImmutable($date);  
    return $value->format('d-m-Y');  
}  

function getDiscountPercent(string $role): int {
    switch (strtolower($role)) {
        case 'mahasiswa':
            return 20;
        case 'umum':
            return 0;
        default:
            return 0;
    }
}
echo "<h2>Pengujian Helpers</h2>";
echo "Harga kursus: " . rupiah(350000) . "<br>";
echo "Status kursus: " . statusKursus(30, 20) . "<br>";
echo "Sisa kursi: " . sisaKursi(30, 20) . "<br>";
echo "Tanggal: " . formatTanggal('2026-10-14') . "<br>";
?>
