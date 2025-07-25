## 🛠 INSTALLATION GUIDE – Sistem Informasi Perpustakaan

Dokumen ini berisi langkah-langkah untuk menginstal dan menjalankan aplikasi web "Sistem Informasi Perpustakaan" secara lokal di komputer Anda.

---

## 📋 Persyaratan Sistem

Pastikan Anda telah menginstal software berikut:

| ---------- | -------------------------------------- |
| Komponen   | Versi Minimum                          |
| ---------- | -------------------------------------- |
| PHP        | 7.4 atau lebih baru                    |
| MySQL      | 5.7 atau lebih baru                    |
| Web Server | Apache (XAMPP / Laragon / LAMP)        |
| Browser    | Modern Browser (Chrome, Edge, Firefox) |
| ---------- | -------------------------------------- |

---

## 📁 Struktur Direktori Utama

```
PERPUSTAKAAN/
│
├── src/
│   ├── admin/
│   │   ├── agt/
│   │   ├── buku/
│   │   ├── laporan/
│   │   ├── log/
│   │   ├── pengguna/
│   │   └── sirkul/
│   ├── assets/
│   ├── build/
│   ├── dist/
│   ├── home/
│   ├── inc/
│   ├── plugins/
│   ├── index.php
│   ├── login.php
│   └── logout.php
│
├── sql/
│   └── data_perpus.sql
│
├── docs/
│   └── INSTALLATION.md
│
└── README.md
```

---

## 🔌 Langkah Instalasi

### 1. Clone atau Unduh Proyek

Salin folder `PERPUSTAKAAN/` ke direktori `htdocs` milik XAMPP Anda.

```
C:\xampp\htdocs\PERPUSTAKAAN
```

### 2. Setup Database

* Jalankan XAMPP Control Panel, aktifkan **Apache** dan **MySQL**.
* Akses `http://localhost/phpmyadmin`
* Buat database baru dengan nama: `data_perpus`
* Import file `sql/data_perpus.sql`

### 3. Konfigurasi Koneksi Database

Edit file `src/inc/koneksi.php` dan sesuaikan kredensial sesuai server Anda:

```php
$host = "localhost";
$user = "root";
$pass = "1234"; // ubah sesuai password MySQL Anda
$db   = "data_perpus";
```

### 4. Jalankan Aplikasi

Buka browser dan akses:

```
http://localhost/PERPUSTAKAAN/
```

---

## 🔐 Login Akun Default

| Role          | Username | Password |
| ------------- | -------- | -------- |
| Administrator | salmaaa  | 123      |

---

## 📸 Tampilan Aplikasi

* Desain responsif cocok untuk desktop dan tablet.
* Warna dominan: merah, kuning, hijau, biru, putih.
* Menggunakan Bootstrap dan SweetAlert.

---

## ⚡ Masalah Umum

1. **Halaman kosong** → Pastikan PHP ≥ 7.4 dan `display_errors` aktif di php.ini.
2. **Database tidak terkoneksi** → Cek kembali file `koneksi.php`.
3. **Gagal login** → Pastikan username & password sesuai.

---

## ☎ Kontak Developer

| ------------ | ------------------ |
| Nama Lengkap | Salma Diani Putri  |
| ------------ | ------------------ |
| NIM          | 202312025          |
| Jurusan      | Teknik Informatika |
| Instansi     | STITEK Bontang     |
| ------------ | ------------------ |