<?php
// Membuat array 2 dimensi berisi data 3 siswa
$siswa = [
    ["Ani", 85, 90],  // [Nama, Nilai Matematika, Nilai Bahasa]
    ["Budi", 78, 88],
    ["Citra", 92, 80]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa dari siswa ke-2 (" . $siswa[1][0] . ") adalah: " . $siswa[1][2];
echo "<br><br>";

// Cetak semua data menggunakan looping
echo "<h3>Data Semua Siswa:</h3>";
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i][0] . "<br>";
    echo "Nilai Matematika: " . $siswa[$i][1] . "<br>";
    echo "Nilai Bahasa: " . $siswa[$i][2] . "<br><br>";
}
?>
