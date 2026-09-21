# Sistem Informasi Data Ikan

## Deskripsi

Sistem Informasi Data Ikan adalah aplikasi web sederhana berbasis PHP untuk mengelola dan menampilkan informasi berbagai jenis ikan. Aplikasi ini dibuat menggunakan XAMPP dan tidak menggunakan database SQL atau MySQL. Data ikan disimpan menggunakan array PHP.

Project ini menerapkan tiga bagian utama:
- Data Layer untuk menyimpan data ikan.
- Processing Layer untuk mengolah dan menghitung data.
- Presentation Layer untuk menampilkan data kepada pengguna.

## Tujuan

1. Menerapkan dasar pemrograman PHP.
2. Memahami pemisahan Data Layer, Processing Layer, dan Presentation Layer.
3. Mengelola data ikan menggunakan array.
4. Melakukan perhitungan data secara otomatis.
5. Menampilkan informasi ikan dalam bentuk tabel.
6. Menerapkan logika kondisi untuk menentukan status stok.

## Fitur

### 1. Data Ikan
Sistem menyimpan informasi:
- ID ikan
- Nama ikan
- Jenis ikan
- Harga
- Jumlah stok
- Keterangan

### 2. Dashboard Ringkasan
Dashboard menampilkan:
- Jumlah jenis ikan
- Total stok ikan
- Total nilai seluruh stok

### 3. Perhitungan Total Stok
Sistem menghitung seluruh jumlah ikan yang tersedia secara otomatis.

### 4. Perhitungan Nilai Stok
Nilai stok dihitung dengan rumus:

Harga x Jumlah Stok

### 5. Status Stok Otomatis
Status stok ditentukan berdasarkan jumlah ikan:
- Aman: stok 8 ekor atau lebih
- Menipis: stok 3 sampai 7 ekor
- Kritis: stok kurang dari 3 ekor

### 6. Warna Status
Warna pada baris data disesuaikan dengan kondisi stok untuk memudahkan pengguna melihat data yang membutuhkan perhatian.

### 7. Format Harga Rupiah
Harga ditampilkan dalam format mata uang Rupiah, contoh:

Rp 25.000

### 8. Tampilan Responsive
Tampilan website dapat menyesuaikan ukuran layar komputer maupun perangkat dengan layar lebih kecil.

## Struktur Project

```text
sistem_informasi_ikan/
├── README.md
├── index.php
├── ikan.php
└── functions.php
```

## Penjelasan File

### ikan.php
Berfungsi sebagai Data Layer. File ini menyimpan data ikan dalam array yang berisi ID, nama, jenis, harga, stok, dan keterangan.

### functions.php
Berfungsi sebagai Processing Layer. File ini berisi fungsi untuk menghitung total nilai stok, memformat harga menjadi Rupiah, dan menentukan status stok.

### index.php
Berfungsi sebagai Presentation Layer. File ini memanggil data dari ikan.php dan fungsi dari functions.php, kemudian menampilkan hasilnya dalam bentuk halaman web.

### README.md
Berisi dokumentasi mengenai tujuan, fitur, struktur, cara menjalankan, dan konsep yang digunakan dalam project.

## Alur Sistem

```text
ikan.php
Data Layer
    |
    v
functions.php
Processing Layer
    |
    v
index.php
Presentation Layer
    |
    v
Tampilan Sistem Informasi Data Ikan
```

## Teknologi yang Digunakan

- PHP
- HTML
- CSS
- XAMPP
- Apache
- GitHub

Database tidak digunakan. Data disimpan menggunakan array PHP.

## Cara Menjalankan di XAMPP

1. Pastikan XAMPP telah terpasang.
2. Letakkan folder project ke:

```text
C:\xampp\htdocs\
```

3. Contoh:

```text
C:\xampp\htdocs\sistem_informasi_ikan
```

4. Buka XAMPP Control Panel.
5. Jalankan Apache.
6. MySQL tidak perlu dijalankan.
7. Buka browser dan akses:

```text
http://localhost/sistem_informasi_ikan/
```

## Contoh Data

| ID | Nama | Jenis | Harga | Stok |
|---|---|---|---:|---:|
| I001 | Ikan Lele | Air Tawar | Rp 18.000 | 25 |
| I002 | Ikan Nila | Air Tawar | Rp 28.000 | 18 |
| I003 | Ikan Gurame | Air Tawar | Rp 45.000 | 7 |
| I004 | Ikan Koi | Ikan Hias | Rp 75.000 | 4 |
| I005 | Ikan Cupang | Ikan Hias | Rp 25.000 | 2 |

## Konsep Pembelajaran

### Data Layer
File `ikan.php` bertugas menyimpan data.

### Processing Layer
File `functions.php` bertugas menjalankan proses dan logika program.

### Presentation Layer
File `index.php` bertugas menampilkan hasil pengolahan data kepada pengguna.

Pembagian ini membuat struktur program lebih terorganisir dan memudahkan pengembangan.

## Database

Project ini sengaja dibuat tanpa SQL dan MySQL. Data disimpan langsung pada file `ikan.php` menggunakan array PHP.

Keuntungan pendekatan ini:
- Tidak memerlukan konfigurasi database.
- Mudah dijalankan untuk pembelajaran.
- Cocok untuk latihan konsep Data Layer dan Processing Layer.
- Cukup menggunakan Apache pada XAMPP.

## Pengembangan Selanjutnya

Project dapat dikembangkan dengan fitur:
- Menambah data ikan
- Mengedit data ikan
- Menghapus data ikan
- Mencari data ikan
- Filter berdasarkan jenis ikan
- Pengurutan harga dan stok
- Upload gambar ikan
- Sistem login
- Database MySQL
- Laporan dan cetak data

## Informasi Project

Nama Project: Sistem Informasi Data Ikan  
Platform: Web  
Bahasa Pemrograman: PHP  
Server: Apache / XAMPP  
Database: Tidak menggunakan SQL/MySQL  
Penyimpanan Data: Array PHP
