<?php

$hargaMenu = 20000;
$jumlahPesanan = 2;

$subtotal = $hargaMenu * $jumlahPesanan;

echo "harga menu: Rp" . number_format($hargaMenu, 0, ',', '.') . PHP_EOL;
echo "jumlah pesanan: " . $jumlahPesanan . PHP_EOL;
echo "total pembayaran: Rp" . number_format($subtotal, 0, ',', '.') . PHP_EOL;

?>
