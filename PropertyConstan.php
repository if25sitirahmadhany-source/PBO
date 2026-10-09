<?php

class produk{

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //contant
    public const PAJAK = 0.11;

}

//object
$produk = new produk();

$produk->kode = 'f2508';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung pajak
$pajak = produk::PAJAK * 100; //11
$jumlahpajak = $produk->harga * produk::PAJAK; //1.1 juta

//total
$total = $produk->harga + $jumlahpajak; //11.1 juta 

//hasil
echo "produk: ". $produk->nama;
echo "<br/>";

echo "harga: Rp. ". $produk->harga;
echo "<br/>";

echo "stok: ". $produk->stok;
echo "<br/>";

echo "pajak: ". $pajak ."%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: Rp. ". $total;