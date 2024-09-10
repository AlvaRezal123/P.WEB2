<?php
// Menambah Atribut dan Metode
class Buku {
public $judul;
public $penulis;

public function __construct($judul, $penulis) {
$this->judul = $judul;
$this->penulis = $penulis;
}

public function tampilkaninfo() {
    return "Buku : $this->judul, ditulis oleh $this->penulis";
}
}
$Buku1 = new Buku ("Matahari","Alva");
echo $Buku1->tampilkaninfo();
?>