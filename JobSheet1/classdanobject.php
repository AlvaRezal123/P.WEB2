<?php
class mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        }
        public function tampilkanData() {
            return "nama: $this->nama, nim: $this->nim, jurusan: $this->jurusan";
            }
}
$mahasiswa1 = new mahasiswa("Muhammad Alva Rezal", "230202039","Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData();
?>