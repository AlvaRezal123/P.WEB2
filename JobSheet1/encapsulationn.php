<?php
class mahasiswa {
private $nama;
private $nim;
private $jurusan;


public function __construct($nama, $nim, $jurusan) {
$this->nama = $nama;
$this->nim = $nim;
$this->jurusan = $jurusan;
}


public function getnama() {
return $this->nama;
}
public function setnama($nama) {
$this->nama = $nama;
}
public function getnim() {
    return $this->nim;
    }
    public function setnim($nim) {
    $this->nim = $nim;
    }
public function getjurusan() {
        return $this->jurusan;
        }
        public function setjurusan($jurusan) {
        $this->jurusan = $jurusan;
        }

public function tampilkandata() {
    echo "nama = ". $this->getnama(). "<br>";
    echo "nim = ". $this->getnim(). "<br>";
    echo "jurusan = ". $this->getjurusan(). "<br>";
    


}
}
$mahasiswa1 = new mahasiswa ("Muhammad Alva Rezal","230202039","Komputer dan Bisnis");
$mahasiswa1->setnama("Alva");
$mahasiswa1->tampilkandata();
?>
