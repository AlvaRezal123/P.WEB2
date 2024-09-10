<?php
class Pengguna {
protected $nama;

public function __construct($nama) {
$this->nama = $nama;
}

public function getNama() {
return $this->nama;
}
}


class Dosen extends Pengguna {
private $matakuliah;


public function __construct($nama, $matakuliah) {
parent::__construct($nama);
$this->matakuliah = $matakuliah;
}
public function getmatakuliah() {
return $this->matakuliah;


}
}
$pengguna1 = new Dosen("Abdau", "Andi P");
echo $pengguna1->getNama(); 
echo $pengguna1->getmatakuliah();
?>