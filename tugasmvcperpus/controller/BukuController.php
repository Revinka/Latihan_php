<?php
require_once 'Model/Buku.php';
require_once 'View/BukuView.php';

class BukuController {
    public function tampilkanBuku() {
        // ambil data dari model
        $dataBuku = Buku::getAllBuku();
        // kirim data ke view
        BukuView::show($dataBuku);
    }
}
?>
