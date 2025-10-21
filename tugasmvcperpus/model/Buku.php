<?php
class Buku {
    public $judul;
    public $pengarang;
    public $tahun_terbit;

    public function __construct($judul, $pengarang, $tahun_terbit) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->tahun_terbit = $tahun_terbit;
    }

    // Data buku disimpan di sini (simulasi database)
    public static function getAllBuku() {
        return [
            new Buku("Dilan 1990", "Pidi Baiq", 2014),
            new Buku("One Piece", "Eiichiro Oda", 1997),
            new Buku("Cantik Itu Luka", "Eka Kurniawan", 2002)
        ];
    }
}
?>
