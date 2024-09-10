#Jobsheet 1
_Mengidentifikasi dan Menjelaskan Prinsip Dasar OOP_
## 📖 Pendahuluan
Dalam OOP, konsep dasar seperti class dan object digunakan untuk memodelkan masalah dunia nyata ke dalam kode program. Prinsip-
prinsip dasar OOP termasuk Encapsulation, Inheritance, Polymorphism, dan Abstraction yang memungkinkan kode lebih modular, terstruktur, dan mudah dipelihara.

## 📚 Pembahasan
terdapa beberapa script yang menjelaskan prinsip dasar OOP yang mencangkup (Encapsulation, Inheritance, Polymorphism, dan Abstraction) seperti :
### A. Class dan Object
### 1). Definisi class Mahasiswa
```sh
class mahasiswa {
```
Kode ini mendefinisikan kelas mahasiswa, yang merupakan blueprint untuk objek mahasiswa.
### 2). Properti Publik
```sh
public $nama;
public $nim;
public $jurusan;
```
Tiga properti publik dideklarasikan untuk menyimpan informasi nama, nim, dan jurusan.
### 3). Konstruktor
```sh
public function __construct($nama, $nim, $jurusan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
}
```
Konstruktor ini menginisialisasi nilai properti saat objek mahasiswa dibuat.

### 4). Metode Tampilkan Data
```sh
public function tampilkanData() {
    return "nama: $this->nama, nim: $this->nim, jurusan: $this->jurusan";
}
```
Metode ini mengembalikan string yang menampilkan informasi nama, NIM, dan jurusan mahasiswa.
### 5). Instansiasi dan Penggunaan Kelas
```sh
$mahasiswa1 = new mahasiswa("Muhammad Alva Rezal", "230202039", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData();
```
- Objek mahasiswa baru ($mahasiswa1) dibuat dengan nama "Muhammad Alva Rezal", NIM "230202039", dan jurusan "Komputer dan Bisnis".
- Metode tampilkanData dipanggil untuk menampilkan informasi mahasiswa.

### B.Encapsulation
### 1). Properti Privat
```sh
private $nama;
private $nim;
private $jurusan;
```
Tiga properti privat ($nama, $nim, $jurusan) dideklarasikan, yang hanya bisa diakses melalui metode dalam kelas ini.
### 2). Getter dan Setter:
```sh
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

```
Getter dan setter untuk properti nama, nim, dan jurusan.
### 3). Menampilkan Data
```sh
public function tampilkandata() {
    echo "nama = ". $this->getnama(). "<br>";
    echo "nim = ". $this->getnim(). "<br>";
    echo "jurusan = ". $this->getjurusan(). "<br>";
}
```
Metode ini menampilkan data mahasiswa dengan menggunakan metode getter.
### 4). Instansiasi dan Pengunaan Kelas
```sh
$mahasiswa1 = new mahasiswa("Muhammad Alva Rezal", "230202039", "Komputer dan Bisnis");
$mahasiswa1->setnama("Alva");
$mahasiswa1->tampilkandata();
```
- Objek mahasiswa baru ($mahasiswa1) dibuat dengan nama "Muhammad Alva Rezal", NIM "230202039", dan jurusan "Komputer dan Bisnis".
- Nama mahasiswa diubah menjadi "Alva" menggunakan metode setnama.
- Metode tampilkandata dipanggil untuk menampilkan data mahasiswa yang telah diperbarui.


