<?php
// Fungsi untuk menentukan bilangan terbesar dari 2 bilangan
function bilanganTerbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Contoh penggunaan
$angka1 = 100;
$angka2 = 150;

echo "Bilangan 1 = $angka1 <br>";
echo "Bilangan 2 = $angka2 <br>";
echo "Bilangan terbesar adalah: " . bilanganTerbesar($angka1, $angka2);
?>
