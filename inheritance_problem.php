<?php

class Produk {
    public $judul,
    $penulis,
    $penerbit,
    $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->judul";
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk) {
        return $str = "{$produk->judul} | {$produk->getLabel()}(Rp. {$produk->harga})";
    }
}

$produk1 = new Produk("Naruto","Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

