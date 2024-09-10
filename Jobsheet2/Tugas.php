<?php

class Dosen {
   public $nama;
   public $nip;
   public $matakuliah;

public function __construct($nama,$nip,$matakuliah) {
    $this->nama = $nama;
    $this->nip = $nip;
    $this->matakuliah = $matakuliah;
}
public function tampilkandosen() {
    return "$this->nama bernomorkan NIP $this->nip yang mengajar mata kuliah $this->matakuliah";

}
}
$Dosen1 = new Dosen ("Abdau","230202039","Pweb2");
echo $Dosen1->tampilkandosen();
?>