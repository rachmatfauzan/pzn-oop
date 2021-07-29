<?php 

class Produk{
    const AUTHOR = "Sandhika Galih Channel";

    var string $judul,
                $penulis,
                $harga;

    // construct
     function __construct($judul, $penulis, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->harga = $harga;
     }

     function getInfoProduct(){
        return "Judul : {$this->judul} | Penerbit: {$this->penulis} | Harga : RP. {$this->harga}" . PHP_EOL;
    }
}


// overiding getInfoProduct -> menambahkan dengan parrent::(nama method)
class Bisnis extends Produk{
    function getInfoProduct(){
        return "Buku :" . parent::getInfoProduct();
    }
}
class Tutor extends Produk{
    function getInfoProduct(){
        return "Tutorial :" . parent::getInfoProduct();
    }
}


$produk1 = new Bisnis("Bisnis Online", "Rakfhmat Makmur", "93000");
echo $produk1->getInfoProduct();

$produk2 = new Tutor("Adobe XD Tutor", "Steven Jobs", "293000");
echo $produk2->getInfoProduct();





?>