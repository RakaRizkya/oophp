<?php

class Produk {
    public $judul,
    $penulis,
    $penerbit,
    $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->judul";
    }
}

//$produk1 = new Produk();
//$produk1->judul = "Naruto";
//var_dump ($produk1);
//
//$produk2 = new Produk();
//$produk2->judul = "UNCHARTED";
//var_dump($produk2->judul);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = "30000";

echo "Komik : $produk3->penulis, $produk3->judul";
echo "</br>";
echo $produk3->getLabel();

echo "<hr>";
$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Duckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = "250000";

echo "Game: " . $produk4->getLabel();
