<?php
echo "MEMBUAT FUNGSI <br>";

// Fungsi tanpa parameter
function berhasil() {
    echo "SELAMAT ANDA BERHASIL";
}

function gagal() {
    echo "MAAF ANDA GAGAL";
}

$nilai = 90;
if ($nilai >= 75) {
    berhasil();
} else {
    gagal();
}

echo "<br><br>";

// Fungsi dengan parameter
echo "FUNGSI DENGAN PARAMETER<br>";

function jumlah($a, $b) { // fungsi dengan 2 parameter
    return $a + $b; // nilai kembali (return value)
}

$nilai1 = 10;
$nilai2 = 15;
echo "Hasil penjumlahan: " . jumlah($nilai1, $nilai2); // passing parameter

echo "<br><br>";

// F
