<?php
// Membuat array asosiatif multidimensi berisi data 3 produk
$produk = [
    [
        "nama" => "Smartphone X10",
        "kategori" => "Elektronik",
        "harga" => 3500000,
        "rating" => 4.7
    ],
    [
        "nama" => "Headphone Pro",
        "kategori" => "Aksesoris",
        "harga" => 1200000,
        "rating" => 4.5
    ],
    [
        "nama" => "Laptop UltraBook",
        "kategori" => "Elektronik",
        "harga" => 7200000,
        "rating" => 4.9
    ]
];

// Mencari produk dengan harga tertinggi
$tertinggi = $produk[0];
for ($i = 1; $i < count($produk); $i++) {
    if ($produk[$i]["harga"] > $tertinggi["harga"]) {
        $tertinggi = $produk[$i];
    }
}

// Menampilkan produk dengan harga tertinggi
echo "<h3>Produk dengan Harga Tertinggi:</h3>";
echo "Nama Produk : " . $tertinggi["nama"] . "<br>";
echo "Kategori    : " . $tertinggi["kategori"] . "<br>";
echo "Harga       : Rp " . number_format($tertinggi["harga"], 0, ',', '.') . "<br>";
echo "Rating      : " . $tertinggi["rating"];
?>
