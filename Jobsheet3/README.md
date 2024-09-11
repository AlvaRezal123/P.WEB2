# JobSheet 3
_Menerapkan Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP_

## 🌟Pendahuluan
Object-Oriented Programming (OOP) dalam PHP memungkinkan pengembangan perangkat lunak yang lebih terstruktur dan modular. Konsep-konsep seperti Inheritance, Polymorphism, Encapsulation, dan Abstraction adalah pilar penting yang membuat OOP efisien. Dengan menguasai konsep-konsep ini, pengembang dapat membuat kode yang lebih fleksibel, dapat digunakan kembali, dan mudah dipelihara.

- Inheritance (Pewarisan)
adalah Mekanisme di mana sebuah kelas baru (subclass) mewarisi atribut dan metode dari kelas yang sudah ada (superclass).

Tujuan  : Menghindari duplikasi kode dan memfasilitasi penggunaan kembali kode.

Contoh  : Kelas Student mewarisi dari kelas Person, sehingga Student memiliki atribut dan metode Person.

- Polymorphism (Polimorfisme)
adalah Kemampuan objek untuk menggunakan metode yang sama dengan perilaku berbeda tergantung pada jenis objeknya.

Tujuan  : Mempermudah penggunaan metode yang sama pada objek yang berbeda.

Contoh  : Metode makeSound di kelas Dog dan Cat menghasilkan suara berbeda meski dipanggil dengan nama yang sama. 

- Encapsulation (Enkapsulasi)
adalah Prinsip menyembunyikan detail implementasi internal objek dan hanya menampilkan apa yang diperlukan melalui metode publik.

Tujuan  : Melindungi data dan mengontrol akses ke atribut objek.

Contoh  : Atribut name di kelas Person adalah privat dan hanya dapat diakses melalui metode getName dan setName.

- Abstraction (Abstraksi)
adalah Menyembunyikan detail implementasi kompleks dan hanya menampilkan fungsionalitas penting melalui antarmuka atau kelas dasar.

Tujuan  : Mengurangi kompleksitas dengan menyediakan antarmuka sederhana.

Contoh  : Kelas abstrak Shape mendefinisikan metode getArea yang harus diimplementasikan oleh kelas turunan seperti Rectangle dan Circle.
## 📚 Pembahasan
Berikut merupakan detail pembuatan projek yang disertai dengan keterangan nya ;
### 1). Class Person
```sh
class Person {
    protected $name;
    protected $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
    public function getRole() {
        return "Person";
    }
}
```
Kelas ini adalah kelas induk yang menyimpan nama dan umur seseorang. Kelas ini juga memiliki metode untuk mendapatkan nama dan umur, serta metode getRole() yang akan dioverride oleh kelas turunan.
### 2).Kelas Dosen (Turunan dari Person)
```sh
class Dosen extends Person {
    private $nidn;
    public function __construct($name, $age, $nidn) {
        parent::__construct($name, $age);
        $this->nidn = $nidn;
    }
    public function getNidn() {
        return $this->nidn;
    }
    public function getRole() {
        return "Dosen";
    }
}
```
Kelas ini menambahkan atribut nidn (Nomor Induk Dosen Nasional) dan mengoverride metode getRole() untuk mengembalikan "Dosen". Kelas ini juga menyediakan metode untuk mendapatkan NIDN.
### 3).Kelas Mahasiswa (Turunan dari Person)
```sh
class Mahasiswa extends Person {
    private $nim;
    public function __construct($name, $age, $nim) {
        parent::__construct($name, $age);
        $this->nim = $nim;
    }
    public function getNim() {
        return $this->nim;
    }
    public function getRole() {
        return "Mahasiswa";
    }
}
```
Kelas ini menambahkan atribut nim (Nomor Induk Mahasiswa) dan mengoverride metode getRole() untuk mengembalikan "Mahasiswa". Kelas ini juga menyediakan metode untuk mendapatkan NIM.
### 4). Kelas Abstrak Jurnal
```sh
abstract class Jurnal {
    abstract public function manageJurnal();
}
```
Kelas abstrak ini mendefinisikan metode abstrak manageJurnal(), yang harus diimplementasikan oleh kelas turunannya. Kelas ini tidak bisa diinstansiasi langsung.
### 5). Kelas JurnalDosen (Turunan dari Jurnal):
```sh
class JurnalDosen extends Jurnal {
    public function manageJurnal() {
        return "Jurnal dosen diajukan dan dikelola oleh bagian dosen.";
    }
}
```
Mengimplementasikan metode manageJurnal() dengan memberikan detail khusus tentang pengelolaan jurnal dosen.
### 6). Kelas JurnalMahasiswa (Turunan dari Jurnal):
```sh
class JurnalMahasiswa extends Jurnal {
    public function manageJurnal() {
        return "Jurnal mahasiswa diajukan dan dikelola oleh bagian mahasiswa.";
    }
}
```
Mengimplementasikan metode manageJurnal() dengan memberikan detail khusus tentang pengelolaan jurnal mahasiswa.
### 7). Contoh Penggunaan:
```sh
$dosen = new Dosen("Dr. Bambang", 45, "123456789");
$mahasiswa = new Mahasiswa("Alva", 20, "230202039");

echo $dosen->getName() . " adalah seorang " . $dosen->getRole() . " dengan NIDN: " . $dosen->getNidn() . "<br>";
echo $mahasiswa->getName() . " adalah seorang " . $mahasiswa->getRole() . " dengan NIM: " . $mahasiswa->getNim() . "<br>";

$jurnalDosen = new JurnalDosen();
$jurnalMahasiswa = new JurnalMahasiswa();

echo $jurnalDosen->manageJurnal() . "<br>";
echo $jurnalMahasiswa->manageJurnal();
```
Membuat objek dari kelas Dosen dan Mahasiswa, serta menampilkan nama, peran, dan ID (NIDN/NIM). Juga, membuat objek JurnalDosen dan JurnalMahasiswa untuk menampilkan detail pengelolaan jurnal.


