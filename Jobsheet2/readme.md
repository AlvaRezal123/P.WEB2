# JobSheet 2
_Pengguna Konsep Kelas dan Objek dalam PHP_

## 📚 Pembahasan

### 1). Mendefinisikan class Dosen
```sh
class Dosen {
```
Kode ini mendefinisikan kelas Dosen, yang merupakan blueprint untuk objek Dosen.

### 2). Properti Publik
```sh
public $nama;
public $nip;
public $matakuliah;
```
Tiga properti publik dideklarasikan untuk menyimpan informasi nama, nip, dan matakuliah.
### 3). Konstruktor
``` sh
public function __construct($nama, $nip, $matakuliah) {
    $this->nama = $nama;
    $this->nip = $nip;
    $this->matakuliah = $matakuliah;
}
```
Konstruktor ini menginisialisasi nilai properti saat objek Dosen dibuat.
### 4). Metode tampilkandosen
```sh
public function tampilkandosen() {
    return "$this->nama bernomorkan NIP $this->nip yang mengajar mata kuliah $this->matakuliah";
}
```
Metode ini mengembalikan string yang menampilkan informasi tentang dosen.

### 5). Instansiasi dan Penggunaan Kelas
```sh
$Dosen1 = new Dosen("Abdau", "230202039", "Pweb2");
echo $Dosen1->tampilkandosen();
```
Objek Dosen baru ($Dosen1) dibuat dengan nama "Abdau", NIP "230202039", dan matakuliah "Pweb2". Kemudian, metode tampilkandosen dipanggil untuk menampilkan informasi dosen tersebut.

### 6). Metode meng-update jurusan
```sh
public function updatejurusan() {
    $this->jurusan = $jurusan;
}
```
 menerima parameter $jurusan untuk memperbarui nilai properti jurusan.
 ### 7). Metode getNim
```sh
public function getNim() {
    return $this->nim;
}
```
Metode ini mengembalikan nilai dari properti nim.Metode ini mengembalikan nilai dari properti nim.
### 8). Metode setNim
```sh
public function setNim($nim) {
    $this->nim = $nim;
}
```
Metode ini menerima parameter $nim dan mengatur nilai properti nim dengan parameter tersebut.
### 9). Instansiasi dan Penggunaan Kelas
```sh
$baru = new Mahasiswa("Muhammad Alva Rezal", "230202039", "Komputer dan Bisnis");
$baru->setNim("1234");
echo $baru->tampilkandata();
```
- Sebuah objek baru Mahasiswa dibuat dengan nama "Muhammad Alva Rezal", NIM "230202039", dan jurusan "Komputer dan Bisnis".
  
- Metode setNim dipanggil untuk mengubah NIM objek menjadi "1234".
  
- Metode tampilkandata dipanggil untuk menampilkan data mahasiswa. (Pastikan metode tampilkandata ada di dalam kelas Mahasiswa).



## 📎 Lampiran
_berikut lampiran dari kodingan beserta hasil output nya_

### - Intruksi

💻 Kodingan

![alt text](https://github.com/AlvaRezal123/P.WEB2/blob/main/Jobsheet2/kodingan2.PNG)

📊 Output
![alt text](https://github.com/AlvaRezal123/P.WEB2/blob/main/Jobsheet2/otput2.PNG)
### - Tugas

💻 Kodingan

![alt text](https://github.com/AlvaRezal123/P.WEB2/blob/main/Jobsheet2/Kodingan.PNG)

📊 Output
  
![alt text](https://github.com/AlvaRezal123/P.WEB2/blob/main/Jobsheet2/uotput.PNG)


