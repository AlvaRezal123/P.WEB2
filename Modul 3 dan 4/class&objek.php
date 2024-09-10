<?php

// Definisi Kelas
class Mobil {
// Atribut atau Properties
public $merk;
public $warna;

// Constructor
public function __construct($merk, $warna) {
$this->merk = $merk;
$this->warna = $warna;
}

public function deskripsi() {
    return "mobil ini adalah $this->merk yang berwarna $this->warna.";
}
}
 $mobilbaru = new Mobil ("toyota","hitam");
 echo $mobilbaru->deskripsi();
 ?>