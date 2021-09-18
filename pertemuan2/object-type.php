<?php

class Produk{
    //properti
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //method
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

//komik
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 4000);
// $produk3->judul = "Naruto";
// $produk3->penulis = "Masashi Kishimoto";
// $produk3->penerbit = "Shonen Jump";
// $produk3->harga = "4000";

//game
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 5000);
// $produk4->judul = "Uncharted";
// $produk4->penulis = "Neil Druckman";
// $produk4->penerbit = "Sony Computer";
// $produk4->harga = "5000";

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo "<br>";

$infoProduk = new CetakInfoProduk();
echo $infoProduk->cetak($produk1);
echo "<br>";
echo $infoProduk->cetak($produk2);

?>