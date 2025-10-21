<?php
class BukuView {
    public static function show($dataBuku) {
        echo "<h2>Daftar Buku Perpustakaan</h2>";
        echo "<hr>";

        foreach ($dataBuku as $index => $buku) {
            echo "<b>Buku ke-" . ($index + 1) . "</b><br>";
            echo "Judul       : " . $buku->judul . "<br>";
            echo "Pengarang   : " . $buku->pengarang . "<br>";
            echo "Tahun Terbit: " . $buku->tahun_terbit . "<br><br>";
        }
    }
}
?>

