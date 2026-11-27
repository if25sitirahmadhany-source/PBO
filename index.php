<?php

//panggil file propertyconstant
require('./PropertyConstan.php');

use PBO\Marketplace\produk;

//object
$produk = new produk();

$produk->setKode('p0001')
       ->setNama('Laptop')
       ->setHarga(10000000)
       ->setStok(5);

//hasil
echo "produk: ". $produk->getNama();
echo "<br/>";

echo "harga: Rp. ". $produk->getHarga();
echo "<br/>";

echo "stok: ". $produk->getStok();
echo "<br/>";

echo "pajak: ". $produk->pajak() ."%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: Rp. ". $produk->total();