<?php
require_once 'products.php';
require_once 'functions.php';
$totalNilaiStok = hitungTotalNilaiStok($products);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistem Manajemen Produk Kopi</title>
<style>
*{box-sizing:border-box} body{font-family:Arial,sans-serif;background:#f5eee6;margin:0;padding:30px;color:#3e2723}.container{max-width:1100px;margin:auto}h1{text-align:center}.info{background:#fff;padding:20px;margin:20px 0;border-radius:12px;box-shadow:0 3px 10px #0002}.total{color:#6f4e37;font-size:26px;font-weight:bold}.table-container{overflow-x:auto}table{width:100%;border-collapse:collapse;background:#fff;box-shadow:0 3px 10px #0002}th{background:#6f4e37;color:#fff;padding:13px;text-align:left}td{padding:13px;border-bottom:1px solid #ddd}.stok-kritis{background:#ffd6d6!important;color:#a40000;font-weight:bold}.badge{display:inline-block;padding:5px 10px;border-radius:6px;background:#198754;color:#fff}.badge-kritis{background:#dc3545}@media(max-width:768px){body{padding:10px}table{font-size:13px}th,td{padding:9px}}
</style></head>
<body><div class="container">
<h1>☕ Sistem Manajemen Data Produk Kopi</h1>
<div class="info"><h2>Total Nilai Aset Stok Kopi</h2><p class="total"><?= formatRupiah($totalNilaiStok); ?></p><p>Total aset dihitung berdasarkan harga produk dikalikan jumlah stok.</p></div>
<div class="table-container"><table><thead><tr><th>ID</th><th>Nama Kopi</th><th>Kategori</th><th>Harga</th><th>Stok</th><th>Deskripsi</th></tr></thead><tbody>
<?php foreach ($products as $product): ?>
<tr class="<?= stokKritis($product['stok']) ? 'stok-kritis' : ''; ?>"><td><?= htmlspecialchars($product['id']); ?></td><td><?= htmlspecialchars($product['nama']); ?></td><td><?= htmlspecialchars($product['kategori']); ?></td><td><?= formatRupiah($product['harga']); ?></td><td><?php if(stokKritis($product['stok'])): ?><span class="badge badge-kritis"><?= $product['stok']; ?> - KRITIS</span><?php else: ?><span class="badge"><?= $product['stok']; ?></span><?php endif; ?></td><td><?= htmlspecialchars($product['deskripsi']); ?></td></tr>
<?php endforeach; ?>
</tbody></table></div></div></body></html>
