<?php
// Membuat array 2 dimensi 3x3 berisi angka acak 1–9
$angka = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $angka[$i][$j] = rand(1, 9); // menghasilkan angka acak 1–9
    }
}

// Cetak array dalam bentuk matriks (seperti tabel)
echo "<h3>Matriks 3x3 (Angka Acak 1–9):</h3>";
$total = 0;
echo "<table border='1' cellpadding='8' cellspacing='0'>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td align='center'>" . $angka[$i][$j] . "</td>";
        $total += $angka[$i][$j]; // menjumlahkan semua elemen
    }
    echo "</tr>";
}
echo "</table>";

// Tampilkan jumlah total semua elemen
echo "<br><b>Jumlah total semua elemen: $total</b>";
?>
