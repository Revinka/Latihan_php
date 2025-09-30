<?php

// 1. Menampilkan daftar produk
echo "<h3>Kasus 1: Menampilkan Daftar Produk</h3>";
$produk = ["Mochi Coklat", "Mochi Keju", "Mochi Kacang", "Mochi Matcha"];
for ($i = 0; $i < count($produk); $i++) {
    echo ($i+1) . ". " . $produk[$i] . "<br>";
}

// 2. Menghitung rata-rata nilai mahasiswa
echo "<h3>Kasus 2: Menghitung Rata-rata Nilai</h3>";
$nilai = [80, 75, 90, 85, 70];
$total = 0;
for ($i = 0; $i < count($nilai); $i++) {
    $total += $nilai[$i];
}
$rata2 = $total / count($nilai);
echo "Nilai: " . implode(", ", $nilai) . "<br>";
echo "Rata-rata nilai = " . $rata2 . "<br>";

// 3. Simulasi login (maksimal 3 percobaan)
echo "<h3>Kasus 3: Simulasi Login</h3>";
$password_benar = "12345";
$percobaan = ["11111", "54321", "12345"]; // simulasi input user
$kesempatan = 3;
$berhasil = false;

for ($i = 0; $i < $kesempatan; $i++) {
    if ($percobaan[$i] == $password_benar) {
        echo "Login berhasil pada percobaan ke-" . ($i+1) . "<br>";
        $berhasil = true;
        break; // hentikan perulangan jika sudah benar
    } else {
        echo "Percobaan ke-" . ($i+1) . " gagal<br>";
    }
}

if (!$berhasil) {
    echo "Login gagal, akun terkunci!";
}
?>
