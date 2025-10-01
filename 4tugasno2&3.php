<?php
// Mengambil informasi tanggal sekarang
$tanggal = getdate();

// Menampilkan dalam format dd-mm-yyyy
echo "Tanggal sekarang: " . $tanggal['mday'] . "-" . $tanggal['mon'] . "-" . $tanggal['year'];

// Menampilkan tanggal sekarang dengan format d-F-Y
echo "Tanggal sekarang: " . date('d-F-Y');
?>
