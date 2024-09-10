# Jobsheet 1
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

### B. Encapsulation
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
### C. Inheritance
### 1). Definisi Kelas 
```sh
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}
```
- Properti protected $nama: Properti ini dapat diakses oleh kelas itu sendiri dan kelas turunan (subclass).
- Konstruktor: Menginisialisasi nilai properti nama saat objek Pengguna dibuat.
- Metode getNama: Mengembalikan nilai dari properti nama.
### 2). Definisi class Dosen
```sh
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
```
- Kelas Dosen adalah turunan dari kelas Pengguna: Kelas ini mewarisi properti dan metode dari Pengguna.
- Properti private $matakuliah: Hanya dapat diakses di dalam kelas Dosen.
- Konstruktor: Menginisialisasi properti nama menggunakan konstruktor parent (Pengguna) dan matakuliah untuk objek Dosen.
- Metode getmatakuliah: Mengembalikan nilai dari properti matakuliah.
### 3). Instansiasi dan Penggunaan class
```sh
$pengguna1 = new Dosen("Abdau", "Andi P");
echo $pengguna1->getNama();
echo $pengguna1->getmatakuliah();
```
- Objek Dosen dibuat dengan nama "Abdau" dan mata kuliah "Andi P": Ini menggunakan konstruktor kelas Dosen yang juga memanggil konstruktor parent.
- getNama dipanggil: Menampilkan nilai nama yang diwarisi dari kelas Pengguna.
- getmatakuliah dipanggil: Menampilkan nilai matakuliah yang didefinisikan di kelas Dosen.

### D. Polymorphism
### 1). Definisi Kelas Pengguna
```sh
class Pengguna {
    protected $nama, $nim, $nip;
    
    public function aksesFitur() {
        echo "Akses fitur pengguna <br>";
    }
    public function getNama() {
        return $this->nama;
    }
    public function setNama($nama) {
        $this->nama = $nama;
    }
}
```
- Properti protected $nama, $nim, $nip: Dapat diakses oleh kelas itu sendiri dan kelas turunan.
- Metode aksesFitur: Menampilkan pesan umum untuk pengguna.
- Getter dan Setter untuk nama.
### 2). Definisi Kelas Dosen
```sh
class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Akses fitur Dosen: " .$this->getNama(). "<br>";
    }
}
```
Metode aksesFitur: Menampilkan pesan khusus untuk dosen dengan nama yang diambil dari metode getNama.
### 3). Definisi Kelas Mahasiswa
```sh
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Akses fitur Mahasiswa: " .$this->getNama(). " <br>";
    }
}
```
Metode aksesFitur: Menampilkan pesan khusus untuk mahasiswa dengan nama yang diambil dari metode getNama.
### 4). Instansiasi dan Penggunaan Kelas
```sh
$pengguna = new Pengguna();
$pengguna->aksesFitur();

$dosen = new Dosen();
$dosen->setNama("Pak Abdau");
$dosen->aksesFitur();

$mahasiswa = new Mahasiswa();
$mahasiswa->setNama("Alva");
$mahasiswa->aksesFitur();
```
- Objek Pengguna: Memanggil aksesFitur menampilkan pesan umum.
- Objek Dosen: Mengatur nama dengan setNama dan memanggil aksesFitur untuk menampilkan pesan khusus dosen.
- Objek Mahasiswa: Mengatur nama dengan setNama dan memanggil aksesFitur untuk menampilkan pesan khusus mahasiswa.
### E. Abstraction
### 1). Definisi Kelas Pengguna (Abstrak):
```sh
abstract class Pengguna {
    protected $nama, $nim, $nip;

    abstract public function aksesFitur();

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }
}
```
- Kelas Pengguna adalah kelas abstrak: Tidak dapat diinstansiasi secara langsung.
- Properti protected $nama, $nim, $nip: Dapat diakses oleh kelas itu sendiri dan kelas turunan.
- Metode aksesFitur adalah metode abstrak: Harus diimplementasikan oleh kelas turunan.
- Getter dan Setter untuk nama.
### 2). Definisi Kelas Dosen
```sh
class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Akses fitur Dosen: " .$this->getNama(). "<br>";
    }
}
```
Kelas Dosen mengimplementasikan metode aksesFitur: Menampilkan pesan khusus untuk dosen.
### 3). Definisi Kelas Mahasiswa
```sh
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Akses fitur Mahasiswa: " .$this->getNama(). " <br>";
    }
}
```
Kelas Mahasiswa mengimplementasikan metode aksesFitur: Menampilkan pesan khusus untuk mahasiswa
### 4). Instansiasi dan Penggunaan Kelas
```sh
$dosen = new Dosen();
$dosen->setNama("Pak Abdau");
$dosen->aksesFitur();

$mahasiswa = new Mahasiswa();
$mahasiswa->setNama("Alva");
$mahasiswa->aksesFitur();
```
- Objek Dosen dibuat: Nama diatur dengan setNama dan aksesFitur menampilkan pesan khusus untuk dosen.
- Objek Mahasiswa dibuat: Nama diatur dengan setNama dan aksesFitur menampilkan pesan khusus untuk mahasiswa.

# 📎 Lampiran
berikut merupakan script koding beserta outputnya :
- class dan objek
  
![alt](https://github.com/AlvaRezal123/P.WEB2/blob/main/JobSheet1/classandobject.PNG)
- output
  
![alt](https://github.com/AlvaRezal123/P.WEB2/blob/main/JobSheet1/11.PNG)

- Encapulasi
  
![alt](https://github.com/AlvaRezal123/P.WEB2/blob/main/JobSheet1/encapulasi.PNG)
- Output

![alt](https://github.com/AlvaRezal123/P.WEB2/blob/main/JobSheet1/22.PNG)

- Interhance
  
![alt](https://github.com/AlvaRezal123/P.WEB2/blob/main/JobSheet1/interhance.PNG)
- Output
  
![alt](https://github.com/AlvaRezal123/P.WEB2/blob/main/JobSheet1/33.PNG)

- Polymorpsh
  
![alt](https://github.com/AlvaRezal123/P.WEB2/blob/main/JobSheet1/polymorpsh.PNG)
- Output
  
![alt](https://github.com/AlvaRezal123/P.WEB2/blob/main/JobSheet1/44.PNG)

- Abstraction
  
![alt](https://github.com/AlvaRezal123/P.WEB2/blob/main/JobSheet1/abstraction.PNG)
- Output
  
![alt](https://github.com/AlvaRezal123/P.WEB2/blob/main/JobSheet1/55.PNG)





