<?php

// Kelas induk Person
class Person {
    protected $name;
    protected $age;
// Konstruktor untuk menginisialisasi nama dan umur
public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
// Metode umum untuk mendapatkan nama
public function getName() {
        return $this->name;
    }
// Metode umum untuk mendapatkan umur
public function getAge() {
        return $this->age;
    }
// Metode getRole yang akan dioverride oleh kelas anak
public function getRole() {
        return "Person";
    }
}
// Kelas Dosen yang mewarisi dari Person
class Dosen extends Person {
    private $nidn; // Atribut NIDN yang dienkapsulasi
// Konstruktor untuk inisialisasi Dosen
public function __construct($name, $age, $nidn) {
        parent::__construct($name, $age); // Memanggil konstruktor kelas induk
        $this->nidn = $nidn;
    }
// Metode untuk mendapatkan NIDN
public function getNidn() {
        return $this->nidn;
    }
// Override metode getRole untuk peran Dosen
public function getRole() {
        return "Dosen";
    }
}
// Kelas Mahasiswa yang mewarisi dari Person
class Mahasiswa extends Person {
    private $nim; // Atribut NIM yang dienkapsulasi
    // Konstruktor untuk inisialisasi Mahasiswa
 public function __construct($name, $age, $nim) {
        parent::__construct($name, $age); // Memanggil konstruktor kelas induk
        $this->nim = $nim;
    }
// Metode untuk mendapatkan NIM
public function getNim() {
        return $this->nim;
    }
// Override metode getRole untuk peran Mahasiswa
public function getRole() {
        return "Mahasiswa";
    }
}
// Kelas abstrak Jurnal
abstract class Jurnal {
    // Metode abstrak untuk mengelola pengajuan jurnal
    abstract public function manageJurnal();
}

// Kelas JurnalDosen yang mewarisi Jurnal
class JurnalDosen extends Jurnal {
    public function manageJurnal() {
        return "Jurnal dosen diajukan dan dikelola oleh bagian dosen.";
    }
}

// Kelas JurnalMahasiswa yang mewarisi Jurnal
class JurnalMahasiswa extends Jurnal {
    public function manageJurnal() {
        return "Jurnal mahasiswa diajukan dan dikelola oleh bagian mahasiswa.";
    }
}

// Contoh penggunaan
$dosen = new Dosen("Dr. Bambang", 45, "123456789");
$mahasiswa = new Mahasiswa("Alva", 20, "230202039");

echo $dosen->getName() . " adalah seorang " . $dosen->getRole() . " dengan NIDN: " . $dosen->getNidn() . "<br>";
echo $mahasiswa->getName() . " adalah seorang " . $mahasiswa->getRole() . " dengan NIM: " . $mahasiswa->getNim() . "<br>";

// Pengelolaan jurnal
$jurnalDosen = new JurnalDosen();
$jurnalMahasiswa = new JurnalMahasiswa();

echo $jurnalDosen->manageJurnal() . "<br>";
echo $jurnalMahasiswa->manageJurnal();
?>
