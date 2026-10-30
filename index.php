<?php

//panggil file propertyconstant
require('./PropertyConstan.php');

use PBO\Marketplase\produk;

//object
$produk = new produk('P0001', 'Laptop', 10000000, 5);

//hasil
echo "produk: ". $produk->nama;
echo "<br/>";

echo "harga: Rp. ". $produk->harga;
echo "<br/>";

echo "stok: ". $produk->stok;
echo "<br/>";

echo "pajak: ". $produk->PAJAK() ."%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: Rp. ". $produk->total();