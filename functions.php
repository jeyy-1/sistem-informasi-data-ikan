<?php
function hitungTotalNilaiStok($products) {
    $total = 0;
    foreach ($products as $product) {
        $total += $product['harga'] * $product['stok'];
    }
    return $total;
}
function formatRupiah($angka) {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}
function stokKritis($stok) {
    return $stok < 3;
}
?>
