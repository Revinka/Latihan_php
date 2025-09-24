<?php
echo "<h2>Contoh Percabangan Mahasiswa Polije</h2>";

/* 1. LOGIN SISTEM AKADEMIK */
echo "<h3>1. Login Sistem Akademik</h3>";
$username = "mahasiswa";
$password = "polije";

$inputUser = "mahasiswa";
$inputPass = "polije";

if ($inputUser == $username && $inputPass == $password) {
    echo "Login berhasil. Selamat datang di Sistem Akademik Polije!<br>";
} else {
    echo "Login gagal. Username atau password salah.<br>";
}

/* 2. CEK IPK UNTUK BEASISWA */
echo "<h3>2. Cek IPK untuk Beasiswa</h3>";
$ipk = 3.6;

if ($ipk >= 3.5) {
    echo "Selamat! Anda berhak mengajukan Beasiswa Unggulan.<br>";
} elseif ($ipk >= 3.0) {
    echo "Anda bisa mengajukan Beasiswa Peningkatan Prestasi.<br>";
} else {
    echo "IPK Anda belum memenuhi syarat untuk beasiswa.<br>";
}

/* 3. CEK KEHADIRAN */
echo "<h3>3. Cek Kehadiran Mahasiswi</h3>";
$kehadiran = 72; // dalam persen

if ($kehadiran >= 80) {
    echo "Kehadiran cukup, boleh ikut UAS.<br>";
} else {
    echo "Kehadiran kurang, tidak bisa ikut UAS.<br>";
}

/* 4. CEK ROLE ORGANISASI */
echo "<h3>4. Cek Role di Organisasi Kampus</h3>";
$role = "sekretaris";

switch ($role) {
    case "ketua":
        echo "Anda bertugas memimpin organisasi.<br>";
        break;
    case "sekretaris":
        echo "Anda bertugas membuat laporan dan administrasi.<br>";
        break;
    case "bendahara":
        echo "Anda bertugas mengatur keuangan.<br>";
        break;
    default:
        echo "Anda anggota biasa.<br>";
}

/* 5. CEK BIAYA SPP */
echo "<h3>5. Cek Biaya SPP Berdasarkan Jurusan</h3>";
$jurusan = "Bisnis";

if ($jurusan == "Bisnis") {
    echo "SPP = Rp 4.000.000 per semester.<br>";
} elseif ($jurusan == "Pertanian") {
    echo "SPP = Rp 6.000.000 per semester.<br>";
} elseif ($jurusan == "Peternakan") {
    echo "SPP = Rp 6.000.000 per semester.<br>";
} else {
    echo "Jurusan tidak ditemukan.<br>";
}
?>
