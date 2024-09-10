<?php

class Mahasiswa {
   public $nama;
   public $nim;
   public $jurusan;

public function __construct($nama,$nim,$jurusan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
}
public function tampilkandata() {
    return "$this->nama bernomorkan NIP $this->nim yang mengajar mata kuliah $this->jurusan";
}
Public function updatejurusan() {
        $this->jurusan = $jurusan;
}
public function getNim() {
    return $this->nim;
}
public function setNim($nim) {
    $this->nim = $nim;
}
}
$baru = new Mahasiswa ("Muhammad Alva Rezal","230202039","Komputer dan Bisnis");
$baru->setNim("1234");
echo $baru->tampilkandata();
?>